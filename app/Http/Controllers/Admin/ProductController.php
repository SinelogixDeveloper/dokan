<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



use App\Product;

use App\category;

use App\ImageUpload;

use Illuminate\Http\Request;

use App\vendornoti;

use App\Attributes;

use DB;

use Auth;



class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $data = Product::latest()->paginate(20);

        $name='';

        return view('admin/listproducts', compact('data','name'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    public function filter(Request $request)

    {

        $name=$request->get('product_name');

        $data = Product::where('product_name', 'like', '%' . $name . '%')->orderBy('id','desc')->paginate(20);

        //dd($data);

        return view('admin/listproducts', compact('data','name'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    public function bulk_edit()

    {

        $data = Product::latest()->paginate(50);

        return view('admin/bulk_edit', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    

    public function new_arrival()

    {

        //$data = Product::latest()->paginate(50);

        $data = Product::where('new_arrival','1')->paginate(50);

        return view('admin/new_arrival_product', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function best_seller()
    {
        //$data = Product::latest()->paginate(50);
        $data = Product::where('best_seller', '1')->paginate(50);
        return view('admin/best_seller_product', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function most_rating()
    {
        //$data = Product::latest()->paginate(50);
        $data = Product::where('most_rating', '1')->paginate(50);
        return view('admin/most_rating_product', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
     public function best_offer()
    {
        //$data = Product::latest()->paginate(50);
        $data = Product::where('best_offer', '1')->paginate(50);
        return view('admin/best_offer_product', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }




    public function changenewarrial($id)

    {

        $product = Product::find($id);



        $product->new_arrival =  '0';



        $product->save();



        return redirect('/admin/new-arrival');   

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //$data = Product::latest()->paginate(5);

        $data = category::all();

        $product = Product::all();

        $attr = DB::table('attributes')->select('att_name')->get();

        $brands = \App\Brand::all();

        return view('admin/product', compact('data','product','attr','brands'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

     public function store(Request $request)

    {

        

        $created_by= Auth::guard('admin')->user()->id;

        $users = DB::table('admins')->where('id', '=', $created_by)->get();

        $created_by_name=$users[0]->name;

        

        $image = $request->file('featured_images');

        $featured_images = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('product_images'), $featured_images);



        $data=[];



        $uploaded_images = DB::table('image_uploads')->get();



        foreach($uploaded_images as $file)

        {  

            $data[] = $file->filename;  

        }

        

        // $cat=[];



        // if ($cate = $request->input('product_categories'))

        // {

            

        //         foreach($cate as $ca)

        //         {

        //           $cat[] = $ca;

        //         }

        // }

        

        $similar_product=[];



        if ($sim_pro = $request->input('similar_product'))

        {

            //dd($cate);

                foreach($sim_pro as $ca)

                {

                  $similar_product[] = $ca;

                }

        }



        $new_array=[];

        if ($attr = $request->input('product_attribute'))

        {

            $filtered = array_filter($attr);

            if(!empty($filtered))

            {

                $attr_name = $request->input('att_name');

                $new_array = [];

                foreach($attr_name as $attr_key => $attr_val)

                {

                    $new_array[$attr_val] = $attr[$attr_key];



                } 

            }



        }

        

        $product = new Product;

        $product

           ->setTranslation('product_name', 'en', $request->product_name_en)

           ->setTranslation('product_name', 'ar', $request->product_name_ar)

           ->setTranslation('product_short_description', 'en', $request->product_short_dis_en)

           ->setTranslation('product_short_description', 'ar', $request->product_short_dis_ar)

           ->setTranslation('product_full_discription', 'en', $request->product_full_dis_en)

           ->setTranslation('product_full_discription', 'ar', $request->product_full_dis_ar);

        $product->product_price = $request->get('product_price');

        $product->product_offer_price = $request->get('product_offer_price');

        $product->product_qty = $request->get('product_qty');

        $product->product_sku = $request->get('product_sku');

        $product->from_date = $request->get('from_date');

        $product->to_date = $request->get('to_date');

        if(!empty($new_array))

        {

            $product->product_size = json_encode($new_array);

        }

        $product->featured_images = $featured_images;

        $product->background_color = $request->get('background_color');

        // $product->product_categories = implode(",", $cat);

        $product->product_categories = $request->get('product_categories');

        $product->similar_product = implode(",", $similar_product);

        $product->product_status = $request->get('product_status');

        $product->new_arrival = '0';

        $product->approve_status = '1';

        $product->created_by = $created_by;

        $product->created_by_name = $created_by_name;

        $product->product_images = implode(",", $data);

        $product->product_brand = $request->product_brand;



        $product->save();  

        

        // $form_data = array(

        //     'product_name'          =>   $request->product_name,

        //     'product_price'         =>   $request->product_price,

        //     'product_categories'    =>   $request->product_categories,

        //     'product_qty'           =>   $request->product_qty,

        //     'product_sku'         =>     $request->product_sku,

        //     'product_status'         =>   $request->product_status,

        //     'created_by'            => $created_by,

        //     'created_by_name'       => $created_by_name,

        //     'product_images'        =>   json_encode($data)

        // );



        // Product::create($form_data);

        

        DB::table('image_uploads')->truncate();





        return redirect('admin/product')->with('success', 'Product Added successfully.');

    }

    

    public function imageuploadstore(Request $request)

    {

        $image = $request->file('file');

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('product_images'),$imageName);

        $data  =   ImageUpload::create(['filename' => $imageName]);

        return response()->json(["status" => "success", "data" => $data]);



    }



    public function deleteImage(Request $request)

    {

        $filename =  $request->get('filename');

        ImageUpload::where('filename',$filename)->delete();

        $path=public_path().'/product_images/'.$filename;

        if (file_exists($path)) {

            unlink($path);

        }

        return $filename;  

    }

    

    public function lowstock(Request $request)

    {

        $product = DB::table('products')->where('product_qty','25')->get()->toArray();

        if(!empty($product))

        {

            return response()->json(['success'=>"show."]);

        }

        else

        {

            return response()->json(['failer'=>"hide."]);

        }



    }

    



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $data = category::all();

        $product = Product::find($id);

        $similar_product = Product::all();

        $attr = DB::table('attributes')->select('att_name')->get();

        $selected_brand = \App\Brand::where('id', $product->product_brand)->first();

        $brands = \App\Brand::all();

        return view('admin/product_update', compact('product','data','similar_product','attr','selected_brand','brands'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $data = category::all();

        

        $product = Product::find($id);

        return view('admin/product_update', compact('product','data'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {



        $product = Product::find($id);

        

        //$product->product_name =  $request->get('product_name');

        $product

           ->setTranslation('product_name', 'en', $request->product_name_en)

           ->setTranslation('product_name', 'ar', $request->product_name_ar)

           ->setTranslation('product_short_description', 'en', $request->product_short_dis_en)

           ->setTranslation('product_short_description', 'ar', $request->product_short_dis_ar)

           ->setTranslation('product_full_discription', 'en', $request->product_full_dis_en)

           ->setTranslation('product_full_discription', 'ar', $request->product_full_dis_ar);

        $product->product_price = $request->get('product_price');

        $product->product_offer_price = $request->get('product_offer_price');

        $product->product_old_price = $request->get('product_old_price');

        $product->product_qty = $request->get('product_qty');

        $product->from_date = $request->get('from_date');

        $product->to_date = $request->get('to_date');

        $product->product_sku = $request->get('product_sku');

        $product->background_color = $request->get('background_color');

        $product->product_categories=$request->get('product_categories');

        

        $product->approve_status = $request->get('approve_status');

        $product->new_arrival = $request->get('new_arrival');
        
        $product->best_offer = $request->get('best_offer');

        $product->product_brand = $request->product_brand;

        

        if($request->get('approve_status') !='')

        {

            if($request->get('approve_status') =='1')

            {

                $vendor_data = array(

                'vendor_id'              =>   $product->created_by,

                'vendor_not_msg'         =>   'Your Product '.$product->product_name.' approve by admin!!',

                'vendor_not_status'      =>   '0',

                'product_id'             =>  $id,

                ); 

                $product->product_status = $request->get('product_status');

            }

            else

            {

                $vendor_data = array(

                'vendor_id'              =>   $product->created_by,

                'vendor_not_msg'         =>   'Your Product '.$product->product_name.' Disapprove by admin!!',

                'admin_comment'          =>    $request->get('admin_comment'),

                'vendor_not_status'      =>   '0',

                'product_id'             =>  $id,

                ); 

                $product->product_status = '0';

                $product->reason_for_disapprove = $request->get('admin_comment');

            }

            vendornoti::create($vendor_data);

        }

       

    //   $cat=[];



    //     if($cate = $request->input('product_categories'))

    //     {

    //         //dd($cate);

    //             foreach($cate as $ca)

    //             {

    //               $cat[] = $ca;

    //             }

    //             $product->product_categories = implode(",", $cat);

    //     }

        

        $similar_product=[];



        if ($sim_pro = $request->input('similar_product'))

        {

                foreach($sim_pro as $ca)

                {

                  $similar_product[] = $ca;

                }

                $product->similar_product = implode(",", $similar_product);

        }



        $new_array=[];

        if ($attr = $request->input('product_attribute'))

        {

            $filtered = array_filter($attr);

            if(!empty($filtered))

            {

                $attr_name = $request->input('att_name');

                $new_array = [];

                foreach($attr_name as $attr_key => $attr_val)

                {

                    $new_array[$attr_val] = $attr[$attr_key];



                } 

                $product->product_size = json_encode($new_array);

            }

        }

        

       $uploaded_images = DB::table('image_uploads')->get()->toArray();

        $data=[];

        if($uploaded_images !=null)

        {

            foreach($uploaded_images as $file)

            {  

                $data[] = $file->filename;  

            }

            $product->product_images = implode(",", $data);

        }

        

        if($request->hasFile('featured_images')){

            $image = $request->file('featured_images');

            $featured_images = rand() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('product_images'), $featured_images);

            $product->featured_images = $featured_images;

        }



        $product->save();

        

        DB::table('image_uploads')->truncate();



        return redirect('/admin/product')->with('success', 'Product updated!');



    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        

        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/admin/product')->with('success', 'Product deleted successfully');

    }

    

    public function deleteAll(Request $request)

    {

        $ids = $request->ids;

        DB::table("products")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Products Deleted successfully."]);

    }

    

    public function bulkDelete(Request $request)

    {

        $ids = $request->ids;

        DB::table("products")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Products Deleted successfully."]);

    }

    

}


<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Product;
use App\Notification;
use App\ImageUpload;
use App\Attributes;
use App\category;
use Illuminate\Http\Request;
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
        $vendor_id=Auth::guard('vendor')->user()->id;
        //$data = Product::join('vendors','vendors.id','=','products.created_by')->paginate(2);
        $data = Product::where('created_by',$vendor_id)->paginate(20);
        $name='';
        return view('vendor/listproducts', compact('data','name'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function filter(Request $request)
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        $name=$request->get('product_name');
        $data = Product::where('product_name', 'like', '%' . $name . '%')->where('created_by',$vendor_id)->orderBy('id','desc')->paginate(20);
        //dd($data);
        return view('vendor/listproducts', compact('data','name'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $vendor_id=Auth::guard('vendor')->user()->id;
        $attr = Attributes::whereRaw("FIND_IN_SET('$vendor_id',assign_to)")->where('show_pro_page','1')->get();
        $brands = \App\Brand::all();
        return view('vendor/product', compact('data','attr','product', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created_by= Auth::guard('vendor')->user()->id;
        $vendors = DB::table('vendors')->where('id', '=', $created_by)->get();
        $created_by_name=$vendors[0]->name;
        
        // $request->validate([
        //     'product_name'    =>  'required',
        //     'product_price'     =>  'required',
        //     'product_qty'     =>  'required',
        //     'product_categories' =>'required',
        //     'product_sku'     =>  'required',
        // ]);
        
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
        
        $similar_product=[];

        if ($sim_pro = $request->input('similar_product'))
        {
            //dd($cate);
                foreach($sim_pro as $ca)
                {
                  $similar_product[] = $ca;
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
        $product->featured_images = $featured_images;
        $product->product_qty = $request->get('product_qty');
        if(!empty($new_array))
        {
            $product->product_size = json_encode($new_array);
        }
        $product->product_sku = $request->get('product_sku');
        $product->from_date = $request->get('from_date');
        $product->to_date = $request->get('to_date');
        $product->background_color = $request->get('background_color');
        //$product->product_categories = implode(",", $cat);
        $product->product_categories = $request->get('product_categories');
        $product->similar_product = implode(",", $similar_product);
        $product->product_status = 0;
        $product->new_arrival = '0';
        $product->created_by = $created_by;
        $product->created_by_name = $created_by_name;
        $product->product_images = implode(",", $data);
        $product->product_brand = $request->product_brand;
        //dd()

        $product->save();
        
        $get_id=$product->id;
        
        // $form_data = array(
        //     'product_name'          =>   $request->product_name,
        //     'product_price'         =>   $request->product_price,
        //     'product_categories'    =>   $request->product_categories,
        //     'product_qty'           =>   $request->product_qty,
        //     'product_sku'           =>     $request->product_sku,
        //     'product_status'        =>   $request->product_status,
        //     'created_by'            => $created_by,
        //     'created_by_name'       => $created_by_name,
        //     'product_images'        =>   json_encode($data)
        // );

        // Product::create($form_data);
        
        DB::table('image_uploads')->truncate();
        
        $vendor_data = array(
            'vendor_id'     =>   $created_by,
            'not_msg'       =>   'New product created by vendor name is '.$created_by_name.' and waiting for admin approval!!',
            'product_id'    => $get_id,
            'not_status'    =>   '0',
        );
        
        Notification::create($vendor_data);

        return redirect('vendor/product')->with('success', 'Product Added successfully.');
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
         $vendor_id=Auth::guard('vendor')->user()->id;
        $attr = Attributes::whereRaw("FIND_IN_SET('$vendor_id',assign_to)")->where('show_pro_page','1')->get();
        $similar_product = Product::all();
        $selected_brand = \App\Brand::where('id', $product->product_brand)->first();
        $brands = \App\Brand::all();
        return view('vendor/product_update', compact('product','data','attr','similar_product','selected_brand','brands'));
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
        return view('vendor/product_update', compact('product','data'));
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
        
        $created_by= Auth::guard('vendor')->user()->id;
        $vendors = DB::table('vendors')->where('id', '=', $created_by)->get();
        $created_by_name=$vendors[0]->name;

        // $image = $request->file('product_images');

        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('product_images'), $new_name);

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
        $product->background_color = $request->get('background_color');
        $product->product_qty = $request->get('product_qty');
        $product->from_date = $request->get('from_date');
        $product->to_date = $request->get('to_date');
        //$product->product_size = $request->get('product_size');
        $product->product_sku = $request->get('product_sku');
        $product->product_categories = $request->get('product_categories');
        // $product->product_status = $request->get('product_status');
        $product->new_arrival = '0';
        $product->created_by = $created_by;
        $product->created_by_name = $created_by_name;
        $product->product_brand = $request->product_brand;
        
        // if($request->hasFile('product_images')){
        //     $image = $request->file('product_images');
        //     $new_name = rand() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('product_images'), $new_name);
        //     $product->product_images = $new_name;
        // }
        
        
        // $cat=[];

        // if($cate = $request->input('product_categories'))
        // {
            
        //         foreach($cate as $ca)
        //         {
        //           $cat[] = $ca;
        //         }
        //         $product->product_categories = implode(",", $cat);
        // }
        
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
        
        if($product->reason_for_disapprove !='')
        {
          //echo $id;die;
          $vendor_data = array(
              'vendor_id'     =>   $created_by,
              'not_msg'       =>   'Disapprove Product Updated By Vendor  '.$created_by_name.' and waiting for admin approval!!',
              'product_id'    => $id,
              'not_status'    =>   '0',
          );

          Notification::create($vendor_data);
        }

        $product->save();
        
        DB::table('image_uploads')->truncate();

        return redirect('/vendor/product')->with('success', 'Product updated!');

    }

    public function bulkupdate(Request $request)
    {
        echo "<pre>";print_r($request);die;
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

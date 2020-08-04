<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\BusinessCategory;

use App\BusinessUpload;

use App\Vendor;

use Illuminate\Http\Request;



class BusinessCategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index($id)

    {
        $vendor = $id;

        $data = BusinessUpload::where('vendor_id',$id)->paginate(10);

        // return view('admin/business_category_list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

        return view('admin/business_upload_list', compact('data', 'vendor'))->with('i', (request()->input('page', 1) - 1) * 5);

    }



    public function active($id)

    {

         $business_upload = BusinessUpload::find($id);



        $business_upload->upload_business_status =  '1';



        $business_upload->save();



        return redirect('/admin/business_upload')->with('success', 'business updated successfully!');



    }



    public function inactive($id)

    {

          $vendor = Vendor::find($id);



          $vendor->vendor_locked =  '0';



            $vendor->save();



        return redirect('/admin/business_upload')->with('success', 'business updated successfully!');



    }



    public function unlock($id)

    {

         $vendor = Vendor::find($id);



          $vendor->vendor_locked =  '1';



        $vendor->save();



        return redirect('/admin/business_upload')->with('success', 'business updated successfully!');



    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

         return view('admin/add_business_category');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $form_data = array(

            'business_category_name'  =>   $request->business_category_name,

            'business_status'         =>   $request->business_status

        );



        BusinessCategory::create($form_data);



        return redirect('admin/business_category')->with('success', 'Business Category Added successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\BusinessCategory  $businessCategory

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $business_category = BusinessCategory::find($id);

        return view('admin/update_business_category', compact('business_category'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\BusinessCategory  $businessCategory

     * @return \Illuminate\Http\Response

     */

    public function edit(BusinessCategory $businessCategory)

    {

        

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\BusinessCategory  $businessCategory

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

        $business_category = BusinessCategory::find($id);

        $business_category->business_category_name =  $request->get('business_category_name');

        $business_category->business_status =  $request->get('business_status');



        $business_category->save();



        return redirect('admin/business_category')->with('success', 'Business Category Updated successfully.');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\BusinessCategory  $businessCategory

     * @return \Illuminate\Http\Response

     */

    public function destroy(BusinessCategory $businessCategory)

    {

        //

    }

}


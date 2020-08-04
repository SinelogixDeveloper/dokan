<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\BusinessSubCategory;
use App\BusinessCategory;
use Illuminate\Http\Request;

class BusinessSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BusinessSubCategory::latest()->paginate(10);
        return view('admin/business_subcategory_list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = BusinessCategory::all();
        return view('admin/add_business_subcategory', compact('data'));
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
            'business_subcategory_name'     =>   $request->business_subcategory_name,
            'business_category'             =>   $request->business_category,
            'business_subcategory_status'   =>   $request->business_subcategory_status
        );

        BusinessSubCategory::create($form_data);

        return redirect('admin/business_subcategory')->with('success', 'Business SubCategory Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessSubCategory  $businessSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BusinessCategory::all();
        $business_subcategory = BusinessSubCategory::find($id);
        return view('admin/update_business_subcategory', compact('business_subcategory','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessSubCategory  $businessSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSubCategory $businessSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessSubCategory  $businessSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business_subcategory = BusinessSubCategory::find($id);
        $business_subcategory->business_subcategory_name =  $request->get('business_subcategory_name');
        $business_subcategory->business_category =  $request->get('business_category');
        $business_subcategory->business_subcategory_status =  $request->get('business_subcategory_status');

        $business_subcategory->save();

        return redirect('admin/business_subcategory')->with('success', 'Business SubCategory Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessSubCategory  $businessSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessSubCategory $businessSubCategory)
    {
        //
    }
}

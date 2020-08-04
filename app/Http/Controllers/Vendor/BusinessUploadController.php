<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\BusinessUpload;
use App\category;
//use App\BusinessSubCategory;
use Illuminate\Http\Request;
use DB;
use Auth;

class BusinessUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        //$data = BusinessUpload::where('created_by',$vendor_id)->paginate(10);
        $data = BusinessUpload::where('vendor_id',$vendor_id)->paginate(10);
        return view('vendor/business_upload_list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        return view('vendor/add_business_upload', compact('data'));
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
        $bank_proof ='';
        if($request->hasFile('bank_proof')){
            $image = $request->file('bank_proof');
            $bank_proof = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $bank_proof);
            //$businessUpload->upload_images = $bank_proof;
        }
        $cr_document ='';
        if($request->hasFile('cr_document')){
            $image = $request->file('cr_document');
            $cr_document = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $cr_document);
            //$businessUpload->upload_images = $bank_proof;
        }
        $merchant_document='';
        if($request->hasFile('merchant_document')){
            $image = $request->file('merchant_document');
            $merchant_document = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $merchant_document);
            //$businessUpload->upload_images = $bank_proof;
        }
        $trade_document='';
        if($request->hasFile('trade_document')){
            $image = $request->file('trade_document');
            $trade_document = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $trade_document);
            //$businessUpload->upload_images = $bank_proof;
        }
        $computer_document='';
        if($request->hasFile('computer_document')){
            $image = $request->file('computer_document');
            $computer_document = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $computer_document);
            //$businessUpload->upload_images = $bank_proof;
        }
        $authorised_document='';
        if($request->hasFile('authorised_document')){
            $image = $request->file('authorised_document');
            $authorised_document = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_document'), $authorised_document);
            //$businessUpload->upload_images = $bank_proof;
        }

        $form_data = array(
            'vendor_id'                     =>   $created_by,
            'created_by'                    =>   $created_by_name,
            'bank_proof'                    =>   $bank_proof,
            'cr_document'                   =>   $cr_document,
            'merchant_document'             =>   $merchant_document,
            'trade_document'                =>   $trade_document,
            'computer_document'             =>   $computer_document,
            'authorised_document'           =>   $authorised_document,
        );

        $check =BusinessUpload::create($form_data);
        return redirect('/vendor/business_upload')->with('success', 'Business upload successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessUpload  $businessUpload
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business_upload = BusinessUpload::find($id);
        $data = category::all();
        return view('vendor/update_business_upload', compact('business_upload','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessUpload  $businessUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessUpload $businessUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessUpload  $businessUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $businessUpload = BusinessUpload::find($id);
        
        $created_by= Auth::guard('vendor')->user()->id;
        $vendors = DB::table('vendors')->where('id', '=', $created_by)->get();
        $created_by_name=$vendors[0]->name;

        $businessUpload->business_title =  $request->get('business_title');
        $businessUpload->upload_business_category = $request->get('upload_business_category');
        $businessUpload->upload_business_subcategory = $request->get('upload_business_subcategory');
        $businessUpload->upload_business_location = $request->get('upload_business_location');
        
         $businessUpload->created_by = $created_by;
        $businessUpload->created_by_name = $created_by_name;

        if($request->hasFile('upload_images')){
            $image = $request->file('upload_images');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('business_upload_images'), $new_name);
            $businessUpload->upload_images = $new_name;
        }

        $businessUpload->save();

        return redirect('/vendor/business_upload')->with('success', 'Business Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessUpload  $businessUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessUpload $businessUpload)
    {
        //
    }
}

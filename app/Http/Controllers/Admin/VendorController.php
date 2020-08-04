<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\vendornoti;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Crypt;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::latest()->paginate(5);
        $search='';
        return view('admin/vendorlist', compact('data','search'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function filter(Request $request,Vendor $vendor)
    {
       
        $queryvendor = Vendor::query();
        if(!empty($request->input('name')))
        {
             $queryvendor->where('name','LIKE','%'.$request->input('name').'%');
        }
        $data = $queryvendor->paginate(5);
        $search=$request->input('name');
        return view('admin/vendorlist', compact('data','search'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('admin/vendor_edit', compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
         $vendor = Vendor::find($id);

        $vendor->vendor_status =  '1';

        $vendor->save();
        
        $vendor_data = array(
            'vendor_id'              =>   $vendor->id,
            'vendor_not_msg'         =>   'Your account is approve by admin!!',
            'vendor_not_status'      =>   '0',
        ); 

        vendornoti::create($vendor_data);

        return redirect('/admin/vendor')->with('success', 'vendor updated successfully!');

    }

    public function inactive($id)
    {
         $vendor = Vendor::find($id);

        $vendor->vendor_status =  '0';

        $vendor->save();
        
        $vendor_data = array(
            'vendor_id'              =>   $vendor->id,
            'vendor_not_msg'         =>   'Your account is Disapprove by admin!!',
            'vendor_not_status'      =>   '0',
        ); 

        vendornoti::create($vendor_data);

        return redirect('/admin/vendor')->with('success', 'vendor updated successfully!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $vendor = Vendor::find($id);

        $vendor->name =  $request->get('name');
        $vendor->email = $request->get('email');
        $vendor->vendor_status = $request->get('vendor_status');

       
        
        if($request->hasFile('vendor_image')){
            $image = $request->file('vendor_image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('vendor_profile'), $new_name);
            $vendor->vendor_image = $new_name;
        }

        $vendor->save();

        return redirect('/admin/vendor')->with('success', 'Vendor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

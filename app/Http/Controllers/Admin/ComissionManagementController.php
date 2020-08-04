<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\comission;
use App\RequestOrder;
use App\Vendor;
use Illuminate\Http\Request;
use DB;

class ComissionManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = comission::latest()->paginate(50);
        $data = DB::table('comissions')
                    ->join('vendors', 'vendors.id', '=', 'comissions.vendor_id')
                    ->select('comissions.*', 'vendors.*')
                    ->paginate(50);
        return view('admin/comissionlist', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Vendor::all();
        return view('admin/add_comission', compact('data'));
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
            'vendor_id'           =>   $request->vendor_id,
            'comission'     =>   $request->comission_rate
        );

        comission::create($form_data);
        return redirect('admin/admin_comission')->with('success', 'Comission Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComissionManagement  $comissionManagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comission = comission::find($id);
        $data = Vendor::all();
        return view('admin/update_comission', compact('comission','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComissionManagement  $comissionManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(ComissionManagement $comissionManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComissionManagement  $comissionManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comission = comission::find($id);
        $comission->vendor_id =  $request->get('vendor_id');
        $comission->comission =  $request->get('comission_rate');

        $comission->save();

        return redirect('admin/admin_comission')->with('success', 'Comission Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComissionManagement  $comissionManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComissionManagement $comissionManagement)
    {
        //
    }
}

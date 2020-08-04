<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\vendornoti;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Crypt;
use DB;
use App\RequestOrder;
use App\RequestOrderItems;

use App\Exports\VendorExport;
use Maatwebsite\Excel\Facades\Excel;

class VendorReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vendor::latest()->paginate(50);
        $search='';
        return view('admin/vendorreport', compact('data','search'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seg_id=request()->segment(4);
        $data = DB::table('request_orders')
                    ->join('users', 'users.id', '=', 'request_orders.user_id')
                    ->select('request_orders.*','users.name')
                    ->whereRaw("FIND_IN_SET('$id',req_seller_id)")
                    ->paginate(10);
        return view('admin/vendorreport_view', compact('data','seg_id'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function detailsview($id)
    {
        $order_id=request()->segment(4);
        $seller_id=request()->segment(5);
        $RequestOrder = RequestOrder::find($order_id);

        $req_obj = new RequestOrderItems();
        $data = $req_obj->list_all_joinforreports($order_id,$seller_id);

        //$data = RequestOrderItems::where('order_id',$order_id)->where('seller_id',$seller_id)->get();
        return view('admin/vendorreport_details_view', compact('data','RequestOrder'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function excelexport($id)
    {
        return Excel::download(new VendorExport($id), 'VendprReport.xlsx');
        return redirect()->action('CategoryController@index');
   }

    public function csvexport($id)
    {
        return Excel::download(new VendorExport($id), 'VendprReport.csv');
        return redirect()->action('CategoryController@index');
    }

}

<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\vendornoti;
use Illuminate\Http\Request;
use Auth;
use DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        //dd($vendor_id);
        //$data = vendornoti::where('vendor_not_status','0')->where('vendor_id' ,$vendor_id)->orwhere('vendor_not_status','1')->paginate(10);
        $data =vendornoti::where(function ($query) {
            $vendor_id=Auth::guard('vendor')->user()->id;
            $query->where('vendor_not_status','0')
                ->where('vendor_id',$vendor_id);
        })->orWhere(function($query) {
            $vendor_id=Auth::guard('vendor')->user()->id;
            $query->where('vendor_not_status','1')
            ->where('vendor_id',$vendor_id);
                	
        })->paginate(10);
         return view('vendor/listnotification', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function read($id)
    {
         $notification = vendornoti::find($id);

        $notification->vendor_not_status =  '1';

        $notification->save();

        return redirect('/vendor/notification')->with('success', 'notification read successfully!');

    }

    public function remove($id)
    {
         $notification = vendornoti::find($id);

        $notification->vendor_not_status =  '2';

        $notification->save();

        return redirect('/vendor/notification')->with('success', 'notification remove successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}

<?php



namespace App\Http\Controllers\Vendor;



use App\Http\Controllers\Controller;

use App\RequestOrder;

use App\RequestOrderItems;

use App\Product;

use App\OrderAddress;

use App\useraddress;

use App\Notification;

use Illuminate\Http\Request;

use DB;

use Auth;



class RequestOrderController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $vendor_id=Auth::guard('vendor')->user()->id;



        // $data = DB::table('request_order_items')

        //             ->join('request_orders', 'request_orders.id', '=', 'request_order_items.order_id')

        //             ->select('request_order_items.*', 'request_orders.*')

        //             ->where('request_order_items.seller_id',$vendor_id)

        //             ->get();



        $data = DB::table('request_orders')

                    ->join('users', 'users.id', '=', 'request_orders.user_id')

                    ->select('request_orders.*','users.name')

                    ->whereRaw("FIND_IN_SET('$vendor_id',req_seller_id)")

                    ->orderBy('request_orders.id', 'DESC')

                    ->paginate(20);

                    



        //echo "<pre>";print_r($data);die;            



        //$data = RequestOrder::latest()->paginate(10);

        return view('vendor/list_order_request', compact('data','vendor_id'))->with('i', (request()->input('page', 1) - 1) * 5);

    }



    

    public function show($id)

    {

        $vendor_id=Auth::guard('vendor')->user()->id;

        $RequestOrder = RequestOrder::find($id);

        $shipping_address=OrderAddress::where('order_id',$RequestOrder->referanceid)->first();

        // $data = RequestOrderItems::where('order_id',$RequestOrder->id)->where('seller_id',$vendor_id)->get();

        $req_obj = new RequestOrderItems();

        $data = $req_obj->list_all_order_vendor($RequestOrder->id,$vendor_id);

        return view('vendor/view_request_order', compact('RequestOrder','data','shipping_address'));

    }



    public function inprogress(Request $request)

    {

        $ids = $request->ids;

        $RequestOrder = RequestOrder::find($ids);

        $RequestOrder->order_status =  'inprogress';

        //$RequestOrder->payment_status =  'paid';

        $RequestOrder->save(); 

        

        $vendor_id=Auth::guard('vendor')->user()->id;



        $vendors = DB::table('vendors')->where('id', '=', $vendor_id)->get();

        $vendor_name=$vendors[0]->name;

        

        $vendor_data = array(

            'vendor_id'       =>   $vendor_id,

            'orderid'         =>   $RequestOrder->referanceid,

            'not_msg'         =>   'Order '.$RequestOrder->referanceid.' status changed from proseccing to Inprogress by vendor '.$vendor_name,

            'not_status'      =>   '0',

        );

        

        Notification::create($vendor_data);

        

        return response()->json(['success'=>""]);

    }

    public function cancel(Request $request)

    {

        $ids = $request->ids;

        $RequestOrder = RequestOrder::find($ids);

        $RequestOrder->order_status =  'cancelled';

        //$RequestOrder->payment_status =  'cancelled';



        $RequestOrder->save(); 

        return response()->json(['success'=>""]);

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\RequestOrder  $requestOrder

     * @return \Illuminate\Http\Response

     */

    public function edit(RequestOrder $requestOrder)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\RequestOrder  $requestOrder

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, RequestOrder $requestOrder)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\RequestOrder  $requestOrder

     * @return \Illuminate\Http\Response

     */

    public function destroy(RequestOrder $requestOrder)

    {

        //

    }

}


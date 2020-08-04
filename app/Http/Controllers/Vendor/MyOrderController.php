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



class MyOrderController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $vendor_id=Auth::guard('vendor')->user()->id;



        $data = DB::table('request_orders')

                    ->join('users', 'users.id', '=', 'request_orders.user_id')

                    ->select('request_orders.*','users.name')

                    ->whereRaw("FIND_IN_SET('$vendor_id',req_seller_id)")

                    ->orderBy('request_orders.id', 'DESC')

                    ->paginate(20);

                    

        return view('vendor/my_order_list', compact('data','vendor_id'))->with('i', (request()->input('page', 1) - 1) * 5);

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



    /**

     * Display the specified resource.

     *

     * @param  \App\RequestOrder  $requestOrder

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $vendor_id=Auth::guard('vendor')->user()->id;

        $RequestOrder = RequestOrder::find($id);

        $shipping_address=OrderAddress::where('order_id',$RequestOrder->referanceid)->first();
        // dd($shipping_address);
        // $data = RequestOrderItems::where('order_id',$RequestOrder->id)->where('seller_id',$vendor_id)->get();

        $req_obj = new RequestOrderItems();

        $data = $req_obj->list_all_order_vendor($RequestOrder->id,$vendor_id);

        return view('vendor/my_order_details', compact('RequestOrder','data','shipping_address'));

    }



    public function readytopickup(Request $request)

    {

        $ids = $request->ids;

        $RequestOrder = RequestOrder::find($ids);

        $RequestOrder->order_status =  'ready to pickup';

        $RequestOrder->payment_status =  'paid';



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


<?php



namespace App\Http\Controllers\Admin;




use App\Http\Controllers\Controller;

use App\Order;

use App\RequestOrder;

use App\RequestOrderItems;

use App\useraddress;

use App\OrderAddress;

use App\Product;

use App\User;

use Illuminate\Http\Request;

use DB;

use Mail;

use Response;

use PDF;
use File;

use Illuminate\Support\Facades\Crypt;



//use Haruncpi\LaravelIdGenerator\IdGenerator;



class OrderController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        // $data = Order::latest()->paginate(50);

        // return view('admin/orderlist', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5); 

        //$data = RequestOrder::latest()->paginate(10);

        $data = DB::table('request_orders')

                    ->join('users', 'users.id', '=', 'request_orders.user_id')

                    ->select('request_orders.*','users.name')

                    ->orderBy('id','DESC')

                    ->paginate(20);

        return view('admin/orderlist', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

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

        $lastOrder = Order::orderBy('id', 'desc')->first();

        if ( ! $lastOrder )

        {

            $number = 0;

        }

        else 

        {

            $number = substr($lastOrder->referanceid, 3);

        }

        $prefix = 'ORD' . sprintf('%06d', intval($number) + 1);

        echo "<pre>";print_r($prefix);die;

    }

    

    public function accept(Request $request)

    {

        $ids = $request->ids;

        $product = RequestOrder::find($ids);

        $user=User::find($product->user_id);

        //dd($user->email);

        $name = $user->name;

        $email = $user->email;

        // $title = "Order Id: ".$product->id;



        $product->payment_status='paid';

        $product->order_status='processing';



        $product->save();



        //$email_encrypted = Crypt::encryptString($email);

        $orderid = $product->referanceid;

        $totalprice = $product->total_price;

        $msg = 'Hi '.$name. ', Your Order Confirmed Successfully. Your Order ReferenceID for DO is '.$orderid.'. Total Amount QAR '.$totalprice.'. Thank you for shopping with us.';

        $title = 'DOKAN ORDER CONFIRMATION';

        
        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title], function ($m) use ($name, $email) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name);

            $m->subject('ORDER CONFIRMATION');

        });


                

        if (Mail::failures()) {

            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");

        }



    }



    public function cancel(Request $request)

    {

        $ids = $request->ids;

        $product = RequestOrder::find($ids);

        $user=User::find($product->user_id);

        //dd($user->email);

        $name = $user->name;

        $email = $user->email;

        // $title = "Order Id: ".$product->id;



        $product->order_status='cancelled';



        $product->save();



        //$email_encrypted = Crypt::encryptString($email);

        $orderid = $product->referanceid;

        $totalprice = $product->total_price;

        $msg = 'Hi '.$name. ', Your Order is cancelled. Your Order ReferenceID '.$orderid.'. Total Amount QAR '.$totalprice.'. Your order was unpaid so no refund has been made.';
        
        $title = 'DOKAN ORDER CANCELLATION';

        
        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title], function ($m) use ($name, $email) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name);

            $m->subject('ORDER CANCELLATION');

        });

                

        if (Mail::failures()) {

            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");

        }



    }

    

    public function complete(Request $request)

    {

        $ids = $request->ids;

        $product = RequestOrder::find($ids);

        $user=User::find($product->user_id);

        //dd($user->email);

        $name = $user->name;

        $email = $user->email;

        // $title = "Order Id: ".$product->id;



        $product->payment_status='paid';

        $product->order_status='complete';



        $product->save();



        //$email_encrypted = Crypt::encryptString($email);

        $orderid = $product->referanceid;

        $totalprice = $product->total_price;

        $msg = 'Hi '.$name. ', Your Order with ReferenceID  '.$orderid.' Delivered Successfully. Total Amount QAR '.$totalprice.'. Thank you for shopping with us.';
        
        $title = 'DOKAN ORDER DELIVERED';

        
        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title], function ($m) use ($name, $email) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name);

            $m->subject('ORDER DELIVERED');

        });

                

        if (Mail::failures()) {

            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");

        }



    }



    public function shipment(Request $request)

    {

        $ids = $request->ids;

        $product = RequestOrder::find($ids);

        $user=User::find($product->user_id);

        //dd($user->email);

        $name = $user->name;

        $email = $user->email;

        // $title = "Order Id: ".$product->id;



        $product->order_status='shipment';



        $product->save();



        //$email_encrypted = Crypt::encryptString($email);

        $orderid = $product->referanceid;

        $totalprice = $product->total_price;

        $msg = 'Hi '.$name. ', Your order is on its way !. Your Order ReferenceID '.$orderid.' Total Amount QAR '.$totalprice.'. Thank you for shopping with us.';
        
        $title = 'DOKAN ORDER DISPATCHED';

        
        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title], function ($m) use ($name, $email) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name);

            $m->subject('ORDER SHIPMENT DISPATCHED');

        });

                

        if (Mail::failures()) {

            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");

        }



        // $name1 = 'Alert Shipment';

        // $email1 = 'mishrakamlesh784@gmail.com';

        // // $title = "Order Id: ".$product->id;

        // //$email_encrypted = Crypt::encryptString($email);



        // Mail::send('emails.admin.ordershipment-email', ['msg' => 'Hi Shipment,below is a details for order  shipment.', 'email' => $email1], function ($m) use ($name1, $email1) {

        //     $m->from('sine.logix.testing@gmail.com', 'Dokan');

        //     $m->to($email1, $name1);

        //     $m->subject('Order Shipment');

        // });

                

        if (Mail::failures()) {

            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");

        }



    }

    

    public function filterorder(Request $request)

    {

        $status=$request->order_status;

        if($status =='all')

        {

            $data = DB::table('request_orders')

                ->join('users', 'users.id', '=', 'request_orders.user_id')

                ->select('request_orders.*','users.name')

                ->paginate(10);   

        }

        else

        {

            $data = DB::table('request_orders')

                    ->join('users', 'users.id', '=', 'request_orders.user_id')

                    ->select('request_orders.*','users.name')

                    ->where('request_orders.order_status',$status)

                    ->paginate(10);

        }

        

        return view('admin/orderlist', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Order  $order

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $RequestOrder = RequestOrder::find($id);

        

        //$data = RequestOrderItems::where('order_id',$RequestOrder->id)->get();

        

        $req_obj = new RequestOrderItems();

        $data = $req_obj->list_all_join($RequestOrder->id);

         

        

        // $shipping_address=useraddress::where('id',$RequestOrder->shipping_address_id)->get();

        $shipping_address = OrderAddress::where('order_id', $RequestOrder->referanceid)->first();
        
        
        return view('admin/view_order_details', compact('RequestOrder','data','shipping_address'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Order  $order

     * @return \Illuminate\Http\Response

     */

    public function edit(Order $order)

    {

        //

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Order  $order

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Order $order)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Order  $order

     * @return \Illuminate\Http\Response

     */

    public function destroy(Order $order)

    {

        //

    }

    public function sendInvoice($id)
    {
        $order = RequestOrder::where('id', $id)->first();
        $user = User::where('id', $order->user_id)->first();
        $orderid = $order->referanceid;

        $msg = 'We attached invoice for your order from Dokan, Order Reference ID is '.$orderid;
        $title = 'ORDER INVOICE';

        $name = $user->name;
        $email = $user->email;

        

        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title, 'orderid' => $orderid], function ($m) use ($name, $email, $orderid) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name, $orderid);

            $m->subject('ORDER INVOICE');

            $m->attach(public_path('/invoices/').$orderid.'invoice.pdf', [
                        'as' => 'dokan_inovice.pdf',
                        'mime' => 'application/pdf',
                    ]);
        });

        return redirect()->back();
    }

    public function getInvoice($id)
    {
        //PDF file is stored under project/public/invoices/info.pdf
        $order = RequestOrder::where('id', $id)->first();
        $file= public_path('/invoices/').$order->referanceid.'invoice.pdf';

        $headers = array(
                  'Content-Type: application/pdf',
                );

        return Response::download($file, $order->referanceid.'invoice.pdf', $headers);
    }

}


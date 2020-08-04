<?php

namespace App\Http\Controllers;

use App\Product;
use App\category;
use App\RequestOrder;
use App\RequestOrderItems;
use App\OrderAddress;
use App\User;
use Mail;
use Auth;
use PDF;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        // $Product = new Product();
        //  $data= $this->validate($request,[
        // 'product_name' => 'required|min:6',
        // 'product_price  ' => 'required',
        // 'product_qty    ' => 'required',
        // 'product_description  ' => 'required',
        // 'product_brand  ' => 'required'
        // ]); 
        //  echo "<pre>";print_r($data);die;
        //  echo "test";die;
        // $Product->saveProduct($data);
        //return redirect('Product');
        Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        return view('product_view', compact('product', 'data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function viewCart()
    {
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        return view('cart', compact('data'));
        
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "id"=>$product->id,
                        "name" => $product->product_name,
                        "quantity" => 1,
                        "price" => $product->product_price,
                        "photo" => $product->featured_images,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id"=>$product->id,
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->product_price,
            "photo" => $product->featured_images,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addCart(Request $request)
    {
        $id = $request->id;
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "id"=>$product->id,
                        "name" => $product->product_name,
                        "quantity" => $request->quantity,
                        "price" => $product->product_price,
                        "photo" => $product->featured_images,
                        "size" => $request->size,
                        "color" => $request->color,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id"=>$product->id,
            "name" => $product->product_name,
            "quantity" => $request->quantity,
            "price" => $product->product_price,
            "photo" => $product->featured_images,
            "size" => $request->size,
            "color" => $request->color,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }
 
    public function removeCart($id)
    {
        if($id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$id])) {
 
                unset($cart[$id]);
 
                session()->put('cart', $cart);
            }
 
            return redirect()->back()->with('success', 'Product removed successfully');
        }
    }

    public function checkout()
    {
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        return view('cartCheckout', compact('data'));
    }
    

    public function placeOrder(Request $request)
    {
        $data = $request->all();

        $lastOrder = RequestOrder::orderBy('id', 'desc')->first();
        if ( ! $lastOrder )
        {
            $number = 0;
        }
        else 
        {
            $number = substr($lastOrder->referanceid, 3);
        }
        $prefix = 'ORD' . sprintf('%06d', intval($number) + 1);

        $orderId = sprintf('%06d', intval($number) + 1);
        $refId = $prefix;

        $total = 0;

        $cart = session()->get('cart');

        $req_seller_id=[];

        // $oldCart = Session::get('cart'); 
        // $cart = new Cart($oldCart);

        foreach(session('cart') as $id => $details)
        {
        
            $total += $details['quantity'] * $details['price'];

            $sel_id=Product::find($details['id']);
            $req_seller_id[] = $sel_id->created_by;

            

        }

        $selid=array_unique($req_seller_id);
        if($data['shipping_method'] == "one_day_delivery" && $total < 400){
        $shipping_charges = 10;
        
        }
        else{
        $shipping_charges = 0;
        }

        $address = new OrderAddress();
        $address->order_id = $refId;
        $address->user_id = Auth::id();
        $address->first_name = $data['first_name'];
        $address->last_name = $data['last_name'];
        $address->mobile = $data['mobile'];
        $address->email = $data['email'];
        $address->zone = $data['zone'];
        $address->house = $data['house'].", ".$data['building'];
        $address->street = $data['street'];
        $address->country = $data['Country'];
        $address->save();
        
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->get();
        $request_order = new RequestOrder;
        $request_order->referanceid = $refId;
        $request_order->user_id = Auth::id();
        $request_order->address_id = $address->id;
        $request_order->sub_total = $total;
        $request_order->total_price = $total + $shipping_charges;
        $request_order->req_seller_id = implode(",",$selid);
        $request_order->shipping_charges = $shipping_charges;
        $request_order->payment_status = $data['payment'];
        if($data['payment'] == "online")
        {
            $request_order->order_status = "processing";
        }
        else
        {
            $request_order->order_status = "pending";
        }
        
        
        
        $request_order->save();
        
        $order_id=$request_order->id;

        $prods = $cart;
         
    
        foreach(session('cart') as $id => $details)
        {
            //dd($details);
            $product_seller_id=Product::find($details['id']);
            
            $item = new RequestOrderItems();
            $item->order_id = $order_id;
            $item->seller_id = $product_seller_id->created_by;
            $item->request_product_name = $details['name'];
            $item->request_product_price = $details['price'];
            $item->request_product_qty = $details['quantity'];
            if(array_has($details, 'size'))
            {$item->request_product_size = $details['size'];}
            if(array_has($details, 'color'))
            {$item->request_product_color = $details['color'];}
            $item->save();
        }
        

        $request->session()->forget('cart');

        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;
        $orderid = $refId;
        $totalprice = $total + $shipping_charges;
        $msg = 'We just got your order, Order Reference ID is '.$orderid.' and we are working on it now. In the meantime, you can see what others offer we are giving to our beloved customers, while you wait for your order to arrive! Thank you for shopping with us.';

        
        $title = 'DOKAN ORDER PLACED';

        //generating and sending Invoice PDF
        
        $invoice = rand();
        $date = date("F j, Y");
        $amount = $totalprice;

        $invoice_name = $orderid.'invoice.pdf';
        $invoice_path = public_path('/invoices/');
        File::isDirectory($invoice_path) or File::makeDirectory($invoice_path, 0777, true, true);
        $pdf = PDF::loadView('invoice', compact('name', 'invoice', 'date', 'orderid', 'prods', 'amount', 'shipping_charges'))->save($invoice_path.$invoice_name);

        
        Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title, 'orderid' => $orderid], function ($m) use ($name, $email, $orderid) {

            $m->from('sine.logix.testing@gmail.com', 'Dokan');

            $m->to($email, $name, $orderid);

            $m->subject('ORDER PLACED');

            // $m->attach(public_path('/invoices/').$orderid.'invoice.pdf', [
            //             'as' => 'dokan_inovice.pdf',
            //             'mime' => 'application/pdf',
            //         ]);

        });



        return redirect('order/success/'.$refId);
        

    }

    public function orderSuccess($id)
    {
        $orderId = $id;
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        return view('orderSuccess', compact('data', 'orderId'));
    }


    public function test()
    {

        $items = array('id' => 1, 'name' => 'deepak', 'title' => 'title', 'description' => 'description');
        view()->share('items',$items);


        $invoice_name = time().'.'.'invoice.pdf';
        $invoice_path = public_path('/invoices/');
        $pdf = PDF::loadView('pdfview')->save($invoice_path.$invoice_name);

        $user = user::where('id', Auth::id())->first();

        Mail::to($email)->send(new suitability_invoice($invoice_path, $invoice_name));
        // return view('invoice-email');
        return view('invoice');


        // $name = "Deepak";
        // $email = "dmakheja@gmail.com";
        // $orderid = "ORD0000001";
        // $total = 2000;
        // $msg = 'Hi '.$name. ',Your Order Confirmed Successfully. Your Order ReferenceID for DO is '.$orderid.'. Total Amount QAR '.$total.'. Thank you for shopping with us.';
        // $title = 'DOKAN ORDER CONFIRMATION';

        // return view('emails.admin.ordershipment-email', compact('name', 'email', 'orderid', 'total', 'msg', 'title'));

        // Mail::send('emails.admin.ordershipment-email', ['msg' => $msg, 'email' => $email, 'title' => $title], function ($m) use ($name, $email) {

        //     $m->from('sine.logix.testing@gmail.com', 'Dokan');

        //     $m->to($email, $name);

        //     $m->subject('ORDER CONFIRMATION');

        // });
    }


}

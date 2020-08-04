<?php

namespace App\Http\Controllers\Vendor;

use App\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        $data = Payment::where('created_by',$vendor_id)->paginate(10);
        return view('vendor/payment', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor/add_bank');
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

        $form_data = array(
            'bank_name'             =>   $request->bank_name,
            'branch_name'           =>   $request->branch_name,
            'ac_number'             =>   $request->ac_number,
            'bank_ifsc_code'        =>   $request->bank_ifsc_code,
            'ac_holder_name'        =>   $request->ac_holder_name,
            'created_by'            =>   $created_by,
            'created_by_name'       =>   $created_by_name
        );

        Payment::create($form_data);
        return redirect('vendor/payment')->with('success', 'Bank Details Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment = Payment::find($id);
        return view('vendor/bank_update', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $payment = Payment::find($id);
        $created_by= Auth::guard('vendor')->user()->id;
        $vendors = DB::table('vendors')->where('id', '=', $created_by)->get();
        $created_by_name=$vendors[0]->name;

        $payment->bank_name =  $request->get('bank_name');
        $payment->branch_name = $request->get('branch_name');
        $payment->ac_number = $request->get('ac_number');
        $payment->bank_ifsc_code = $request->get('bank_ifsc_code');
        $payment->ac_holder_name = $request->get('ac_holder_name');
        
        $payment->created_by = $created_by;
        $payment->created_by_name = $created_by_name;

         $payment->save();

         return redirect('vendor/payment')->with('success', 'Bank Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}

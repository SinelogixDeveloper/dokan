<?php

namespace App\Http\Controllers\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Vendor;
use Auth;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Crypt;
use DB;
use Validator;

class VendorRegistor extends Controller
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

    function checklogin(Request $request)
    {
         $this->validate($request, [
          'email'   => 'required|email',
          'password'  => 'required|alphaNum|min:3'
         ]);

        $model = Vendor::where('email', $request->email)->first();
        //echo "<pre>";print_r($model->vendor_status);die;
        if (Hash::check($request->password, $model->password, [])) {
            if($model->vendor_status=='1')
            {
                return redirect('vendor/dashboard');
            }
            else
            {
                return redirect('vendor/login')->with('error', 'Your account is not verified.');
            }
        }
        else
        {
            return redirect('vendor/login')->with('error', 'Wrong Login Details');
        }

    }


    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vendors',
            'password' => 'required|string|min:6|confirmed',
            'vendor_image' => 'required'
        ]);
        // echo $request;die;
        $image = $request->file('vendor_image');
        
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('vendor_profile'), $new_name);

          $form_data = array(
            'name'          =>   $request->name,
            'email'         =>   $request->email,
            'password'      =>   Hash::make($request->password),
            'vendor_image'  =>   $new_name,
            'vendor_status'  =>   '0',
        );

          Vendor::create($form_data);
          
        /* Verificattion Mail Send Configuration jignesh */        
        $name = $request->name;
        $email = $request->email;
        $email_encrypted = Crypt::encryptString($email);
        
        $link = url('/vendor/verify-email').'/'.$email_encrypted;
        Mail::send('emails.vendor.verify-email', ['link' => $link, 'email' => $email], function ($m) use ($name, $email) {
            $m->from('sine.logix.testing@gmail.com', 'Auralaravel');
            $m->to($email, $name);
            $m->subject('Verification Email!');
        });
                
        if (Mail::failures()) {
            return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");
        }

        return redirect()->back()->with('success_message', "Verification mail has send successfully. Please verify your email.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    // Forgot Password functionality create by jignesh
    public function showVerifyVendorMsg($email)
    {
        $decrypted = Crypt::decryptString($email);
        $verify_email = \App\Vendor::where('email', $decrypted)->first();
        if($verify_email)
        {
            $verify_email->is_email_verify = 1;
            $verify_email->save();
            return view('emails.vendor.verify-email-success');
        }
        else
        {
            return "Somthing went wrong";
        }        
    }

    // Forgot Password functionality create by jignesh
    public function showResetPasswordForm()
    {
        return view('vendor.passwords.email');
    }
    
    // Forgot Password functionality create by jignesh
    public function sendResetPasswordEmail(Request $request)
    {
        $email = $request->email;
        $user = \App\Vendor::where('email', $email)->first();
        if($user)
        {           
            $token = Str::random(60);
            $name = $user->name;
            $email = $request->email;
            $password_reset = new \App\PasswordReset;
            $password_reset->email = $email;
            $password_reset->token = $token;
            $password_reset->save();
   
            $link = url('/vendor/password/reset').'/'.$token;
            Mail::send('emails.vendor.reset-password-email', ['link' => $link, 'token' => $token], function ($m) use ($name, $email) {
                $m->from('sine.logix.testing@gmail.com', 'Auralaravel');
                $m->to($email, $name);
                $m->subject('Reset Password!');
            });
                    
            if (Mail::failures()) {
                return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");
            }
             
            return redirect()->back()->with('success_message', "Reset password request mail has sent successfully. Please check your email.");
        }
        else
        {
            return redirect()->back()->with('error', "The email you're enter has not found.");
        }
    }

    // Forgot Password functionality create by jignesh
    public function showPasswordResetForm($token)
    {        
        $date = date('Y-m-d H:i:s');
        $vendor = \App\PasswordReset::where('token', $token)        
        ->first();
        $email = $vendor->email;
        $date = date('Y-m-d H:i:s');
        $start = strtotime($date);
        $end = strtotime($vendor->created_at);
        $interval  = abs($end - $start);
        $minutes   = round($interval / 60);        
        if($minutes >= 120)
        {
            return view('emails.vendor.link-expire');          
        }
        else
        {
            return view('vendor.passwords.reset', compact('token', 'email'));
        }
    }

    // Forgot Password functionality create by jignesh
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'email' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $vendor = \App\Vendor::where('email', $request->email)->first();
        if($vendor)
        {
            $vendor->password = Hash::make($request->password);
            $vendor->save();
            return view('emails.vendor.reset-password-success');
        }
        else
        {
            return redirect()->back()->with('error_message', "The email you're enter has not found.");
        }      
    }
}

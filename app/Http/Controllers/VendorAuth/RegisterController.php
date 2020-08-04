<?php

namespace App\Http\Controllers\VendorAuth;

use App\Vendor;
use App\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Crypt;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/vendor/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
    }*/

    protected function guard()
	{
		return auth()->guard('vendor');
	}

    public function showRegistrationForm()
    {
        return view('vendor.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $image = $data['vendor_image'];
        //echo "<pre>";print_r($image);die;
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('vendor_profile'), $new_name);

        return Vendor::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'vendor_image'  =>   $new_name,
            'vendor_status'  =>   '1',
        ]);
    }
	
	/**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vendors',
            'password' => 'required|string|min:6|confirmed',
            'vendor_image' => 'required',
        ]);
        
        $image = $request->file('vendor_image');
        
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('vendor_profile'), $new_name);

        $form_data = array(
            'name'          =>   $request->name,
            'email'         =>   $request->email,
            'password'      =>   Hash::make($request->password),
            'vendor_image'  =>   $new_name,
            'vendor_status'  =>   '1',
        );     
        //echo "<pre>";print_r($form_data);die;
        $data = Vendor::create($form_data);
        //echo "<pre>";print_r($data);die;

        $vendor_data = array(
            'vendor_id'       =>   $data->id,
            'not_msg'         =>   'New Register vendor name is '.$request->name.' waiting for his account verified',
            'not_status'      =>   '0',
        );
        
        
        Notification::create($vendor_data);
        
        //return redirect()->back();
        return redirect('vendor/login');
        
        /* Verificattion Mail Send Configuration jignesh */
        
        /*
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

        return redirect()->back()->with('success_message', "Verification mail has sent successfully. Please verify your email.");*/
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
            return redirect()->back()->with('error_message', "The email you're enter has not found.");
        }
    }

    // Forgot Password functionality create by jignesh
    public function showPasswordResetForm($token)
    {        
        $date = date('Y-m-d H:i:s');
        $vendor = \App\PasswordReset::where('token', $token)        
        ->first();
        if($vendor)
        {
            $email = $vendor->email;
            $date = date('Y-m-d H:i:s');
            $start = strtotime($date);
            $end = strtotime($vendor->created_at);
            $interval  = abs($end - $start);
            $minutes   = round($interval / 60);        
            if($minutes >= 15)
            {
                return view('emails.vendor.link-expire');          
            }
            else
            {
                return view('vendor.passwords.reset', compact('token', 'email'));
            }
        }
        else
        {
            return view('emails.vendor.link-expire');
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

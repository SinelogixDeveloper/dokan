<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Admin;
use App\Notification;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');         
    }

    public function adminDashboard()
    {
        $counts = DB::table('notifications')->where('not_status','0')->count();
        if($counts > 0)
        {
            $count=$counts;
        }
        else
        {
             $count='';
        }
        
        return view('admin.dashboard',compact('count'));
        
    } 

    public function getProfile()
    {      
        if(Auth::guard('admin')->check())
        {
            $id = Auth::guard('admin')->user()->id;
            $admin = \App\Admin::where('id', $id)->first();             
            //$link = url('/auraqatar/public/vendor_profile').'/'.$vendor->vendor_image;
            return view('admin.change_password', compact('admin'));                
        }
        else
        {
            return redirect('admin/login');
        }
        
    }

    public function adminprofile()
    {      
        if(Auth::guard('admin')->check())
        {
            $id = Auth::guard('admin')->user()->id;
            $admin = \App\Admin::where('id', $id)->first();             
            //$link = url('/auraqatar/public/vendor_profile').'/'.$vendor->vendor_image;
            return view('admin.profile', compact('admin'));                
        }
        else
        {
            return redirect('admin/login');
        }
        
    }

    public function adminupdateProfile(Request $request,$id)
    {       
        if(Auth::guard('admin')->check())
        {                                
                $obj_user = Admin::find($id);
                $obj_user->name = $request->get('name');
                $obj_user->email = $request->get('email');

                if($request->hasFile('admin_logo')){
                    $image = $request->file('admin_logo');
                    $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('logo'), $new_name);
                    $obj_user->admin_logo = $new_name;
                }

                if($request->hasFile('homepage_logo')){
                    $image = $request->file('homepage_logo');
                    $new_name = rand() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('logo'), $new_name);
                    $obj_user->homepage_logo = $new_name;
                }

                $obj_user->save(); 
                return redirect('admin/dashboard');                   
        }
        else
        {
            return redirect('admin/login');
        }        
    }

    public function updateProfile(Request $request)
    {        
        if(Auth::guard('admin')->check())
        {            
            // $this->validate($request, [
            //     'old_password'     => 'required',
            //     'new_password'     => 'required|min:6',
            //     'confirm_password' => 'required|same:new_password',
            // ]);

            $data = $request->all();

            $admin = Admin::find(Auth::guard('admin')->user()->id);    
            if(!Hash::check($data['old_password'], $admin->password)){
                return back()
                    ->with('error','The specified password does not match the Old password');
            }
            else if($data['new_password'] != $data['confirm_password'])
            {
               return back()->with('error','The specified password does not match the confirm password');
            } 
            else
            {
                 $user_id = Auth::guard('admin')->user()->id;
                 //dd($user_id);                     
                $obj_user = Admin::find($user_id);
                $obj_user->password = Hash::make($data['new_password']);
                $obj_user->save(); 
                return redirect('admin/dashboard');

            }                     
        }
        else
        {
            return redirect('admin/login');
        }        
    }
 
    public function Adminlogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->invalidate();

        return redirect('/admin/login');
    }
}

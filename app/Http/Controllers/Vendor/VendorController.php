<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Vendor;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('vendor');
    }*/
    
    public function getDashboard()
    {
        return view('vendor.home');
    }
    
    public function getProfile()
    {      
        if(Auth::guard('vendor')->check())
        {
            $id = Auth::guard('vendor')->user()->id;
            $vendor = \App\Vendor::where('id', $id)->first();             
            $link = url('/auraqatar/public/vendor_profile').'/'.$vendor->vendor_image;
            return view('vendor.profile', compact('vendor','link'));                
        }
        else
        {
            return redirect('vendor/login');
        }
        
    }

    public function updateProfile(Request $request)
    {        
        if(Auth::guard('vendor')->check())
        {            
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|string|max:255',
                'profile_images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            if ($validator->fails()) {
                return redirect('vendor/profile')
                            ->withErrors($validator)
                            ->withInput();
            }

            $id = Auth::guard('vendor')->user()->id;
            $vendor = \App\Vendor::where('id',$id)->first();            
            if ($request->has('profile_images')) { 
                $url = public_path().'/vendor_profile/'.$vendor->vendor_image;
                if(file_exists($url))
                {
                    chmod($url, 0644);
                    unlink($url);
                }           
                $profile_images = $request->file('profile_images');
                $imagename = time().'.'.$profile_images->getClientOriginalExtension();
                $destinationPath = public_path().'/vendor_profile/';
                $profile_images->move($destinationPath, $imagename);
            } 
            $vendor->name = $request->name;
            $vendor->email = $request->email;     
            $vendor->vendor_image = $imagename;     
            if($vendor->save())
            {
                return redirect()->back()->withError(['error' => 'Profile updated successfully.']);
            }
            return redirect()->back()->withError(['error' => 'Profile has not updated.']);                            
        }
        else
        {
            return redirect('vendor/login');
        }        
    }
    
    public function getpassword()
    {
        if(Auth::guard('vendor')->check())
        {
            $id = Auth::guard('vendor')->user()->id;
            $vendor = \App\Vendor::where('id',$id)->first();             
            //$link = url('/auraqatar/public/vendor_profile').'/'.$vendor->vendor_image;
            return view('vendor.update_password', compact('vendor'));                
        }
        else
        {
            return redirect('vendor/login');
        }
    }

    public function updatepassword(Request $request)
    {        
        if(Auth::guard('vendor')->check())
        {            

            $data = $request->all();

            $vendor = Vendor::find(Auth::guard('vendor')->user()->id);    
            if(!Hash::check($data['old_password'], $vendor->password)){
                return back()
                    ->with('error','The specified password does not match the Old password');
            }
            else if($data['new_password'] != $data['confirm_password'])
            {
               return back()->with('error','The specified password does not match the confirm password');
            } 
            else
            {
                 $user_id = Auth::guard('vendor')->user()->id;
                 //dd($user_id);                     
                $obj_user = Vendor::find($user_id);
                $obj_user->password = Hash::make($data['new_password']);
                $obj_user->save(); 
                return redirect('vendor/dashboard');

            }                     
        }
        else
        {
            return redirect('vendor/login');
        }        
    }
}

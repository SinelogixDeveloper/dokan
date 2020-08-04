<?php 

namespace App\Helpers;
use DB;
use Auth;
use App\Vendor;
class Helper
{
    public static function nottification()
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
        return $count;
    }

    public static function vendor_noti()
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        $counts = DB::table('vendornotis')->where('vendor_not_status','0')->where('vendor_id',$vendor_id)->count();
        if($counts > 0)
        {
            $count=$counts;
        }
        else
        {
             $count='';
        }
        return $count;
    }

    public static function admin_logo()
    {
        
        $admin = DB::table('admins')->get();
        //dd($admin);
        foreach ($admin as  $value) 
        { 
           $image = $value->admin_logo;
        }
        return $image;
    }

    public static function homepage_logo()
    {
        
        $admin = DB::table('admins')->get();
        //dd($admin);
        foreach ($admin as  $value) 
        { 
           $homepage_images = $value->homepage_logo;
        }
        return $homepage_images;
    }

    public static function locked()
    {
        $vendor_id=Auth::guard('vendor')->user()->id;
        $get_vendor = DB::table('vendors')->where('id',$vendor_id)->get();
        foreach ($get_vendor as  $value) 
        { 
           $lock = $value->vendor_locked;
        }
        if($lock == 0 )
        {
            $style = '<style type="text/css">
                a.lock{
                         pointer-events: none;
                    }
                #lockalertmessage
                {
                    display:block;
                }
            </style>';
         
        }
        else
        {
            
            $style = '<style type="text/css">
                a.lock{
                         pointer-events: block;
                    }
                    #lockalertmessage
                    {
                        display:none;
                    }
            </style>';
        }
        return $style;
    }
}
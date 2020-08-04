<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\category;
use App;
use Session;
use DB;
use Auth;

class MyaccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check())
        {
            $user_id = Auth::user()->id; 
            $userdata = User::where('id',$user_id)->get();
            $data = category::latest()->where('cat_status', 1)->paginate(50);
            //dd($data[0]->name);
            $locale_lan =Session::get('locale');
            return view('myaccount',compact('locale_lan','userdata','data'));
        }
        else
        {
            redirect('/');
        }
        
    }
    public function update_profile(Request $request, $id)
    {
        $user = User::find($id);



        //$user->name =  $request->get('name');
        $user->last_name = $request->get('last_name');
        //$user->email = $request->get('email');
        //$user->mobile = $request->get('mobile');
        $user->gender = $request->get('gender');

        $user->save();   

        return redirect('/myaccount');
    }
}

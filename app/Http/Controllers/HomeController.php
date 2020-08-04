<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Product;
use App\Homebanner;
use App\Subbanner;
use App\Blogsection;
use App\Promobanner;
use App\Clientlogo;
use App;
use App\User;
use Session;
use DB;
use Auth;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
        }
        else
        {
            $user_id='';
            $userdata='';
        }
        $new_arrival = (new Product())->list_belongsTo();
        $best_seller = (new Product())->list_best_seller();
        $most_rating = (new Product())->list_most_rating();
        
        $best_offer = (new Product())->list_best_offer();
        // echo"<pre>";
        // print_r($best_offer);
        // die();
    
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        $banner = Homebanner::latest()->paginate(50);
        $subbanner = Subbanner::latest()->orderBy('id', 'desc')->paginate(50);
        $blogsection = Blogsection::latest()->paginate(50);
        $product = Product::get();
        $promobanner = Promobanner::get();
        $clientlogo = Clientlogo::get();
        $locale_lan = Session::get('locale');
       
        return view('index', compact('data','userdata', 'new_arrival', 'best_seller','most_rating','locale_lan', 'banner', 'subbanner', 'blogsection', 'product', 'promobanner', 'clientlogo', 'best_offer'));
    }
    public function help_services()
    {
        
       
       
        if (Auth::check())
        {
            $user_id = Auth::user()->id;
            $userdata = User::where('id',$user_id)->get();
        }
        else
        {
            $user_id='';
            $userdata='';
        }
        $new_arrival = (new Product())->list_belongsTo();
        $best_seller = (new Product())->list_best_seller();
        $most_rating = (new Product())->list_most_rating();
        
        $best_offer = (new Product())->list_best_offer();
        // echo"<pre>";
        // print_r($best_offer);
        // die();
    
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        $banner = Homebanner::latest()->paginate(50);
        $subbanner = Subbanner::latest()->orderBy('id', 'desc')->paginate(50);
        $blogsection = Blogsection::latest()->paginate(50);
        $product = Product::get();
        $promobanner = Promobanner::get();
        $clientlogo = Clientlogo::get();
        $locale_lan = Session::get('locale');
       
        return view('help_services', compact('data','userdata', 'new_arrival', 'best_seller','most_rating','locale_lan', 'banner', 'subbanner', 'blogsection', 'product', 'promobanner', 'clientlogo', 'best_offer'));
    }
}

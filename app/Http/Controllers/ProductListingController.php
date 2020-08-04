<?php

namespace App\Http\Controllers;

use App\ProductListing;
use App\category;
use App\Product;
use App\Brand;
use Session;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProductListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Session::flush();
        $id = request()->segment(2);
        //echo $name;die;
        $category = category::select('*')->where('id', $id)->first();
        // if(empty($category))
        // {
        //     $category=category::select('*')->where('category_name->ar', $name)->first();
        // }
        $cate_name = $category->category_name;

        $product = Product::whereRaw("FIND_IN_SET('$category->id',product_categories)")->get();

        $locale_lan = Session::get('locale');

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $userdata = User::where('id',$user_id)->get();
        } else {
            $user_id = '';
            $userdata = '';
        }
        $data = category::latest()->where('cat_status', 1)->paginate(50);
        $catid_name = category::select('id', 'category_name')->get()->toArray();
        return view('productlisting', compact('product', 'data','userdata', 'catid_name', 'cate_name', 'locale_lan', 'user_id'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "pro_id" => $id,
                    "name" => $product->product_name,
                    "quantity" => 1,
                    "price" => $product->product_price,
                    "featured_images" => $product->featured_images

                ]
            ];

            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "pro_id" => $id,
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->product_price,
            "featured_images" => $product->featured_images

        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $userdata = User::where('id',$user_id)->get();
        } else {
            $user_id = '';
            $userdata = '';
        }
        $locale_lan = Session::get('locale');
        return view('cart', compact('locale_lan', 'user_id','userdata'));
    }

    public function cart_details()
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $userdata = User::where('id',$user_id)->get();
        } else {
            $user_id = '';
             $userdata = '';
        }
        $locale_lan = Session::get('locale');
        return view('cart_details', compact('locale_lan', 'user_id','userdata'));
    }

    public function updatecart(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity + 1;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function removecartquentity(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity - 1;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function removefromcart(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function product_view($id)
    {
        //session()->forget('cart');
        $product = Product::find($id);

        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $userdata = User::where('id',$user_id)->get();
        } else {
            $user_id = '';
            $userdata = '';
        }
        $locale_lan = Session::get('locale');

        if (!empty($product->similar_product)) {
            $myArray = explode(',', $product->similar_product);
            $similar_product = Product::whereIn('id', $myArray)->get();
        } else {
            $similar_product = '';
        }

        return view('product_view', compact('locale_lan', 'product', 'similar_product', 'user_id','userdata'));
    }

    public function allCategories()
    {
        $data = category::where('cat_status', 1)->paginate(50);
        $brands = Brand::all();
        return view('allCategories', compact('data', 'brands'));
    }

    
}

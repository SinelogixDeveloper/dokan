<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Promobanner;
use Illuminate\Http\Request;

class PromobannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Promobanner::latest()->paginate(10);
        return view('admin/promobanner_list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addpromo_banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('promobanner_images');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('promo_banner_images'), $new_name);

        $banner = new Promobanner;

        $banner
           ->setTranslation('promobanner_title', 'en', $request->promobanner_title_en)
           ->setTranslation('promobanner_title', 'ar', $request->promobanner_title_ar)
           ->setTranslation('promobanner_discription', 'en', $request->promobanner_discription_en)
           ->setTranslation('promobanner_discription', 'ar', $request->promobanner_discription_ar);
        $banner->promobanner_url = $request->get('promobanner_url');
        $banner->promobanner_images = $new_name;

        $banner->save();   

        return redirect('admin/promo-banner')->with('success', 'Banner Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promobanner  $promobanner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Promobanner::find($id);
        return view('admin/update_promobanner', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promobanner  $promobanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Promobanner $promobanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promobanner  $promobanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Promobanner::find($id);

        $banner
           ->setTranslation('promobanner_title', 'en', $request->promobanner_title_en)
           ->setTranslation('promobanner_title', 'ar', $request->promobanner_title_ar)
           ->setTranslation('promobanner_discription', 'en', $request->promobanner_discription_en)
           ->setTranslation('promobanner_discription', 'ar', $request->promobanner_discription_ar);
        $banner->promobanner_url = $request->get('promobanner_url');
        
        if($request->hasFile('promobanner_images')){
            $image = $request->file('promobanner_images');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('promo_banner_images'), $new_name);
            $banner->promobanner_images = $new_name;
        }

        $banner->save();

        return redirect('admin/promo-banner')->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promobanner  $promobanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promobanner $promobanner)
    {
        //
    }
}

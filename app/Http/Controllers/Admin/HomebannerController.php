<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Homebanner;
use App\Subbanner;
use Illuminate\Http\Request;

class HomebannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Homebanner::latest()->paginate(10);
        return view('admin/list_banner', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function subbannerindex()
    {
        $data = Subbanner::latest()->paginate(10);
        return view('admin/sub_list_banner', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addbanner');
    }
    
    public function subbannercreate()
    {
        return view('admin/addsubbanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('bannerimages');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('banner_images'), $new_name);
        
        $banner = new Homebanner;

        $banner
           ->setTranslation('bannertitle', 'en', $request->bannertitle_en)
           ->setTranslation('bannertitle', 'ar', $request->bannertitle_ar)
           ->setTranslation('bannerdiscription', 'en', $request->bannerdiscription_en)
           ->setTranslation('bannerdiscription', 'ar', $request->bannerdiscription_ar);
        $banner->bannerurl = $request->get('bannerurl');
        $banner->bannerimages = $new_name;

        $banner->save();

        // $form_data = array(
        //     'bannertitle'           =>   $request->bannertitle,
        //     'bannerdiscription'     =>   $request->bannerdiscription,
        //     'bannerurl'             =>   $request->bannerurl,
        //     'bannerimages'          =>    $new_name,
        // );

        // Homebanner::create($form_data);

        return redirect('admin/home-banner')->with('success', 'Banner Added successfully.');
    }
    
    public function subbannerstore(Request $request)
    {
        $image = $request->file('subbannerimages');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('sub_banner_images'), $new_name);
        
        $banner = new Subbanner;

        $banner
           ->setTranslation('subbannertitle', 'en', $request->subbannertitle_en)
           ->setTranslation('subbannertitle', 'ar', $request->subbannertitle_ar)
           ->setTranslation('subbannerdiscription', 'en', $request->subbannerdiscription_en)
           ->setTranslation('subbannerdiscription', 'ar', $request->subbannerdiscription_ar);
        $banner->subbannerurl = $request->get('subbannerurl');
        $banner->subbannerimages = $new_name;

        $banner->save(); 

        // $form_data = array(
        //     'subbannertitle'           =>   $request->subbannertitle,
        //     'subbannerdiscription'     =>   $request->subbannerdiscription,
        //     'subbannerurl'                =>   $request->subbannerurl,
        //     'subbannerimages'          =>   $new_name,
        // );

        // Subbanner::create($form_data);

        return redirect('admin/sub-banner')->with('success', 'Banner Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homebanner  $homebanner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Homebanner::find($id);
        return view('admin/update_banner', compact('banner'));
    }
    
    public function subbannershow($id)
    {
        $banner = Subbanner::find($id);
        return view('admin/update_sub_banner', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homebanner  $homebanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Homebanner $homebanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homebanner  $homebanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Homebanner::find($id);

        $banner
           ->setTranslation('bannertitle', 'en', $request->bannertitle_en)
           ->setTranslation('bannertitle', 'ar', $request->bannertitle_ar)
           ->setTranslation('bannerdiscription', 'en', $request->bannerdiscription_en)
           ->setTranslation('bannerdiscription', 'ar', $request->bannerdiscription_ar);
        $banner->bannerurl = $request->get('bannerurl');
        
        if($request->hasFile('bannerimages')){
            $image = $request->file('bannerimages');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('banner_images'), $new_name);
            $banner->bannerimages = $new_name;
        }

        $banner->save();

        return redirect('admin/home-banner')->with('success', 'Banner updated successfully.');
    }
    
    public function subbannerupdate(Request $request, $id)
    {
        $banner = Subbanner::find($id);

        $banner
           ->setTranslation('subbannertitle', 'en', $request->subbannertitle_en)
           ->setTranslation('subbannertitle', 'ar', $request->subbannertitle_ar)
           ->setTranslation('subbannerdiscription', 'en', $request->subbannerdiscription_en)
           ->setTranslation('subbannerdiscription', 'ar', $request->subbannerdiscription_ar);
        $banner->subbannerurl = $request->get('subbannerurl');
        
        if($request->hasFile('subbannerimages')){
            $image = $request->file('subbannerimages');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sub_banner_images'), $new_name);
            $banner->subbannerimages = $new_name;
        }

        $banner->save();

        return redirect('admin/sub-banner')->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homebanner  $homebanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homebanner $homebanner)
    {
        //
    }
}

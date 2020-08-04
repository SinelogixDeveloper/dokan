<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Blogsection;
use App\Product;
use Illuminate\Http\Request;

class BlogsectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blogsection::latest()->paginate(10);
        return view('admin/list_blogsection', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Product::all();
        return view('admin/addblogsection', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=[];

        if ($cate = $request->input('product_id'))
        {
                //dd($cate);
                foreach($cate as $ca)
                {
                  $product[] = $ca;
                }
        }

        $Blogsection = new Blogsection;

        $Blogsection
           ->setTranslation('blogsection_title', 'en', $request->blogsection_title_en)
           ->setTranslation('blogsection_title', 'ar', $request->blogsection_title_ar);
        $Blogsection->blogsection_status = $request->get('blogsection_status');
        $Blogsection->product_id = implode(",", $product);

        $Blogsection->save();

        $check=$Blogsection->id;

        if ($product = $request->input('product_id'))
        {
                //dd($cate);
                foreach($product as $pa)
                {
                  $Product = Product::find($pa);
                  $Product->blogsection =  $check;
                  $Product->save();
                }
        }

        return redirect('admin/blog-section')->with('success', 'Section Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogsection  $blogsection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::all();
        $blogsection = Blogsection::find($id);
        return view('admin/edit_blogsection', compact('blogsection','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogsection  $blogsection
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogsection $blogsection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogsection  $blogsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Blogsection = Blogsection::find($id);

        $Blogsection
           ->setTranslation('blogsection_title', 'en', $request->blogsection_title_en)
           ->setTranslation('blogsection_title', 'ar', $request->blogsection_title_ar);
        $Blogsection->blogsection_status = $request->get('blogsection_status');
        
        $product=[];
        if ($cate = $request->input('product_id'))
        {

                /*  update id in previous table  */

                foreach (explode(',',$Blogsection->product_id) as $ids ) 
                {
                    $Product = Product::find($ids);
                    $Product->blogsection =  '';
                    $Product->save();
                }

                /*  end here  */

                //insert product id in blog section

                foreach($cate as $ca)
                {
                  $product[] = $ca;
                }
                $Blogsection->product_id = implode(",", $product);

                //end here

                foreach($cate as $pa)
                {
                  $Product = Product::find($pa);
                  $Product->blogsection =  $id;
                  $Product->save();
                }
        }

        $Blogsection->save();

         return redirect('admin/blog-section')->with('success', 'Section Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogsection  $blogsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogsection $blogsection)
    {
        //
    }
}

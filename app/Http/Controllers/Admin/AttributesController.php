<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Vendor;
use App\Attributes;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Attributes::latest()->paginate(10);
        return view('admin/list_attribute', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Vendor::all();
        return view('admin/addattribute', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checked=$request->show_pro_page;
        if($checked =='on')
        {
            $checked_val='1';
        }
        else
        {
            $checked_val='0';
        }

        if ($ven = $request->input('assign_to'))
        {
                foreach($ven as $ca)
                {
                  $van[] = $ca;
                }
        }
        $form_data = array(
            'att_name'          =>   $request->att_name,
            'att_value'         =>   $request->att_value,
            'show_pro_page'     =>   $checked_val,
            'assign_to'         =>   implode(",", $van),
        );

        Attributes::create($form_data);

        return redirect('admin/attribute')->with('success', 'attribute Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attributes  $attributes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $attribute = Attributes::find($id);
         $data = Vendor::all();
         return view('admin/update_attribute', compact('attribute','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attributes  $attributes
     * @return \Illuminate\Http\Response
     */
    public function edit(Attributes $attributes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attributes  $attributes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attribute = Attributes::find($id);

        $checked=$request->get('show_pro_page');
        if($checked =='on')
        {
            $checked_val='1';
        }
        else
        {
            $checked_val='0';
        }
        
        $van=[];

        if($ven = $request->input('assign_to'))
        {
            //dd($cate);
                foreach($ven as $ca)
                {
                  $van[] = $ca;
                }
                $attribute->assign_to = implode(",", $van);
        }

        $attribute->att_name = $request->get('att_name');
        $attribute->att_value = $request->get('att_value');
        //$attribute->assign_to = $request->get('assign_to');
        $attribute->show_pro_page    = $checked_val;

        $attribute->save();

        return redirect('/admin/attribute')->with('success', 'Attribute updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attributes  $attributes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attributes $attributes)
    {
        //
    }
}

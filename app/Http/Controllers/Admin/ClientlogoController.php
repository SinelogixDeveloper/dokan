<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Clientlogo;
use Illuminate\Http\Request;

class ClientlogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Clientlogo::latest()->paginate(10);
        return view('admin/clientlogo_list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addclient_logo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('logo_grey_images');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('client_logo'), $new_name);

        $image1 = $request->file('logo_org_images');
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
        $image1->move(public_path('client_logo'), $new_name1);

        $logo = new Clientlogo;

        $logo->logo_url = $request->get('logo_url');
        $logo->logo_grey_images = $new_name;
        $logo->logo_org_images = $new_name1;

        $logo->save();   

        return redirect('admin/client-logo')->with('success', 'Client logo Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientlogo  $clientlogo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientlogo = Clientlogo::find($id);
        return view('admin/update_clientlogo', compact('clientlogo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientlogo  $clientlogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientlogo $clientlogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientlogo  $clientlogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $logo = Clientlogo::find($id);
        $logo->logo_url = $request->get('logo_url');
        
        if($request->hasFile('logo_grey_images')){
            $image = $request->file('logo_grey_images');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('client_logo'), $new_name);
            $logo->logo_grey_images = $new_name;
        }
        if($request->hasFile('logo_org_images')){
            $image1 = $request->file('logo_org_images');
            $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('client_logo'), $new_name1);
            $logo->logo_org_images = $new_name1;
        }
        

        // $logo->logo_url = $request->get('logo_url');
        // $logo->logo_grey_images = $new_name;
        // $logo->logo_org_images = $new_name1;

        $logo->save();   

        return redirect('admin/client-logo')->with('success', 'Client Logo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientlogo  $clientlogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientlogo $clientlogo)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\usermanagement;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Crypt;

class UsermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = usermanagement::latest()->paginate(5);
        $search='';
        return view('admin/userlist', compact('data','search'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function filter(Request $request,usermanagement $usermanagement)
    {
       
        $queryvendor = usermanagement::query();
        if(!empty($request->input('user_name')))
        {
             $queryvendor->where('user_name','LIKE','%'.$request->input('user_name').'%');
        }
        $data = $queryvendor->paginate(5);
        $search=$request->input('user_name');
        return view('admin/userlist', compact('data','search'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     'user_name'    =>  'required',
        //     'user_email'     =>  'required',
        //     'user_mobile'     =>  'required',
        //     'user_password' =>'required',
        //     'profile_images'         =>  'required|image|max:2048'
        // ]);

        $image = $request->file('profile_images');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('user_images'), $new_name);
        $form_data = array(
            'user_name'          =>   $request->user_name,
            'user_email'         =>   $request->user_email,
            'user_mobile'    =>   $request->user_mobile,
            'user_password'           =>    Crypt::encrypt($request->user_password),
            'profile_images'        =>   $new_name
        );


        usermanagement::create($form_data);
        //echo "<pre>";print_r($form_data);die;
        return redirect('admin/user')->with('success', 'User Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = usermanagement::find($id);
        return view('admin/user_update', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = usermanagement::find($id);
        return view('admin/user_update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $user = usermanagement::find($id);

        // $image = $request->file('product_images');

        // $new_name = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('product_images'), $new_name);

        $user->user_name =  $request->get('user_name');
        $user->user_email = $request->get('user_email');
        $user->user_mobile = $request->get('user_mobile');
        // $user->user_password = $request->get('user_password');
        
        if($request->hasFile('profile_images')){
            $image = $request->file('profile_images');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('user_images'), $new_name);
            $user->profile_images = $new_name;
        }

        $user->save();

        return redirect('/admin/user')->with('success', 'User updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usermanagement  $usermanagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = usermanagement::findOrFail($id);
        $user->delete();
        return redirect('/admin/user')->with('success', 'User deleted successfully');
    }
}

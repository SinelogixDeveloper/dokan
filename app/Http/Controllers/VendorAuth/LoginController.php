<?php

namespace App\Http\Controllers\vendorAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Vendor;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/vendor/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

    protected function guard()
    {
        return auth()->guard('vendor');
    }

    function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $model = Vendor::where('email', $request->email)->first();
        if (empty($model)) {
            return redirect('vendor/login')->with('error', 'Wrong Login Details');
        }
        if (Hash::check($request->password, $model->password, [])) {
            if ($model->vendor_status == '1') {
                if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect('vendor/dashboard');
                } else {
                    return redirect('vendor/login')->with('error', 'Your account is not activated yet please contact to administrator.');
                }
            } else {
                return redirect('vendor/login')->with('error', 'Your account is not verified.');
            }
        } else {
            return redirect('vendor/login')->with('error', 'Wrong Login Details');
        }
    }

    public function showLoginForm()
    {
        return view('vendor.login');
    }

    public function Vendorlogout(Request $request)
    {
        //echo "test";die;
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->invalidate();

        return redirect('/vendor/login');
    }
}

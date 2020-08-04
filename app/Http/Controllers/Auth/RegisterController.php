<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Response;
use DB;
use Auth;
use Mail;
use Session;
use Twilio;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/myaccount';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $validation = $this->validator($request->all());

        if ($validation->fails()) {
            //return response()->json($validation->errors()->toArray());
            return Response::json(['errors' => $validation->errors()]);
        } else {
            $token = mt_rand(100000, 999999);
            $mobile1 = $request->mobile;
            $message_array = array(
                'sender_id'     => 'TWILIO_ACCOUNT_SID',
                'sender_secret' => 'TWILIO_AUTH_TOKEN',
                'reciver_mobile' => $mobile1,
                'media_url' => 'http://goo.gl/F9igRq',
                'otp'     => $token,
                'sender' => 'TWILIO_NUMBER'
            );

            $sms_response = Twilio::message($message_array, $op = "verfication code", false, true,  false);
            $status = response()->json($sms_response, 200);

            //$status=true;
            if ($status == true) {
                Session::put('signup_otp', $token);
                $name = $request->name;
                $mobile = $request->mobile;
                $email = $request->email;
                $password = $request->password;
                return Response::json(['success' => '1', 'name' => $name, 'mobile' => $mobile, 'email' => $email, 'password' => $password]);
            } else {
                return false;
            }
        }
    }

    //when signup otp verify
    public function otp_verify(Request $request)
    {
        $otp = session()->get('signup_otp');
        if ($otp != '') {
            $otp1 = $request->otp;
            if ($otp == $otp1) {
                $add = [
                    'name'    => $request->name,
                    'email'          => $request->email,
                    'mobile'   => $request->mobile,
                    'password'        => $request->password
                ];

                $user = $this->create($add);
                Auth::login($user);
                return Response::json(['success' => '1']);
            } else {
                return Response::json(['otperror' => '0']);
            }
        }
    }

    public function send_otp(Request $request)
    {
        $mobile = $request->mobile;
        if ($mobile !='+974') {
            $user = DB::table('users')
                ->select('*')
                ->where('mobile', $mobile)
                ->get()->toArray();
            if (!empty($user)) {
                // initialize message array 
                $token = mt_rand(100000, 999999);

                $mobile1 = $request->mobile;

                $message_array = array(
                    'sender_id'     => 'TWILIO_ACCOUNT_SID',
                    'sender_secret' => 'TWILIO_AUTH_TOKEN',
                    'reciver_mobile' => $mobile1,
                    'media_url' => 'http://goo.gl/F9igRq',
                    'otp'     => $token,
                    'sender' => 'TWILIO_NUMBER'
                );


                $sms_response = Twilio::message($message_array, $op = "verfication code", false, true,  false);

                $status = response()->json($sms_response, 200);

                $status = true;
                if ($status == true) {
                    Session::put('mobile', $token);
                    $veri = $mobile1;
                    $mobile = $mobile1;
                    return Response::json(['success' => '1', 'verify_number' => $veri, 'mobile' => $mobile]);
                    //return response()->json($sms_response,200);
                } else {
                    return false;
                }
            } else {
                return Response::json(['error' => '0']);
            }
        } else {
            $rec_email = $request->email;
            $user = DB::table('users')
                ->select('*')
                ->where('email', $rec_email)
                ->get()->toArray();
            if (!empty($user)) {
                // initialize message array 
                $token = mt_rand(100000, 999999);
                $name = 'kamlesh';
                $email = $rec_email;
                //$email_encrypted = Crypt::encryptString($email);

                Mail::send('emails.user.otp-email', ['msg' => $token, 'email' => $email], function ($m) use ($name, $email) {
                    $m->from('sine.logix.testing@gmail.com', 'Dokan');
                    $m->to($email, $name);
                    $m->subject('Reset Password');
                });

                if (Mail::failures()) {
                    return redirect()->back()->with('error_message', "Mail sending fail please verify your email.");
                }

                Session::put('mobile', $token);
                $veri = $email;
                $email = $user[0]->email;
                return Response::json(['success' => '1', 'verify_number' => $veri, 'email' => $email]);
            } else {
                return Response::json(['error' => '0']);
            }
        }
    }

    public function reset_password(Request $request)
    {
        $otp = session()->get('mobile');
        $mob = $request->get('mobile');
        if ($mob != '') {
            if ($otp != '') {
                $otp1 = $request->otp;
                if ($otp == $otp1) {
                    $password1 = $request->password;
                    $new_password = $request->new_password;

                    if ($password1 == $new_password) {
                        $user = User::where('mobile', $request->get('mobile'))->first();
                        $user_id = $user->id;
                        $obj_user = User::find($user_id);
                        $obj_user->password = bcrypt($password1);
                        $obj_user->save();

                        return Response::json(['success' => '1']);
                    } else {
                        return Response::json(['error' => '0']);
                    }
                } else {
                    return Response::json(['otperror' => '0']);
                }
            }
        } else {
            if ($otp != '') {
                $otp1 = $request->otp;
                if ($otp == $otp1) {
                    $password1 = $request->password;
                    $new_password = $request->new_password;

                    if ($password1 == $new_password && !empty($password1)) {
                        $user = User::where('email', $request->get('email'))->first();
                        $user_id = $user->id;
                        $obj_user = User::find($user_id);
                        $obj_user->password = bcrypt($password1);
                        $obj_user->save();

                        return Response::json(['success' => '1']);
                    } else {
                        return Response::json(['error' => '0']);
                    }
                } else {
                    return Response::json(['otperror' => '0']);
                }
            }
        }
    }
}

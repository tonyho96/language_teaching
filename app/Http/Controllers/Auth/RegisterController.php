<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Mail\VerifyMail;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    protected $redirectTo = '/onboarding';

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
            'name' => 'string|max:50',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'string|min:6',
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

    	$role_teacher = 'true';
		//teacherOnBoarding: =='true' -> teacher, =='false' student
		//teacherOnBoarding: become teacher or not teacher(student)

		if($data['teacherOnBoarding']==$role_teacher)
			$date['role'] = config('auth.role.teacher');
		else
			$date['role'] = config('auth.role.student');

		$user = User::create([
			'full_name' => $data['full_name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'role' => $date['role'],
			'verify_token' =>str_random(40)
		]);


		Mail::to($user->email)->send(new VerifyMail($user));

        return $user;
    }

	public function verifyUser($token)
	{
		$verifyUser = User::where('verify_token', $token)->first();
		if(isset($verifyUser) ){
			if(!$verifyUser->is_verified) {
				$verifyUser->is_verified = 1;
				$verifyUser->save();
				$status = "Your e-mail is verified. You can now login.";
			}else{
				$status = "Your e-mail is already verified. You can now login.";
			}
		}else{
			return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
		}
		return redirect('/login')->with('status', $status);
	}

	protected function registered(Request $request, $user)
	{
		//$this->guard()->logout();
		return redirect('/onboarding');

//		return redirect('/onboarding')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
	}

}

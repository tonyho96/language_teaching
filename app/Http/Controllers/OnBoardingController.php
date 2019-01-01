<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Language;

use App\Models\Country;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

use App\Services\OnBoardingService;

class OnBoardingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$limit = 5;
		$languages = Language::where('is_popular','=',1)->get();
		$all_languages = Language::get();
		$countries =Country::get();
		$teacher_subjects = Subject::limit($limit)->get();
        $id = Auth::user()->id;
        $current_user = User::find($id);
		$timeZones = \DateTimeZone::listIdentifiers();


		return view('home.onboarding',compact('languages','current_user','countries','all_languages','teacher_subjects','timeZones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input = $request->all();
        if(!isset($input['teacher_type'])){
			$input['student_profile_status']= null;
			$input['subject_id']= null;
		}

        if($input['subject_id'] == 'null')
			$input['subject_id']= null;

		$userID = Auth::id();
		$user = User::where('id','=',$userID)->first();
		if($user->role == config('auth.role.teacher'))
			$input['teacher_level']= config('auth.teacher_level.approve');
		else
			$input['teacher_level']= null;
		Auth()->logout();

		if (OnBoardingService::create($input, $user)) {
			return \Redirect::route('teachers')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');

		}

		return \Redirect::route('onboarding.index')
			->with('error', 'Failed to create OnBoarding!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

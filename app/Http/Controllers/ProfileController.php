<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Country;
use App\Models\Language;
use App\Models\Subject;
use App\Services\UserService;
class ProfileController extends Controller
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
        $userID = Auth::id();
        $user = User::where('id','=',$userID)->first();

        $countries = Country::all();
        
        return view('/settings/profile',compact('user','countries'));

        //
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
        //
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
    public function update_information(Request $request){
        $input = $request->all();
        $input['street_from']=$input['from_city'].'|'.$input['street_from'];
        $input['country_code']=$input['country'];
        $input['from_country_code']=$input['from_country'];
		$input['street_address']=$input['living_city'].'|'.$input['street'];
        $input['birth_day']=$input['year'].'-'.$input['month'].'-'.$input['day'];

        $userID = Auth::id();
        $user = User::where('id','=',$userID)->first();
        UserService::update_information($user,$input);
        return redirect('/settings/profile');
    }
    public function update_comunication(Request $request){
        $input = $request->all();
        $userID = Auth::id();
        $user = User::where('id','=',$userID)->first();
        UserService::update_comunication($user,$input);
        return redirect('/settings/profile');
    }
    public function update_student_information(Request $request){
        $input = $request->all();
        $userID = Auth::id();
        $user = User::where('id','=',$userID)->first();
        UserService::update_student_information($user,$input);
        return redirect('/settings/profile');
    }
    public function update_language_information(Request $request){
        $input = $request->all();
        $userID = Auth::id();
        $user = User::where('id','=',$userID)->first();
        UserService::update_language_information($user,$input);
        return redirect('/settings/profile');
    }
}

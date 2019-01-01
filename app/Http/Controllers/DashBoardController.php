<?php

namespace App\Http\Controllers;

use App\Models\Money;
use App\Models\UserCash;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\DashBoardService;

class DashBoardController extends Controller
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

		$area_name = $user->time_zone;
		$time = DashBoardService::dateByTimeZone($area_name);
		$time_create=date_create($time);
		$time_by_timezone =  date_format($time_create,"H:i");

//		$user_cash = UserCash::where('user_id','=',$userID)->first();
//		current_balance
		if(isset($user->currency_code))
		{
			$money_name = $user->currency_code;
		}
		else
		{
			$money_name = 'No unit available';
		}

        $user_email = $user->email;

//		$time_utc = explode(' ', $user->userTimeZone->time);
//		$UTC = $time_utc[0];

		return view('home.dashboard',compact('user','time_by_timezone', 'user_email','money_name'));
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
}

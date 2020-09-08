<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProfileLog;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;


class LoginController extends Controller
{
     use LogsActivity;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
    	$redirectPath = $this->redirectPath();

    	ProfileLog::create([
			'user_id' => $user->id,
			'action'  => 'logged in',
			'data'    => "from {$request->ip()}",
    	]);
    	return redirect()->intended($redirectPath);
    }

    protected function loggedOut(Request $request)
    {
	  	return redirect()->route('login');
    }
}

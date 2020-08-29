<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use App\Models\ProfileLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard.index');
    }

    public function activity()
    {
		$activities = ProfileLog::where('user_id', Auth::user()->id)->orderByDesc('id')->get();

		return view('backend.profile.activity', compact('activities'));
    }
}

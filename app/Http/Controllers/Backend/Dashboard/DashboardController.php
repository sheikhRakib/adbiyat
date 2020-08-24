<?php

namespace App\Http\Controllers\Backend\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use App\Models\User;

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
}

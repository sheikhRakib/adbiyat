<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CompanyServiceCategory;
use App\Models\Article;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;

// use App\Http\Controllers\Frontend\CommonDataController;
use App\Libraries\Encryption;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // activity()->log('Look mum, I logged something');

      return $lastActivity = Activity::all(); //returns the last logged activity

      return $lastActivity->description; //returns 'Look mum, I logged something';
      $data['articles'] = Cache::get('articles', function () {
            return  Article :: where('status',true)->orderBy('id','desc')->get();
      });
       return view('frontend.index');
    }

}

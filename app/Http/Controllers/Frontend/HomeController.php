<?php

namespace App\Http\Controllers\Frontend;

use App\Models\CompanyServiceCategory;
use App\Models\Article;
use App\Models\User;
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
      $data['articles'] = Cache::get('articles', function () {
            return  Article :: where('status',true)->orderBy('id','desc')->get();
      });
       return view('frontend.index');
    }

}

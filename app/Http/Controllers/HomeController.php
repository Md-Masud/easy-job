<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\frontend\circulars;
use App\frontend\ownerinformations;
use App\backend\categorys ;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
         $categorys=categorys::select('id','name')->latest()->get();
        $circulars=circulars::orderBy('id','desc')->select('id','category_id','owner_id','name','description','vacancies','education','experience','additional','location','salary','created_at','dateline')->paginate(4);
        return view('frontend.index',compact('circulars','categorys'));
    }
}

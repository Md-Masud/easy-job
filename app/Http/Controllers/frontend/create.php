<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use App\frontend\circulars;
use App\frontend\ownerinformations;
use App\backend\categorys ;
use Illuminate\Support\Facades\Auth;
use Session;
class create extends Controller
{
    public function index()
    {
        $categorys=categorys::select('id','name')->latest()->get();
        $circulars=circulars::orderBy('id','desc')->select('id','category_id','owner_id','name','description','vacancies','education','experience','additional','location','salary','created_at','dateline')->paginate(4);
        return view('frontend.index',compact('circulars','categorys'));

    }
    public function jobView($id)
    {
        $categorys=categorys::select('id','name')->latest()->get();
        $circulars=circulars::findorfail($id);
        return view ('frontend.owner.page.viewCircular',compact('circulars','categorys'));
    }

   public function login()
    {
    	return view('frontend.layouts.pages.log');
    }
    public function account ()
    {
    	return view('frontend.layouts.pages.reg');
    }
    public function user ()
    {
    	return view('frontend.user.layouts.umaster');
    }
    public function company ()
    {
        return view('frontend.owner.layouts.omaster');
    }
     public function uinformation ()
    {
      return view('frontend.user.pages.user_information');
    }
    public function parsonal()
    {
         return view('frontend.owner.page.parsonal_information');
    }
     public function adminindex()
    {
         return view('frontend.admin.layouts.amaster');
    }

}

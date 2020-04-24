<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\frontend\circulars;
use App\frontend\ownerinformations;
use App\backend\categorys ;
use Illuminate\Support\Facades\Auth;

use Session;
class job_circular extends Controller
{
    public function indexcircular()
    {
    	
     $circulars=Auth::user()->circulars()->select('id','category_id','name','description','vacancies','education','experience','additional','location','salary',)->latest()->get();
        return view('frontend.owner.page.viewjobcircular',compact('circulars'));  
    }
    public function circularview()
    {
    	 $categorys=categorys::select('id','name')->latest()->get();
       return view('frontend.owner.page.job_circular',compact('categorys'));  
    }
    public function store(Request $request)
      {
        $validatedData = $request->validate([
    ]);
       $circulars= new circulars;
       $circulars->category_id = $request->category_id;
       $circulars->user_id=Auth::id();
       $circulars->name = $request->name;
       $circulars->slug = Str::slug($request->name);
       $circulars->description= $request->description; 
       $circulars->vacancies = $request->vacancies; 
       $circulars->education = $request->education; 
       $circulars->experience = $request->experience;
       $circulars->additional = $request->additional;
       $circulars->location = $request->location;
       $circulars->salary = $request->salary;
       $circulars->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->Route('job.circular');
      }
      public function destroy($id)
     {
      $circulars=circulars::findorfail($id);
      $circulars->delete();
         Session::flash('Success','delete  Successfull');
         return redirect()->back();
    }
    public function view($id)
     {
       $categorys=categorys::select('id','name')->latest()->get();
      $circulars=circulars::findorfail($id);
      return view ('frontend.owner.page.viewCircular',compact('circulars','categorys'));
     }    
}

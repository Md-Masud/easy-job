<?php

namespace App\Http\Controllers\frontend;

use App\frontend\Resume;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\frontend\circulars;
use App\frontend\Owner;
use App\backend\categorys ;
use Illuminate\Support\Facades\Auth;


use Session;
class job_circular extends Controller
{
    public function indexcircular()
    {

        $circulars=Auth('owner')->user()->circulars()->select('id','category_id','owner_id','name','description','vacancies','education','experience','additional','location','salary','dateline')->latest()->get();
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
       $circulars->owner_id=Auth('owner')->id();
       $circulars->name = $request->name;
       $circulars->slug = Str::slug($request->name);
       $circulars->description= $request->description;
       $circulars->vacancies = $request->vacancies;
       $circulars->education = $request->education;
       $circulars->experience = $request->experience;
       $circulars->additional = $request->additional;
       $circulars->location = $request->location;
       $circulars->salary = $request->salary;
       $circulars->dateline = $request->dateline;
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
    public function ResumeView($id)
    {
        //dd($id);
        $circular=circulars::with('resumes')->find($id);
        return view('frontend.owner.page.resumeView',compact('circular'));

    }
}

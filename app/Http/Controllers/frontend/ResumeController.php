<?php

namespace App\Http\Controllers\frontend;

use App\frontend\circulars;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use App\frontend\Resume;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function indexResume()
    {

        $Resume=Resume::select('id','circular_id','user_id','photo')->latest()->get();
        return view('frontend.owner.page.resumeView',compact('Resume'));
    }
     public  function crateView($id)
     {

         $circulars=circulars::findorfail($id);
         return view('frontend.owner.page.resume',compact('circulars'));
     }
    public function ResumeStore(Request $request)
    {

        $this->validate($request,[

            "photo"=>"required",
        ]);
        $Resume= new  Resume;
        $Resume->user_id =Auth()->id();
        $Resume->circular_id=$request->circular_id;;
        $photo = $request->file('photo')->getClientOriginalName();
        $destination = base_path() . '/public/uploads/images';
       $Resume->photo= $request->file('photo')->move($destination, $photo);
       //dd($Resume);
        $Resume->save();
        Session::flash('Success','Create  Successfull');
        return redirect()->Route('job.circular');
    }



}

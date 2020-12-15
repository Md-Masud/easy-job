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
            'user_id' => 'unique:resumes'
        ]);
        $Resume= new  Resume;
        $Resume->user_id =Auth()->id();
        $Resume->circular_id=$request->circular_id;
        if($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/images/',$filename);
            $Resume->photo=$filename;
        }
        else{
            return $request;
            $Resume->photo = "";
        }
       //dd($Resume);
        $Resume->save();

        Session::flash('Success','Create  Successfull');
        return redirect()->Route('admin.index');
    }

  public function view($id)
  {

      $Resume=Resume::select('id','circular_id','user_id','photo')->find($id);;
      return view('frontend.owner.page.review',compact('Resume'));
  }

}

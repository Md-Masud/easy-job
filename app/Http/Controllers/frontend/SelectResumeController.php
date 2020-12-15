<?php

namespace App\Http\Controllers\frontend;

use App\frontend\SelectResume;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SelectResumeController extends Controller
{

    public function SelectResumeStore(Request $request)
    {

        $SelectResume= new  SelectResume;
        $SelectResume->owner_id =Auth('owner')->id();
        $SelectResume->resume_id=$request->resume_id;
        $SelectResume->save();
        return redirect()->Route('admin.company');
    }
    public  function ResumeView()
    {

        $selectResume=Auth('owner')->user()->selectResumes()->select('id','owner_id','resume_id')->latest()->get();

        return view('frontend.owner.page.selectResume',compact('selectResume'));


    }
}

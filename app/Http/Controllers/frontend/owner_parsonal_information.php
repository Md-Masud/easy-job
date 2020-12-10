<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\frontend\ownerinformations;
use App\backend\countrys;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class owner_parsonal_information extends Controller
{
	public function indexparsonal()
    {
    	$ownerinformations=Auth('owner')->user()->ownerinformations()->select('id','counrty_id','name','description','email','web_address','facebook')->latest()->get();
        return view('frontend.owner.page.viewinformation',compact('ownerinformations'));
    }
    public function parsonal()
    {
    	$countrys=countrys::select('id','name')->latest()->get();
         return view('frontend.owner.page.parsonal_information',compact('countrys'));
    }
    public function store(Request $request)
      {
        $validatedData = $request->validate([

    ]);
       $ownerinformations= new ownerinformations;
       $ownerinformations->counrty_id = $request->counrty_id;
       $ownerinformations->owner_id=Auth('owner')->id();
       $ownerinformations->name = $request->name;
       $ownerinformations->slug = Str::slug($request->name);
       $ownerinformations->description= $request->description;
       $ownerinformations->email = $request->email;
       $ownerinformations->web_address = $request->web_address;
       $ownerinformations->facebook = $request->facebook;
       $ownerinformations->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->Route('admin.nformation.view');
      }
      public function update($id)
    {
    	$ownerinformations=ownerinformations::findorfail($id);
    	$countrys=countrys::select('id','name')->latest()->get();
         return view('frontend.owner.page.parsonal_information',compact('ownerinformations','countrys'));
    }
      public function edit(Request $request,$id)
      {
        $validatedData = $request->validate([

    ]);
       $ownerinformations=ownerinformations::findorfail($id);
       $ownerinformations->counrty_id = $request->counrty_id;
       $ownerinformations->owner_id=Auth('owner')->id();
       $ownerinformations->name = $request->name;
       $ownerinformations->slug = Str::slug($request->name);
       $ownerinformations->description= $request->description;
       $ownerinformations->email = $request->email;
       $ownerinformations->web_address = $request->web_address;
       $ownerinformations->facebook = $request->facebook;
       $ownerinformations->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }
       public function destroy($id)
    {
    	$ownerinformations=ownerinformations::findorfail($id);
    	$ownerinformations->delete();
         Session::flash('Success','delete  Successfull');
         return redirect()->back();
    }
}

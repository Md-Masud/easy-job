<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\backend\countrys;
use Session;

class county extends Controller
{
    
   public function index()
    {
         return view('backend.layouts.amaster');  
    }
    public function Country_index()
    {
      $countrys=countrys::select('id','name')->latest()->get();
       return view('backend.pages.coindex',compact('countrys'));  
    }
    
    public function country_stor()
      {

       return view('backend.pages.country');     
    
      }
      public function destroy ($id)
        {
        $countrys=countrys::findorfail($id);
        $countrys->delete();
         Session::flash('Success','delete  Successfull');
         return redirect()->back();
       }
      
      public function store(Request $request)
      {
        $validatedData = $request->validate([
        'name' => 'required|unique:countrys|',
    ]);
       $country= new countrys;
       $country->name = $request->name;
       $country->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }
       
    public function update($id)
    {
      $countrys=countrys::findorfail($id);
      return view('backend.pages.editcountry',compact('countrys'));  
    }
    public function edit(Request $request,$id)
    {
    
        $validatedData = $request->validate([
        'name' => 'required|unique:countrys|',
    ]);
       $country=countrys::findorfail($id);
       $country->name = $request->name;
       $country->save( $validatedData);
       Session::flash('Success','update  Successfull');
       return redirect()->route('country');
    }
    }

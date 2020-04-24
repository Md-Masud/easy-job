<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\backend\countrys;
use Session;

class create extends Controller
{
    public function edit(Request $request,$id)
      {
        $validatedData = $request->validate([
        'name' => 'required|unique:countrys|',
    ]);
       $country=countrys::findorfail($id);
       $country->name = $request->name;
       $country->slug=Str::slug( $request->name);
       $country->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }
}

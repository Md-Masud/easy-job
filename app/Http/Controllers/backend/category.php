<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\backend\categorys ;
use App\frontend\circulars;
use Session;
use DB;

class category extends Controller
{
    public function categoryindex()
    {
      //$categorys = DB::table('categorys')
            //->join('circulars', 'categorys.id', '=', 'circulars.category_id')->get();
      $categorys=categorys::select('id','name')->latest()->get();
       return view('backend.pages.categoryindex',compact('categorys'));

    }

    public function categorycreate()
      {

       return view('backend.pages.categorycreate');

      }
      public function store(Request $request)
      {
        $validatedData = $request->validate([
        'name' => 'required|unique:countrys|',
    ]);
       $categorys= new categorys;
       $categorys->name = $request->name;
       $categorys->save( $validatedData);
       Session::flash('Success','Create  Successfull');
       return redirect()->back();
      }
      public function destroy ($id)
        {
        $categorys=categorys::findorfail($id);
        $categorys->delete();
         Session::flash('Success','delete  Successfull');
         return redirect()->back();
       }
       public function update($id)
    {
       $categorys=categorys::findorfail($id);
       return view('backend.pages.categorysedit',compact('categorys'));
    }
     public function edit (Request $request,$id )
      {

        $categorys=categorys::findorfail($id);
        $categorys->name = $request->name;
        $categorys->save();
       Session::flash('Success','update Successfull ');
       return redirect()->Route('Category.view');
     }
      public function view($id)
     {

         $categorys=categorys::with('circulars')->select('id','name')->find($id);

             return view('frontend.caindex',compact('categorys'));

     }

}

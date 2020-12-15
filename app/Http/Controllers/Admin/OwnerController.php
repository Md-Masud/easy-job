<?php

namespace App\Http\Controllers\Admin;

use App\frontend\Owner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function ownerList()
    {
        $owners=Owner::select('id','name','email')->latest()->get();
        return view('backend.pages.ownerlist',compact('owners'));
    }
}

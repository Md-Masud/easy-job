<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function userList()
   {
       $users=User::select('id','name','email')->latest()->get();
       return view('backend.pages.userlist',compact('users'));
   }
}

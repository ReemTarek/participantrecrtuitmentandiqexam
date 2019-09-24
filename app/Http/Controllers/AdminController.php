<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{  public function adminlog()
    {
        return view("/adminlog");
    }
   public function showcertaindata(Request $request)
   {
         if($request->input('select')=="none")
         {
            $users = User::all();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="WEB")
         {
            $users = DB::table('users')->where('firstp', 'WEB')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="PS")
         {
            $users = DB::table('users')->where('firstp', 'PS')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="AI")
         {
            $users = DB::table('users')->where('firstp', 'AI')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="HR")
         {
            $users = DB::table('users')->where('firstp', 'HR')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="PR")
         {
            $users = DB::table('users')->where('firstp', 'PR')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="ER")
         {
            $users = DB::table('users')->where('firstp', 'ER')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="AR")
         {
            $users = DB::table('users')->where('firstp', 'AR')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="VR")
         {
            $users = DB::table('users')->where('firstp', 'VR')->get();
            return view("/show")->with('users',$users);
         }
         else if($request->input('select')=="PSp")
         {
            $users = DB::table('users')->where('firstp', 'PSp')->get();
            return view("/show")->with('users',$users);
         }
   }

    public function validateadmin(Request $request)
    {
        if($request->input('name')=="adminengbreak2020" && $request->input('password')=="highpassword")
        {session_start();
            $_SESSION["admin"]=1;
            $users = User::all();
            return view("/show")->with('users',$users);
        }
        else
        {
            return view("/adminlog");
        }
    }
    public function adminlogout()
    {
        return view("/adminlog");
    }
}
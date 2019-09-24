<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CheckExamController extends Controller
{

    public function checkexam(Request $request){
        $score=0;
        if($request->input("q1")=='b')
        {
            $score+=10;
        }
        if($request->input("q2")=='d')
        {
            $score+=10;
        }
        if($request->input("q3")=='b')
        {
            $score+=10;
        }
        if($request->input("q4")=='c')
        {
            $score+=10;
        }
        if($request->input("q5")=='c')
        {
            $score+=10;
        }
        if($request->input("q6")=='c')
        {
            $score+=10;
        }
        if($request->input("q7")=='b')
        {
            $score+=10;
        }
        if($request->input("q8")=='a')
        {
            $score+=10;
        }
        if($request->input("q9")=='d')
        {
            $score+=10;
        }
        if($request->input("q10")=='c')
        {
            $score+=10;
        }
        if($request->input("q11")=='b')
        {
            $score+=10;
        }
        if($request->input("q12")=='c')
        {
            $score+=10;
        }
        $user=Auth::user();
        User::where('email', $user->email)->update(array('score' => $score));

        Auth::logout();
       // session_destroy();
        return view('/done');
    }
}
    
<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;

class DoneController extends Controller
{
   

   
    public function index()
    {   
Auth::logout(); 
return view('done');
    }
}

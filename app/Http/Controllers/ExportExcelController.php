<?php

namespace App\Http\Controllers;
use App\Exports\ApplicantExport;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{/*
    function index()
    {
     $user_data = DB::table('users')->get();
     return view('export_excel')->with('applicant_data', $user_data);
    }

    function excel()
    {
     $user_data = DB::table('users')->get()->toArray();
     $user_array[] = array('name', 'email', 'phone', 'university', 'college','year','firstp','secondp','created_at','updated_at');
     foreach($user_data as $user)
     {
      $user_array[] = array(
      'name' => $user->name,
      'email'=>$user->email,
      'phone'=>$user->phone,
      'university'=>$user->university,
      'college'=>$user->college,
      'year'=>$user->year,
      'firstp'=>$user->firstp,
      'secondp'=>$user->secondp,
      'created_at'=>$user->created_at,
      'updated_at'=>$user->updated_at
      );
     }
     /*Excel::create('Applicant Data', function($excel) use ($user_array){
      $excel->setTitle('Applicant Data');
      $excel->sheet('Applicant Data', function($sheet) use ($user_array){
       $sheet->fromArray($user_array, null, 'A1', false, false);
      });
     })->download('xlsx');
     return Excel::download(new DisneyplusExport, 'disney.xlsx');

    }*/
    public function export() 
{
        return Excel::download(new ApplicantExport, 'applicantdata.xlsx');
}
}

?>

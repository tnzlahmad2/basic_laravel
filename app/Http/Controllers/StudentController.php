<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function student(){
        $title = "Student Name" ;
        $students = [ "Tabish" , "Ali" , "haider" ];
    return view('pages.student' , array("title"=>$title  ,"students"=>$students));
  } 
   public function inner(){
    return view('pages.inner');
  }
}

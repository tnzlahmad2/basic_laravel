<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
    $title = "hello world";
    // return view('pages.index' , compact('title'));
    return view('pages.index')->with($title);

  }
  public function about(){
    return view('pages.about');
  }
  public function services(){
    $data = array(
      'title'=> "service",
      'services'=> ["Web Design" , "SEO" ]
    );
    return view('pages.services')->with($data);
  }
}

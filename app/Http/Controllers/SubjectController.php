<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubjectController extends Controller
{
    public function getData(){
        // echo "This is the mock api =>";
        $data =Http::get('https://reqres.in/api/users');
        return view('product' , ['collection'=>$data['data']]);
    }
}

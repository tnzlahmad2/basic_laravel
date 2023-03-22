<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee(){
        $employee = Http::get('https://reqres.in/api/unknown');
        return view('employee', ['collection'=>$employee['data']]);
    }
}

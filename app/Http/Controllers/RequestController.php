<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function testRequest(Request $req){
        return $req->input();
    }
}

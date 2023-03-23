<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function flashSessions(Request $req){
        $data= $req->input('user');
        $req-> session()->flash('user',$data);
        return redirect('addUser');
    }
}

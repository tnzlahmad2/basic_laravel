<?php

namespace App\Http\Controllers;

use App\Models\DbModel;
// use Illuminate\Support\Facades\DB; using for connect db table
use Illuminate\Http\Request;

class DbController extends Controller
{
    // func is used for the db connection
    // public function test() {
    //     return DB::select('select * from lib');
    // }

    public function getModel(){
        return DbModel::all();
    }
}

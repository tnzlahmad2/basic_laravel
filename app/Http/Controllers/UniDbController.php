<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class UniDbController extends Controller
{
    function uniDb(){
        return Department::all();
    }
}

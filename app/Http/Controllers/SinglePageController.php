<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SinglePageController extends Controller
{
    function index(){
        return view('movies');
    }
}

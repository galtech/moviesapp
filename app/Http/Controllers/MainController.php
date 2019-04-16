<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;

class MainController extends Controller
{
    function index(){
        return view('login');
    }
    
    function checklogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        
        $userdata = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        
        if(Auth::attempt($userdata)){
            return redirect('main/successlogin');
        }else{
            return back()->with('error', 'Incorrect Login Details');
        }
    }
    
    function successlogin(){
        return view('successlogin');
    }
    
    function logout(){
        Auth::logout();
        return redirect('main');
    }
}

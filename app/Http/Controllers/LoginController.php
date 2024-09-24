<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    
    public function index(){
        return view("login");
    }


    
    public function login(Request $req){
        echo $req->email;
        echo $req->password;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    function userHome() {
        return view('home');
    }

    function adminLogin() {
        //return view('admin.login');
        View: if (view()->exists('admin.sign'))
        {
            return view('admin.login');
        }else{
         return "View not found";
        }
    }
    
    function userAbout($user)  {
        //return view('about', ['user' => $user]);
        
    }
}

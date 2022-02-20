<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function goToHomePages(){
        return view('home');
    }

    public function goToDashboard(){
        return view('dashboard');
    }


}

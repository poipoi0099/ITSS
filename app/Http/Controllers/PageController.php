<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.Homepage');
    }

    public function getSignUp(){
        return view('page.signup');
    }
}

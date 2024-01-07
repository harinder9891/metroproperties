<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function November9(){
        return view('frontend.landing-pages.november9');
    }
}

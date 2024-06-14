<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function showLanding(){
        return view('landingpage.index');
    }

    public function showAppointment(){
        return view('landingpage.appointment');
    }
}

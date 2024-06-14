<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function users()
    {
        return view('users.users');
    }

    public function booking()
    {
        return view('booking.booking');
    }

    public function services()
    {
        return view('services.services');
    }

    public function customers()
    {
        return view('customers.customers');
    }
}

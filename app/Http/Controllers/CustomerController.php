<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Booking::select('nama_pelanggan', 'jenis_kelamin', 'no_telp', 'alamat', 'kota')->distinct()->get();
        return view('customers.customers', compact('customers'));
    }
}


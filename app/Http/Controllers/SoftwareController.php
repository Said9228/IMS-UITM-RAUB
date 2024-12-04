<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    public function index()
    {
        return view('technician.software'); // Ensure this view exists
    }
}

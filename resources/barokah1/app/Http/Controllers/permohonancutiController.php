<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class permohonancutiController extends Controller
{
    public function index()
    {
        return view('admin.permohonancuti');
    }
}

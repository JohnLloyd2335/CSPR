<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerSegmentation extends Controller
{
    public function index()
    {
        return view('com_seg');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cart;
use Auth;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('aboutUs.index');
    }
}
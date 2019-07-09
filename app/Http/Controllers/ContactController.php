<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
}

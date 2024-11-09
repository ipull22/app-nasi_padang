<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    publiC function index() {
        return view('profile');
    }
}

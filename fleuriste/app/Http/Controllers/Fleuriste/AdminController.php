<?php

namespace App\Http\Controllers\Fleuriste;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('AdminViews.AdminDash');
    }
}

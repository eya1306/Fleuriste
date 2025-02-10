<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected function redirectTo()
    {
        if (auth()->user()->hasRole('fleuriste')) {
            return '/admin/dashboard';
        } elseif (auth()->user()->hasRole('client')) {
            return '/client/dashboard';
        }

        return '/home';
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function HomePage()
    {
        return Inertia::render('Home');
    }

    function ProfilePage()
    {
        return Inertia::render('Profile');
    }

    function LoginPage()
    {
        return Inertia::render('Login');
    }
}

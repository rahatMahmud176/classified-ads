<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
public function dashboard()
{
    return view('back-end.dashboard.dashboard');
}

public function login()
{
    return view('back-end.admin.login');
}
public function register()
{
    return view('back-end.admin.register');
}











}//

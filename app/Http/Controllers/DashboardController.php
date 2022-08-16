<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index()
{
    return view('font-end.dashboard.dashboard');
}
 
public function userProfile()
{
    return view('font-end.dashboard.user-profile');
}






}//

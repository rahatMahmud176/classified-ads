<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function index()
{
    return view('font-end.pages.home');
}
public function adsDetails()
{
    return view('font-end.pages.ads-details');
}






}//

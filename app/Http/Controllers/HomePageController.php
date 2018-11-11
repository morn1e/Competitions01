<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
	public function index(){
		return view ('home');
	}
	public function show(){
		return view ('homepage');
	}
    
}

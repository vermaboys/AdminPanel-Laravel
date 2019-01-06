<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    function index()
    {
    	return view('admin.dashboard');
    }
	
}

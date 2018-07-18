<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view('admins.home');
    }
    
     public function charts()
    {
     
        return view('admins.charts');
    }
    
      public function tables()
    {
     
        return view('admins.tables');
    }
    
}

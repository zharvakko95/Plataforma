<?php

namespace App\Http\Controllers;
use App\Grade;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('home')->with('grades',compact('grades'));
    }
}

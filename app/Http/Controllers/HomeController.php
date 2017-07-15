<?php

namespace App\Http\Controllers;

use App\Countries;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth')->only('index');
        $this->middleware('role:Admin')->only('index');
    }

    public function welcome()
    {
        //dd(trans('action.title'));
        $countries = Countries::all();
        return view('welcome', compact('countries'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}

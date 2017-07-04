<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    public function welcome()
    {
        return view('welcome');
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

    public function storePetitionText()
    {
        LanguageLine::updateOrCreate();
        LanguageLine::updateOrCreate();
    }
}

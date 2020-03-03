<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (auth()->user()->user_type) {
            case 1:
                return view('home');
                break;
            case 2:
                return view('layouts.instrutor.home');
                break;
            case 3:
                return view('layouts.aluno.home');
                break;
        }
        
    }
}

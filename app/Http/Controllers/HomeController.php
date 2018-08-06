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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.client.index');
    }

    public function consultation()
    {
        return view('dashboard.client.formkonsultasi');
    }

    public function category()
    {
        return view('dashboard.client.pilihkategori');
    }
}

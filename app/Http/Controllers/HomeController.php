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
        // $request->session()->flash('success','Testing flash message');
        // $request->session()->flash('warning','Testing flash message');
        // $request->session()->flash('error','Testing flash message');

        return view('home');
    }
}

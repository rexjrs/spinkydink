<?php

namespace App\Http\Controllers;

use DateTime;
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
        $this->middleware('guest');
        // STYLES AND JS Controllers
        $this->css = '/css/pagestyles/home.css';
        $this->js = '/js/home/countdown.js';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = new DateTime(); 
        $time = $now->format("Y-m-d H:i:s"); 
        $since_start = $now->diff(new DateTime('2017-01-28 16:25:00'));
        $minutes = $since_start->days * 24 * 60;
        $minutes += $since_start->h * 60;
        $minutes += $since_start->i * 60;
        $minutes += $since_start->s;
        return view('home')->with(['csspath' => $this->css,'jspath' => $this->js,'time' => $time, 'diff' => $minutes]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // STYLES AND JS Controllers
        $this->css = '/css/pagestyles/profile.css';
        $this->js = '/js/profile/profile.js';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('newproduct')->with(['csspath' => $this->css,'jspath' => $this->js]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        // STYLES AND JS Controllers
        $this->pagename = 'auctions';
        $this->css = '/css/pagestyles/auction.css';
        $this->js = '/js/auction/countdown.js';
        $this->jss = '/js/auction/expand.js';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $now = new DateTime(); 
        // $time = $now->format("Y-m-d H:i:s"); 
        // $since_start = $now->diff(new DateTime('2017-01-28 16:25:00'));
        // $minutes = $since_start->days * 24 * 60;
        // $minutes += $since_start->h * 60;
        // $minutes += $since_start->i * 60;
        // $minutes += $since_start->s;
        // return view('home')->with(['csspath' => $this->css,'jspath' => $this->js,'time' => $time, 'diff' => $minutes]);
        return view('auction')->with(['csspath' => $this->css,'jspath' => $this->js, 'page_name' => $this->pagename]);
    }

    public function auction($auction)
    {

        return view('auctionexpand')->with(['csspath' => $this->css,'jspath' => $this->jss]);
    }
}

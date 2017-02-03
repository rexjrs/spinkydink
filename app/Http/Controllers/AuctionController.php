<?php

namespace App\Http\Controllers;

use App\Auctions;
use DateTime;
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
        $now = new DateTime(); 

        $auctions = Auctions::where('date_end', '>', $now)->get();

        $auctionLong = [];
        foreach($auctions as $auction){
            array_push($auctionLong, $auction['date_end']);
        }
        $auctionLong = json_encode($auctionLong);

        return view('auction')->with([
            'csspath' => $this->css,
            'jspath' => $this->js, 
            'page_name' => $this->pagename,
            'auctions' => $auctions,
            'aucdates' => $auctionLong
            ]);
    }

    public function auction($auction)
    {
        $auctions = Auctions::where('product_id', $auction)->first();
        return view('auctionexpand')->with(['csspath' => $this->css,'jspath' => $this->jss, 'auctions' => $auctions]);
    }

    public function placeBid($auction)
    {
        return view('auctionexpand')->with(['csspath' => $this->css,'jspath' => $this->jss, 'auctions' => $auctions]);
    }
}

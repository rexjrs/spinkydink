<?php

namespace App\Http\Controllers;

use App\Auctions;
use App\Bids;
use DateTime;
use Auth;
use Session;
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
        $now = new DateTime(); 
        $bids = Bids::where('product_id', $auction)->orderBy('created_at', 'desc')->get();
        $auctions = Auctions::where('product_id', $auction)->first();
        if(new DateTime($auctions['date_end']) > $now){
            $done = true;
        }else{
            $done = false;
        }
        return view('auctionexpand')->with([
            'csspath' => $this->css,
            'jspath' => $this->jss, 
            'auctions' => $auctions, 
            'bids' => $bids, 
            'done' => $done
        ]);
    }

    public function placeBid($auctionID, Request $request)
    {
        $now = new DateTime(); 
        $auction = Auctions::where('product_id',$auctionID)->first();
        if(new DateTime($auction['date_end']) > $now && $auction['bid']+$auction['increment']-1 < $request->newbid){

            Auctions::where('product_id', $auctionID)->update([
                'bidder' => Auth::user()->username(),
                'bid' => $request->newbid
            ]);

            Bids::create([
                'product_id' => $auctionID,
                'user' => Auth::user()->username(),
                'bid' => $request->newbid
            ]);
            return back();
        }else{
            Session::flash('errorbid', "Bid is below current bid or less than the incremental requirement.");
            return back();
        }
    }
}

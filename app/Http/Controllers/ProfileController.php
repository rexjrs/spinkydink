<?php

namespace App\Http\Controllers;

use App\Auctions;
use Auth;
use DateTime;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // STYLES AND JS Controllers
        $this->pagename = 'profile';
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
        $now = new DateTime(); 

        $auctions = Auctions::where('user',Auth::user()->username())->orderBy('date_end', 'desc')->get();

        $ended = [];
        foreach($auctions as $auction){
            if(new DateTime($auction['date_end']) > $now){
                array_push($ended, 'LIVE');
            }else{
                array_push($ended, 'ENDED');
            }
        }

        $invoices = Auctions::where('bidder',Auth::user()->username())->where('date_end', '<', $now)->orderBy('created_at', 'desc')->get();

        return view('profile')->with([
            'csspath' => $this->css,
            'jspath' => $this->js,
            'page_name' => $this->pagename, 
            'myauc' => $auctions,
            'ended' => $ended,
            'invoices' => $invoices
        ]);
    }

    public function invoice($inv)
    {
        $invoice = Auctions::where('product_id',$inv)->first();
        if($invoice['bidder'] !== Auth::user()->username()){
            return redirect('home');
        }
        return view('invoice')->with([
            'csspath' => $this->css,
            'jspath' => $this->js,
            'invoice' => $invoice
        ]);
    }
}

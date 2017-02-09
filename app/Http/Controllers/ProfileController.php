<?php

namespace App\Http\Controllers;

use App\Auctions;
use App\Profiles;
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

        $auctions = Auctions::where('user',Auth::user()->username())->where('archive', 0)->orderBy('date_end', 'desc')->get();

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

    public function archive(Request $request)
    {
        Auctions::where('product_id', $request->listing)->update([
            'archive' => 1,
        ]);
        return back();
    }

    public function profileinfo()
    {
        $profile = Profiles::where('user',Auth::user()->username())->first();
        if(!$profile){
            return view('profilecreate')->with([
                'csspath' => $this->css,
                'jspath' => $this->js
            ]);
        }else{

        }
        return view('profileinfo')->with([
            'csspath' => $this->css,
            'jspath' => $this->js
        ]);
    }

    public function createprofile(Request $request)
    {
        Profiles::create([
            'user' => Auth::user()->username(),
            'fname' => $request->fname,
            'lname' => $request->lname,
            'banknumber' => $request->accountnumber,
            'bankname' => $request->bankname,
            'bankholder' => $request->accountname,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'zipcode' => $request->zipcode,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone
        ]);
        return redirect('/profileinfo');
    }
}

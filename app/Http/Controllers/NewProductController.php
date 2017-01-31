<?php

namespace App\Http\Controllers;

use Auth;
use App\Auctions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;

class NewProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // STYLES AND JS Controllers
        $this->pagename = '';
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
        return view('newproduct')->with(['csspath' => $this->css,'jspath' => $this->js,'page_name' => $this->pagename]);
    }

    public function addproduct(Request $request)
    {
        // if ($request->hasFile('file')) {
        //     echo "file found";
        // }else{
        //     echo "no file";
        // }

        $image = $request->file('file1');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/fullsize/' . $filename);


        Image::make($image->getRealPath())->resize(200, 200)->save($path);

        Auctions::create([
            'name' => $request->itemname,
            'description' => $request->itemdesc,
            'category' => $request->category,
            'bid' => $request->bid,
            'bidder' => Auth::user()->username(),
            'increment' => $request->increment,
            'date_end' => $request->dateend,
            'image1' => 'IMG_1030.jpg',
            'image2' => 'test',
            'image3' => 'test',
            'image4' => 'test'
        ]);
    }
}

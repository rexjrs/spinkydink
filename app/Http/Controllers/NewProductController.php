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
        $image = $request->file('file1');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/fullsize/' . $filename);
        Image::make($image->getRealPath())->resize(1020, 783)->save($path);


        if ($request->hasFile('file2')) {
            $image2 = $request->file('file2');
            $filename2  = time() . '2.' . $image->getClientOriginalExtension();
            $path2 = public_path('uploads/fullsize/' . $filename2);
            Image::make($image2->getRealPath())->resize(1020, 783)->save($path2);
        }else{
            $filename2 = $filename;
        }

        if ($request->hasFile('file3')) {
            $image3 = $request->file('file3');
            $filename3  = time() . '3.' . $image->getClientOriginalExtension();
            $path3 = public_path('uploads/fullsize/' . $filename3);
            Image::make($image3->getRealPath())->resize(1020, 783)->save($path3);
        }else{
            $filename3 = $filename;
        }

        if ($request->hasFile('file4')) {
            $image4 = $request->file('file4');
            $filename4  = time() . '4.' . $image->getClientOriginalExtension();
            $path4 = public_path('uploads/fullsize/' . $filename4);
            Image::make($image4->getRealPath())->resize(1020, 783)->save($path4);
        }else{
            $filename4 = $filename;
        }

        Auctions::create([
            'name' => $request->itemname,
            'user' => Auth::user()->username(),
            'description' => $request->itemdesc,
            'category' => $request->category,
            'bid' => $request->bid,
            'bidder' => 'none',
            'increment' => $request->increment,
            'date_end' => $request->date,
            'image1' => $filename,
            'image2' => $filename2,
            'image3' => $filename3,
            'image4' => $filename4
        ]);

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('created_at')->paginate(3);
        $sejarah = Sejarah::first();
        $brosur = Config::where('konfig','brosur')->first();
        // dd($sejarah);
        return view('front',compact('banners','sejarah','brosur'));
    }
   
}

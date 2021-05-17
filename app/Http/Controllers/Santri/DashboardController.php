<?php

namespace App\Http\Controllers\Santri;

use App\Http\Controllers\Controller;
use App\Models\Orangtua;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        // dd($user->santri);
        $pendidikan = Pendidikan::where('tingkat_pendidikan','perguruan_tinggi')->where('id_user',$user->id)->first();
        if($pendidikan==null){
            $pendidikan = Pendidikan::where('tingkat_pendidikan','SMA')->where('id_user',$user->id)->first();
            if($pendidikan==null){
                $pendidikan = Pendidikan::where('tingkat_pendidikan','SMP')->where('id_user',$user->id)->first();
            }
        }
        $semuapend=Pendidikan::where('id_user',$user->id)->get();
        $orangtua = Orangtua::where('id_user',$user->id)->get();

        return view('santri.newdashboard', compact('user','pendidikan','semuapend','orangtua'));
    }
}

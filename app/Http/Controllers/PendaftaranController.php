<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }
    public function add(Request $request)
    {
    //    dd($request->all());
    //    $user = new User;
    //    $user->name=$request->name;
    //    $user->email=$request->email;
    //    $user->password= Hash::make($request->nip);
    //    $user->level='santri';
    //    $user->save();
    $this->validate(request(), [
        'foto' => 'required|image|size:5120'
    ]);
    $rdm = Str::random(10);
    $image = $request->foto;
    // $filename=$image->getClientOriginalName();
    $extension=$image->getClientOriginalExtension();
    $image_resize= Image::make($image->getRealPath());
    $image_resize->resize(600, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $image_resize->save(public_path('foto/'.$rdm.'.'.$extension));
    return "Image disave";
    
    // ImageOptimizer::optimize($request->foto);
    }
}

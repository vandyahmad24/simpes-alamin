<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use App\Models\Orangtua;
use App\Models\Pendidikan;
use App\Models\Santri;
use App\Models\User;
use Carbon\Carbon;
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
        // dd($request->all());
    $this->validate(request(), [
        'foto' => 'required|image|max:51200',
        'name'=> 'required|string',
        'email'=>'required|string|email|unique:users,email',
        'nip' => 'required|string',
        'telp' => 'required|string',
        'tempat_lahir'=> 'required|string',
        'tanggal_lahir'=>'required',
        'alamat'=>'required|string',
        'anak_ke'=>'nullable|numeric',
        'ukuran_kaos'=>'nullable|string',
        'nama_lembaga'=>'nullable|string',
        'tingkat_pendidikan'=>'nullable|string',
        'nama_lembaga_sd'=>'nullable|string',
        'tingkat_pendidikan_sd'=>'nullable|string',
        'alamat_sd'=>'nullable|string',
        'nama_lembaga_smp'=>'nullable|string',
        'tingkat_pendidikan_smp'=>'nullable|string',
        'alamat_smp'=>'nullable|string',
        'nama_lembaga_sma'=>'nullable|string',
        'tingkat_pendidikan_sma'=>'nullable|string',
        'alamat_sma'=>'nullable|string',
        'nama_lembaga_pesantren'=>'nullable|string',
        'alamat_pesantren'=>'nullable|string',
        'nama_ayah'=>'required|string',
        'pekerjaan_ayah'=>'required|string',
        'nohp_ayah'=>'nullable|string',
        'nama_ibu'=>'required|string',
        'pekerjaan_ibu'=>'required|string',
        'nohp_ibu'=>'nullable|string',
        
        // ''
    ]);
    
    $rdm = Str::random(10);
    $image = $request->foto;
    // $filename=$image->getClientOriginalName();
    $extension=$image->getClientOriginalExtension();
    $image_resize= Image::make($image->getRealPath());
    $image_resize->resize(600, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $nama_file=$rdm.'.'.$extension;
    $image_resize->save(public_path('foto/'.$nama_file));

    $date = Carbon::now();
    // angkatan
    $angkatan = Angkatan::where('angkatan',$date->year)->first();
    
    $user = new User;
    $user->name=$request->name;
    $user->email=$request->email;
    $user->password= Hash::make($request->nip);
    $user->level='santri';
    $user->save();
    
    $santri = new Santri;
    $santri->tempat_lahir=$request->tempat_lahir;
    $santri->tanggal_lahir=$request->tanggal_lahir;
    $santri->tgl_masuk=$date;
    $santri->alamat=$request->alamat;
    $santri->anak_ke=$request->anak_ke;
    $santri->riwayat_penyakit=$request->riwayat_penyakit;
    $santri->ukuran_kaos=$request->ukuran_kaos;
    $santri->jenis_kelamin=$request->jenis_kelamin;
    $santri->nip=$request->nip;
    $santri->telp=$request->telp;
    $santri->pondok="pusat";
    $santri->foto=$nama_file;
    $santri->tahun_keluar=null;
    $santri->id_angkatan=$angkatan->id;
    $santri->id_user =$user->id;
    $santri->status=0;
    $santri->save();

    // pendidikan saat ini
    $pend = new Pendidikan;
    $pend->tingkat_pendidikan = $request->tingkat_pendidikan;
    $pend->nama_lembaga=$request->nama_lembaga;
    $pend->alamat=$request->alamat_pendidikan;
    $pend->id_user=$user->id;
    $pend->save();

    // sd
    $pend = new Pendidikan;
    $pend->tingkat_pendidikan = $request->tingkat_pendidikan_sd;
    $pend->nama_lembaga=$request->nama_lembaga_sd;
    $pend->alamat=$request->alamat_sd;
    $pend->id_user=$user->id;
    $pend->save();

    $pend = new Pendidikan;
    $pend->tingkat_pendidikan = $request->tingkat_pendidikan_smp;
    $pend->nama_lembaga=$request->nama_lembaga_smp;
    $pend->alamat=$request->alamat_smp;
    $pend->id_user=$user->id;
    $pend->save();

    $pend = new Pendidikan;
    $pend->tingkat_pendidikan = $request->tingkat_pendidikan_sma;
    $pend->nama_lembaga=$request->nama_lembaga_sma;
    $pend->alamat=$request->alamat_sma;
    $pend->id_user=$user->id;
    $pend->save();
    // pesantren
    $pend = new Pendidikan;
    $pend->tingkat_pendidikan = "pesantren";
    $pend->nama_lembaga=$request->nama_lembaga_pesantren;
    $pend->alamat=$request->alamat_pesantren;
    $pend->id_user=$user->id;
    $pend->save();

    // orang tua
    $ortu = new Orangtua;
    $ortu->nama=$request->nama_ayah;
    $ortu->pekerjaan=$request->pekerjaan_ayah;
    $ortu->no_hp=$request->nohp_ayah;
    $ortu->jk="laki-laki";
    $ortu->id_user=$user->id;
    $ortu->save();
    
    $ortu = new Orangtua;
    $ortu->nama=$request->nama_ibu;
    $ortu->pekerjaan=$request->pekerjaan_ibu;
    $ortu->no_hp=$request->nohp_ibu;
    $ortu->jk="perempuan";
    $ortu->id_user=$user->id;
    $ortu->save();


    return redirect()->route('login')->with('status', 'Selamat Anda Berhasil Mendaftar Menjadi Calon Santri Al Amin, Login dengan email dan password dengan NIP anda');
    
    }
}

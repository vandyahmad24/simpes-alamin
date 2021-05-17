@extends('layouts.newadmin')
@section('title','Halaman Dashboard Santri')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body h-100">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <p class="mb-2">
                                    <strong>
                                    @if($user->santri->status==0)
                                        Status Anda Saat Ini Adalah Calon Santri, Silahkan Untuk Melakukan Pembayaran, Dengan Klik <a href="" class="btn btn-danger">Pembayaran</a>
                                    @else
                                        Data Santri
                                    @endif
                                    </strong>
                                </p>
                            </div>
                        </div>
                       <div class="row">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                      <th>Nama</th>
                                      <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                      <th>Email</th>
                                      <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                      <th>NIP</th>
                                      <td>{{$user->santri->nip}}</td>
                                    </tr>
                                    <tr>
                                      <th>Tempat, Tanggal Lahir</th>
                                      <td>{{$user->santri->tempat_lahir}}, {{ \Carbon\Carbon::parse($user->santri->tanggal_lahir)->format('d-m-Y')}}</td>
                                    </tr>
                                    <tr>
                                      <th>Alamat</th>
                                      <td>{{$user->santri->alamat}}</td>
                                    </tr>
                                    <tr>
                                      <th>Telp</th>
                                      <td>{{$user->santri->telp}}</td>
                                    </tr>
                                    <tr>
                                      <th>Pondok</th>
                                      <td>{{$user->santri->pondok}}</td>
                                    </tr>
                                    <tr>
                                      <th>Ukuran Kaos</th>
                                      <td>{{$user->santri->ukuran_kaos}}</td>
                                    </tr>
                                    <tr>
                                      <th>Riwayat Penyakit</th>
                                      <td>{{$user->santri->riwayat_penyakit}}</td>
                                    </tr>
                                    <tr>
                                      <th>Pendidikan</th>
                                    </tr>
                                    <tr>
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                <th>Tingkat Pendidikan</th>
                                                <th>Nama Lembaga</th>
                                                <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($semuapend as $pen)
                                                <tr>
                                                    <td>{{$pen->tingkat_pendidikan}}</td>
                                                    <td>{{$pen->nama_lembaga ?: "-"}}</td>
                                                    <td>{{$pen->alamat ?: "-"}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </tr>
                                    <tr>
                                        <th>Data Orang Tua</th>
                                      </tr>
                                      <tr>
                                          <table class="table table-borderless">
                                              <thead>
                                                  <tr>
                                                  <th>Ayah/Ibu</th>
                                                  <th>Nama</th>
                                                  <th>Pekerjaan</th>
                                                  <th>No Hp</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  @foreach ($orangtua as $o)
                                                  <tr>
                                                      <td>{{$o->jk=="laki-laki" ? "Ayah":"Ibu"}}</td>
                                                      <td>{{$o->nama}}</td>
                                                      <td>{{$o->pekerjaan}}</td>
                                                      <td>{{$o->no_hp ?: "-"}}</td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </tr>
                                  </tbody>
                              </table>
                              <span class="text-danger">Jika terdapat kesalahan pada pengisian anda dapat menghubungi admin untuk memperbarui data</span>
                          </div>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center">
                            <a onclick="window.open('{{asset('foto')}}/{{$user->santri->foto ?: 'default.png'}}', '_blank');">
                                <img src="{{asset('foto')}}/{{$user->santri->foto ?: "default.png"}}"  class="img-fluid rounded-circle mb-2"
                                width="128" height="128">
                              </a>
                        <h4 class="card-title mb-0"> {{$user->name}}<span class="font-weight-light">, {{$user->santri->status ==0 ? "Calon Santri":$user->santri->pondok}}</h4>
                        <div class="text-muted mb-2">Tanggal Daftar Pondok, {{ \Carbon\Carbon::parse($user->santri->tanggal_masuk)->format('d-m-Y')}}</div>
                        <div class="text-muted mb-2">
                            <i class="ni business_briefcase-24 mr-2"></i>{{strtoupper($pendidikan->nama_lembaga) ?: "Santri"}}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</main>
@endsection
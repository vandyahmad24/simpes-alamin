@extends('layouts.admin')
@section('title','Pendaftar Santri Baru')
@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pendaftaran Santri</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('root')}}"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('root')}}">Kembali</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="col-xl-12 order-xl-1">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <div class="card">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Biodata Calon Santri </h3>
          </div>
          <div class="col-4 text-right">
          <button type="button" onclick="alert('Jika anda memiliki pertanyaan silahkan wa/telp ke {{$telp}}')" class="btn btn-sm btn-primary">Bantuan</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form method="POST" action="{{route('add-daftar-online')}}" enctype="multipart/form-data">
          @csrf
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Nama Lengkap <span class="text-danger">*</span> </label>
                  <input type="text" id="input-username" class="form-control"  placeholder="Fulan" name="name" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Alamat Email <span class="text-danger">*</span> </label>
                  <input type="email" id="input-email" class="form-control" placeholder="fulan@gmail.com" name="email" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-nip">NIP<span class="text-danger">*</span> </label>
                  <input type="text" id="input-nip" class="form-control" name="nip" placeholder="Nomer KTP/NIP" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-telp">No Telp/WA<span class="text-danger">*</span> </label>
                  <input type="text" id="input-telp" class="form-control" placeholder="08xxxxxx" name="telp" required>
                  <small>Gunakan Format Penulisan 08xxxxxx</small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-tempat-lahir">Tempat Lahir <span class="text-danger">*</span> </label>
                  <input type="text" id="input-tempat-lahir" class="form-control" placeholder="Tempat Lahir" required name="tempat_lahir">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir <span class="text-danger">*</span> </label>
                  <input type="date" id="input-tanggal-lahir" class="form-control" name="tanggal_lahir" required>
                </div>
              </div>
              <div class="col-lg-12">
                  <div class="form-group">
                      <label class="form-control-label">Alamat Lengkap <span class="text-danger">*</span></label>
                      <textarea rows="4" class="form-control"
                          placeholder="Nama Jalan/RT/RW/Kabupaten/Provinsi" name="alamat" required></textarea>
                      <small><b> Nama Jalan/RT/RW/Kabupaten/Provinsi</b></small>
                  </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-foto">Upload Foto <span class="text-danger">*</span> </label>
                  <input type="file" id="input-foto" class="form-control" name="foto" required>
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4">
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">Informasi Santri</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-anak">Anak ke- </label>
                  <input type="text" id="input-anak" class="form-control" placeholder="1/2/3/dst" name="anak_ke">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-riwayat">Riwayat Penyakit </label>
                  <input type="text" id="input-riwayat" class="form-control" placeholder="Riwayat Penyakit" name="riwayat_penyakit">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-kaos">Ukuran Kaos</label>
                  <select class="form-control" id="input-kaos" name="ukuran_kaos">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                  <select class="form-control" id="input-jk" name="jenis_kelamin">
                    <option value="putra">Putra</option>
                    <option value="putri">Putri</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <hr class="my-4">
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">Informasi Pendidikan Santri</h6>
          <div class="pl-lg-12">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-anak">Sekolah Saat Ini </label>
                  <input type="text" id="input-anak" class="form-control" placeholder="IAIN/UNSOED" name="nama_lembaga">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-riwayat">Tingkat Pendidikan </label>
                  <select class="form-control" id="input-kaos" name="tingkat_pendidikan">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="perguraun_tinggi">Perguruan Tinggi</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-anak">Alamat </label>
                  <input type="text" id="input-anak" class="form-control" placeholder="Alamat Sekolah" name="alamat">
                </div>
              </div>
            </div>
            <h6 class="heading-small text-muted mb-4">Riwayat Pendidikan Santri <span class="text-danger"><b>Kosongkan yang tidak perlu</b></span></h6>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-sd">SD/MI</label>
                  <input type="text" id="input-sd" class="form-control" placeholder="SD" name="nama_lembaga_sd">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-pendidikan">Tingkat Pendidikan </label>
                  <select class="form-control" id="input-pendidikan" name="tingkat_pendidikan_sd">
                    <option value="SD">SD/MI</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-sd">Alamat SD/MI</label>
                  <input type="text" id="input-sd" class="form-control" placeholder="Alamat Sekolah" name="alamat_sd">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-smp">SMP/MTS</label>
                  <input type="text" id="input-smp" class="form-control" placeholder="SMP" name="nama_lembaga_smp">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-pendidikan">Tingkat Pendidikan </label>
                  <select class="form-control" id="input-pendidikan" name="tingkat_pendidikan_smp">
                    <option value="SMP">SMP/MTS</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-smp">Alamat SMP/MTS</label>
                  <input type="text" id="input-smp" class="form-control" placeholder="Alamat Sekolah" name="alamat_smp">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-sma">SMA/MA</label>
                  <input type="text" id="input-sma" class="form-control" placeholder="sma" name="nama_lembaga_sma">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-pendidikan">Tingkat Pendidikan </label>
                  <select class="form-control" id="input-pendidikan" name="tingkat_pendidikan_sma">
                    <option value="sma">SMA/MA</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-sma">Alamat SMA/MA</label>
                  <input type="text" id="input-sma" class="form-control" placeholder="Alamat Sekolah" name="alamat_sma">
                </div>
              </div>
            </div>
            {{-- Pesantren --}}
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-sma">Pesantren</label>
                  <input type="text" id="input-sma" class="form-control" placeholder="Ponpes Al Amin" name="nama_lembaga_pesantren">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-pesantren">Alamat Pesantren</label>
                  <input type="text" id="input-pesantren" class="form-control" placeholder="Alamat Sekolah" name="alamat_pesantren">
                </div>
              </div>
            </div>

         
            
          </div>
         
        

        {{-- orang tua --}}
        <hr class="my-4">
          <h6 class="heading-small text-muted mb-4">Data Orang Tua Santri</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-ayah">Nama Ayah <span class="text-danger">*</span></label>
                  <input type="text" id="input-ayah" class="form-control" placeholder="Nama Ayah" name="nama_ayah" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-pekerjaan-ayah"> Pekerjaan Ayah <span class="text-danger">*</span></label>
                  <input type="text" id="input-pekerjaan-ayah" class="form-control" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-nohp-ayah">No Hp/Wa Ayah</label>
                  <input type="text" id="input-nohp-ayah" class="form-control" placeholder="nohp Ayah" name="nohp_ayah">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-ibu">Nama Ibu <span class="text-danger">*</span></label>
                  <input type="text" id="input-ibu" class="form-control" placeholder="Nama ibu" name="nama_ibu" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-pekerjaan-ibu"> Pekerjaan Ibu <span class="text-danger">*</span></label>
                  <input type="text" id="input-pekerjaan-ibu" class="form-control" placeholder="Pekerjaan ibu" name="pekerjaan_ibu" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-nohp-ibu">No Hp/Wa Ibu</label>
                  <input type="text" id="input-nohp-ibu" class="form-control" placeholder="nohp ibu" name="nohp_ibu">
                </div>
              </div>
            </div>
             <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
         
         
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
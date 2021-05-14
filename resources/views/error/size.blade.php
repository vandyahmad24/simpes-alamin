@extends('layouts.admin')
@section('title','Pendaftar Santri Baru')
@section('content')

<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="col-xl-12 order-xl-1">
    <div class="card">
      <div class="card-body">
          <div class="row">
            <div class="container">
                <center>
                <img src="{{asset('admin/assets/img/error.png')}}" class="img-fluid" alt="">
                <h3>Ups. Data yang kamu upload berukuran terlalu besar <br> <a href="{{ URL::previous() }}">Kembali ke halaman sebelumnya</a></h3>
                </center>
            </div>
          </div>
       
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layouts.front')

@section('content')
  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php $i=1; foreach ($banners as $banner) {  ?>
            <img src="front/img/slider/<?= $banner->photo?>" alt="" title="#slider-direction-<?=$i?>" />
        <?php $i++; } ?>    
      </div>

      <!-- direction 1 -->
        @php
            $i=1;
        @endphp
      @foreach ($banners as $banner)
     
      <div id="slider-direction-{{$i}}" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">{{$banner->title}}</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title2">{{$banner->subtitle}}</h1>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>
        @php
            $i++;
        @endphp
      @endforeach

    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="sejarah" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Sejarah</h2>
            </div>
          </div>
        </div>
        <div class="row" style="text-align: center;">
          <!-- single-well end-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">{{$sejarah->title}}</h4>
                </a>
                {!!$sejarah->isi!!}
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
        <div class="row" style="text-align: center;">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="well-left">
                  <div class="single-well">
                    <a href="#">
                      <img src="{{asset('front/img/ayo-mondok.png')}}" alt="">
                    </a>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div><!-- End About Section -->
    {{-- browsur --}}
    <div id="pendaftaran" class="about-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Pendaftaran Santri 2021</h2>
              </div>
            </div>
          </div>
          <div class="row" style="text-align: center;">
            <!-- single-well end-->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="well-middle">
                <div class="single-well">
                  <img src="{{asset('front/img/browsur')}}/{{$brosur->isi}}" loading="lazy" />
                    <div class="d-flex flex-row justify-content-center">
                    <form method="get" action="{{asset('front/img/browsur')}}/{{$brosur->isi}}">
                      <button class="btn btn-success btn-lg mt-5" type="submit">Download Brosur</button>
                    </form>
                    <a href="{{route('daftar-online')}}" class="btn btn-primary btn-lg mt-5 ml-5">Daftar Online</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End col-->
          </div>
         
        </div>
      </div>

    {{-- browsur --}}

   <!-- Start visi area -->
  <div id="visi" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Visi dan Misi</h2>
          </div>
        </div>
      </div>
      <div class="row">
       
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <center>
                 <a href="#">
                <h4 class="sec-head">VISI</h4>
              </a>
             
              <ul>
                <li>
                 Mendidik dan mencetak generasi masa depan yang berjiwa ikhlas dan barokah dalam berjuang di jalan Islam.
                </li>
              
                <br>

              <a href="#">
                <h4 class="sec-head">MISI</h4>
              </a>
             
              <ul>
                <li>
                  <i class="fa fa-check"></i> Mengembangkan dan memajukan Pondok Pesantren Al Amin secara luas di masa mendatang dengan keikhlasan kepada Allah SWT.
                </li>
                <li>
                  <i class="fa fa-check"></i> Mengabdikan segenap potensi bagi seluruh umat manusia secara keseluruhan dan memberikan manfaat bagi diri, keluarga dan masyarakat serta bagi Negara Indonesia tercinta
                </li>
             
              </ul>
              </center>

            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End visi area -->

    {{-- <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Artikel Al Amin</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog.html">
                      <img src="{{asset('front/img/blog/1.jpg')}}" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      <a href="#">13 comments</a>
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="blog.html">Assumenda repud eum veniam</a>
                    </h4>
                    <p>
                      Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                    </p>
                  </div>
                  <span>
                    <a href="blog.html" class="ready-btn">Read more</a>
                  </span>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
            </div>
          </div>
        </div>
      </div><!-- End Blog Section -->


    <!-- ======= Team Section ======= --> --}}
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Al Amin Group</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{asset('front/img/team/tpq.png')}}" alt="tpq al amin" loading="lazy">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                    <li>
                      <a href="https://instagram.com/tpq_alaminpabuaran">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>TPQ AL AMIN</h4>
                <p>Pendidikan Anak</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{asset('front/img/team/kominfo.png')}}" alt="kominfo al amin" loading="lazy">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/ppqalaminpabuwaran">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Kominfo Al Amin</h4>
                <p>Media Pesantren</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{asset('front/img/team/fm.png')}}" alt="Fajrul Mujtaba" loading="lazy">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/fajrul_mujtaba">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Fajrul Mujtaba</h4>
                <p>Grup Hadroh Putra</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{asset('front/img/team/am.png')}}" alt="Asyiqol Musthofa" loading="lazy">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/asyiqol.musthofa">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Asyiqol Musthofa</h4>
                <p>Group Hadroh Putri</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <!-- End column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="{{asset('front/img/team/madin.png')}}" alt="Madin Al Amin" loading="lazy">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Madin Al Amin</h4>
                <p>Madrasah Diniyah</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->
    <!-- ======= Portfolio Section ======= -->
    {{-- matikan dulu  --}}
    {{-- <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kegiatan Terbaru</h2>
            </div>
          </div>
        </div>

        <div class="row awesome-project-content">
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="{{asset('front/img/portfolio/1.jpg')}}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{asset('front/img/portfolio/1.jpg')}}">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
    </div><!-- End Portfolio Section --> --}}
    {{-- end matikan dulu --}}

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Kontak Pesantren</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>
                    Telepon/Wa: {{$telp}}<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    Email: {{$email}}<br>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>
                    Jalan H.R Boenyamin Gg Gunung Sumbing No 13. A Pabuaran Purwokerto Utara<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.6336944598524!2d109.24340291428041!3d-7.394877894664315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f02b6e83edd%3A0xff48263aba30a290!2sPPQ%20AL%20AMIN%20PABUWARAN!5e0!3m2!1sid!2sid!4v1619895420028!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

           
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
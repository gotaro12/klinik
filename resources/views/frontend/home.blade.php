@extends('template.master')

@section('content')
       
<section id="home-slider">
    <div class="container">
        <div class="row">
            <div class="main-slider" style="top:-50px">
                <div class="slide-text" style="top:30px">
                    <h1>Brebes Care</h1>
                    <p>Brebes Care adalah Klinik Layanan Bantuan Hukum sebagai Perwujudan Perlindungan Hukum bagi Aparatur Sipil Negara (ASN) di Kabupaten Brebes. Tujuan dari pembentukan Brebes Care adalah sebagai sarana pemberian layanan bantuan hukum litigasi dan non litigasi kepada Aparatur Sipil Negara di Kabupaten Brebes. Layanan Bantuan Hukum Litigasi meliputi penanganan Perkara Tata Usaha Negara dan Perkara Perdata yang berkaitan dengan perselisihan tugas kedinasan. Sedangkan Layanan Bantuan Hukum Non Litigasi meliputi Konsultasi Hukum.</p>
                    <p>Sekarang ini, Brebes Care juga melayani bantuan hukum nonlitigasi berupa Konsultasi Hukum bagi Masyarakat. <a href="https://jdih.brebeskab.go.id/umum">Klik disini</a> untuk memulai konsultasi</p>
                    <!--<a href="https://jdih.Brebeskab.go.id/event" class="btn btn-common">Selengkapnya</a>-->
                </div>
                <img src="{{asset('assets/image/brebes.jpg')}}" class="slider-hill" alt="slider image">
                <!-- <img src="https://jdih.Brebeskab.go.id/images/suko.png" class="slider-sun" alt="slider image">
                <img src="https://jdih.Brebeskab.go.id/images/jdih.jpg" class="slider-birds3" alt="slider image"> -->
                {{-- <img src="https://jdih.sukoharg.go.id/images/person1.png" class="slider-birds1" alt="slider image"> --}}
                <!-- <img src="https://jdih.Brebeskab.go.id/images/slamet riyadi.png" class="slider-birds2" alt="slider image"> -->
            </div>
        </div>
    </div>
    <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->

<section id="action" class="responsive">
    <div class="vertical-center">
         <div class="container">
            <div class="row">
                <div class="action take-tour">
                    <div class="col-sm-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">Alur Brebes Care</h1>
                        <p>Alur dan tata cara pemberian layanan bantuan hukum bagi ASN di Kabupaten Brebes dapat Anda klik pada menu bar <a href="https://jdih.brebeskab.go.id/care/alur">Alur Klinik Bantuan Hukum.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
                <div class="single-service">
                    <div class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 300ms; animation-name: scaleIn;">
                        <img src="{{asset('assets/image/komitmen.jpg')}}" alt="">
                    </div>
                    <h2><font style="font-size:50px"><b>C</b></font>ommitment</h2>
                    <p>Komitmen</p>
                </div>
            </div>
            <div class="col-sm-3 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;">
                <div class="single-service">
                    <div class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 600ms; animation-name: scaleIn;">
                        <img src="{{asset('assets/image/accountable.png')}}" alt="">
                    </div>
                    <h2><font style="font-size:50px"><b>A</b></font>ccountable</h2>
                    <p>Bertanggung Jawab</p>
                </div>
            </div>
            <div class="col-sm-3 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
                <div class="single-service">
                    <div class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 900ms; animation-name: scaleIn;">
                        <img src="{{asset('assets/image/responsive.png')}}" alt="">
                    </div>
                    <h2><font style="font-size:50px"><b>R</b></font>esponsive</h2>
                    <p>Mau Mendengarkan dan Memberikan Respon dengan Cepat</p>
                </div>
            </div>
            <div class="col-sm-3 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
                <div class="single-service">
                    <div class="wow scaleIn animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 900ms; animation-name: scaleIn;">
                        <img src="{{asset('assets/image/emphaty.jpg')}}" alt="">
                    </div>
                    <h2><font style="font-size:50px"><b>E</b></font>mpathy</h2>
                    <p>Empati</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <p><img src="{{asset('assets/image/clients.png')}}" class="img-responsive" alt=""></p>
                    <h1 class="title">Layanan kami</h1>
                    <p>Admin akan menjawab setiap pertanyaan melalui jalur yang tersedia dan/atau melalui email. Semoga layanan ini bermanfaat bagi kita semua. </p>
                </div>
                <div class="clients-logo text-center wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-price price-one">
                            <div class="table-heading">
                                <p class="plan-name">Litigasi</p>
                                <p class="plan-price"></p>
                            </div>
                            <ul>                            
                                <li>Penanganan Perkara Tata Usaha Negara<span><i class="fa fa-check"></i></span></li>
                                <li>Penanganan Perkara Perdata<span><i class="fa fa-check"></i></span></li>
                                <li>Berkaitan dengan Perselisihan Tugas Kedinasan</li>
                            </ul>
                            <a href="https://jdih.Brebeskab.go.id/care/konsultasi/litigasi" class="btn btn-buynow">SELENGKAPNYA</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-price price-two">
                            <div class="table-heading">
                                <p class="plan-name">Non Litigasi</p>
                                <p class="plan-price"></p>
                            </div>
                            <ul>                            
                                <li>Konsultasi Hukum<span><i class="fa fa-check"></i></span></li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                            </ul>
                            <a href="https://jdih.Brebeskab.go.id/care/konsultasi" class="btn btn-buynow">SELENGKAPNYA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection
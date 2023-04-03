@extends('template.master')
@section('content')
    
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Konsultasi</h1>
                        <p>Ayo konsultasi hukum bersama untuk menciptakan Brebes yang adil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->
    <!--/#flash-->

<section id="company-information" class="choose">
<div class="container">
    <div class="row">
        <div style="top:-50px">
            <div style="top:30px">
                <br />
                <h2><b>Layanan Konsultasi Hukum</b></h2>
                <p>Konsultasi Hukum berlaku sesuai dengan syarat dan ketentuan yang berlaku, bagi masyarakat yang ingin menggunakan
                    Layanan Konsultasi Hukum mohon memperhatikan hal-hal dibawah ini :</p>
                <p>
                    <table class="table" style=" border:hidden;width:90%">
                        <tbody>
                            <tr style="border:hidden;">
                                <td width="2%">1.</td>
                                <td>Pelayanan Konsultasi Hukum hanya dikhususkan bagi warga masyarakat yang berdomisili di Kabupaten Brebes yang ditunjukan dengan upload KTP, SIM atau passport.</td>
                            </tr>
                            <tr style="border:hidden;">
                                <td>2.</td>
                                <td>Pelayanan Konsultasi Hukum ini diberikan dalam bentuk konsultasi, pendapat dan informasi secara tertulis di bidang hukum.</td>
                            </tr>
                            <tr style="border:hidden;">
                                <td>3.</td>
                                <td>Pelayanan Konsultasi Hukum terbatas pada permasalahan Perdata dan Tata Usaha Negara.</td>
                            </tr>
                            <tr style="border:hidden;">
                                <td>4.</td>
                                <td>Harap isi data Anda dengan sebenar-benarnya.</td>
                            </tr>
                            <tr style="border:hidden;">
                                <td>5.</td>
                                <td>Pelayanan/jawaban diberikan pada saat hari kerja yaitu Senin s/d Jum'at jam 08.00 WIB s/d 15.30 WIB.</td>
                            </tr>
                            <tr style="border:hidden;">
                                <td>6.</td>
                                <td>Apabila tidak memenuhi syarat, maka Layanan Konsultasi Hukum tidak dapat diberikan.</td>
                            </tr>
                        </tbody>
                    </table>
                </p>
            </div>
            
            <form action="{{route('konsul.store')}}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                <div class="form-group row">
                    <label class="control-label" for="nama">NAMA LENGKAP <font color="red"><b>*</b>(unpublished)</font> </label>
                    <input type="text" class="form-control" name="fullname" id="nama" placeholder="Masukkan Nama Lengkap" value="">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="panggilan">NAMA PANGGILAN <font color="red"><b>*</b></font> </label>
                    <input type="text" class="form-control" name="name" id="panggilan" placeholder="Masukkan Nama Panggilan" value="">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="username">JENIS KELAMIN <font color="red"><b>*</b></font> </label>
                    <select class="form-control" id="jk" name="jenis_kelamin">
                        <option value="L"  >Laki-Laki</option>
                        <option value="P"  >Perempuan</option>
                    </select>
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="email">EMAIL <font color="red"><b>*</b></font> </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Alamat Email" value="">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="telepon">NOMOR TELEPON/HP <font color="red"><b>*</b></font> </label>
                    <input type="number" class="form-control" name="no_hp" id="telepon" placeholder="Masukkan Nomor Telepon" value="">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="alamat">ALAMAT LENGKAP <font color="red"><b>*</b></font> </label>
                    <input type="text" class="form-control" name="address" id="alamat" placeholder="Masukkan Alamat Lengkap" value="">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="uraian">URAIAN KONSULTASI <font color="red"><b>*</b></font> </label>
                    <textarea class="form-control textarea" name="konsul" id="uraian" placeholder="Masukkan Uraian Konsultasi"></textarea>
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="identitas">IDENTITAS KTP/SIM/PASSPORT <font color="red"><b>*</b></font> </label>
                    <input type="file" class="form-control" name="ktp" id="identitas">
                    <font color="red"> </font>
                </div>
                <div class="form-group row">
                    <label class="control-label" for="lampiran">LAMPIRAN PENDUKUNG</label>
                    <input type="file" class="form-control" name="lampiran" id="lampiran">
                </div>
                <div class="form-group row">
                    <label class="control-label" for="status">STATUS <font color="red"><b>*</b></font> </label>
                    <select class="form-control" id="status" name="status">
                        <option value="PUBLISHED"  >PUBLISHED</option>
                        <option value="UNPUBLISHED"  >UNPUBLISHED</option>
                    </select>					</div>
                <div class="form-group text-center"> 
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
@endsection
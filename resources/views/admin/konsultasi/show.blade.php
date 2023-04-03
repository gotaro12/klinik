@extends('admin.master')
@section('content')
<div class="container" style="padding:30px">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Konsultasi </h5>
            <p class="text-md-start">Nama Lengkap   : {{$konsul->fullname}}.</p>
            <p class="text-md-start">Nama Panggilan : {{$konsul->name}}.</p>
            <p class="text-md-start">Jenis Kelamin  : {{$konsul->jenis_kelamin}}.</p>
            <p class="text-md-start">Email : {{$konsul->email}}.</p>
            <p class="text-md-start">No HP : {{$konsul->no_hp}}.</p>
            <p class="text-md-start">Alamat : {{$konsul->address}}.</p>
            <p class="text-md-start">Konsultasi : {{$konsul->konsul}}.</p>
            <p class="text-md-start">Identitas : <img style="width:150px" src="{{asset('dokumen/'.$konsul->ktp)}}" alt=""></p>
            <p class="text-md-start">Lampiran : <img style="width:150px" src="{{asset('dokumen/'.$konsul->lampiran)}}" alt=""></p>
        </div>
      </div><br>
      <a href="{{route('konsultasi.index')}}" class="btn btn-primary">Back</a>
</div>
@endsection
@extends('admin.master')

@section('content')
    <div class="containter" style="margin:10px">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{route('surat.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul" id="">
                </div>
                <div class="form-group">
                    <label for="">File</label>
                    <input type="file" class="form-control" name="file" id="">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection
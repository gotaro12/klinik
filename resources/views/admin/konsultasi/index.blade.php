@extends('admin.master')
@section('content')
<div class="container">
    <br>
    {{-- <a href="{{route('surat.create')}}" class="btn btn-primary">Add Surat</a> --}}
    <br>
    <br>
    <table class="table table-striped data-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
  </div>

  @push('script')
  <script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('konsultasi.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'fullname', name: 'fullname'},
              {data: 'jenis_kelamin', name: 'jenis_kelamin'},
              {data: 'email', name: 'email'},
              {data: 'address', name: 'address'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
  </script>
  @endpush
@endsection
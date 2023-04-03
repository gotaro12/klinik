@extends('admin.master')
@section('content')
<div class="container">
    <br>
    <a href="{{route('surat.create')}}" class="btn btn-primary">Add Surat</a>
    <br>
    <br>
    <table class="table table-striped data-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
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
          ajax: "{{ route('surat.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'judul', name: 'judul'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
  </script>
  @endpush
@endsection
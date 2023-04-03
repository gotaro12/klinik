@extends('template.master')

@section('content')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Contoh surat</h1>
                        <p>Berikut adalah beberapa contoh surat tentang Bantuan Hukum yang dapat Anda download</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <table class="table table-striped data-table">
        <thead>
          <tr>
            <th scope="col">No</th>
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
          ajax: "{{ route('surat') }}",
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
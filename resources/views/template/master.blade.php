
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Klinik Hukum Online Kabupaten Brebes">
    <meta name="author" content="Brebes Kab.">
    <meta name="robots" content="index, follow">    
    <title>Klinik Hukum Online | Brebes Care</title>
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css')}}" rel="stylesheet"> 
    <link href="{{ asset('/assets/css/lightbox.css')}}" rel="stylesheet"> 
	<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style>
    input[type=checkbox] {
  transform: scale(2);
}
</style>
</head><!--/head-->

<body>
   @include('template.header')
    <!--/#header-->

	

    
        <!--/#flash-->
 @yield('content')
    <!--/#clients-->
     @include('template.footer')
    
    <!--/#footer-->

    {{-- <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>  
    @stack('script')
    @include('sweetalert::alert')	
    
</body>
</html>
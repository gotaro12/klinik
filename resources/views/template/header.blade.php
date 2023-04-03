<header id="header">      
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
               <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div> 
            </div>
         </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="">
                    <h1><img style="width: 60%" src="https://jdih.brebeskab.go.id/tpl/eb/assets/img/logo.png" alt="logo"></h1>
                </a>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://jdih.brebeskab.go.id/care">Home</a></li>
                    <li><a href="{{route('alur')}}">Alur</a></li>
                    <li><a href="{{route('surat')}}">Contoh Surat</a></li>         
                        <li class="dropdown">
                            <a href="#">Konsultasi <i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{route('konsul')}}">ASN Brebes</a></li>
                                        <li><a href="{{route('umum')}}">Umum</a></li>
                                    </ul>
                                </li>
                               <li><a href="#footer">Kontak</a></li>
                                        
                </ul>
            </div>
        </div>
    </div>
</header>
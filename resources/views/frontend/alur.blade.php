@extends('template.master')

@section('content')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
         <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Alur</h1>
                        <p>Beberapa alur penggunaan aplikasi</p>
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
        <div id="accordion-container">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                Alur Bantuan Hukum Non Litigasi
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <img src="{{asset('assets/image/alurnon.jpg')}}" style="width:100%">
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                Alur Bantuan Hukum Litigasi
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">
                            <img src="{{asset ('assets/image/alur.jpg')}}" style="width:100%">
                        </div>
                    </div>
                </div>
            </div><!--/#accordion-->
        </div>
    </div>
</section>
@endsection
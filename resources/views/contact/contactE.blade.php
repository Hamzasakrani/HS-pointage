@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')
    <section class="content-header">
        <h1>
            les contacts envoy&eacute;s
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gestion contact</a></li>
            <li class="active">contact envoy&eacute;s</li>
        </ol>
    </section><br>
    <div class="row">

        <div class="col-xs-12">

            <div class="box">

                <div class="box-header">

                    <form class="form-horizontal">
                        <center><h3 style="padding:5px; background-color:#10C1F5  ; border:2px solid #1075F5  ; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">Avis</h3>  </center>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead><tr>
                                    <th>a</th>
                                    <th>theme</th>
                                    <th>commentaire</th>
                                    <th>concern&eacute;</th>

                                </tr>
                                </thead>
                                <tr> @foreach($aviEs as $aviE)
                                        <td>{{$aviE->respteur}}</td>
                                        <td>{{$aviE->theme}}</td>
                                        <td>{{$aviE->commantaire}}</td>
                                        <td>{{$aviE->conserne}}</td>




                                        </td>

                                </tr>@endforeach
                            </table>
                        </div>


            <div class="box">

                <div class="box-header">

                    <form class="form-horizontal">
                        <center><h3  style="padding:5px; background-color:#ffaca3; border:2px solid #ff3924; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">demande</h3></center>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead><tr>
                                    <th>a</th>
                                    <th>theme</th>
                                    <th>commentaire</th>
                                    <th>concern&eacute;</th>

                                </tr>
                                </thead>
                                <tr> @foreach($contactEs as $contactE)
                                        <td>{{$contactE->respteur}}</td>
                                        <td>{{$contactE->theme}}</td>
                                        <td>{{$contactE->commantaire}}</td>
                                        <td>{{$contactE->conserne}}</td>




                                        </td>


                                </tr>@endforeach
                            </table>
                        </div>

                </div>
            </div>
    </div>









    <!-- The Modal -->

    </div>
    </div>
    </div>
    </div>
    <script src="jquery.js"></script>

@stop
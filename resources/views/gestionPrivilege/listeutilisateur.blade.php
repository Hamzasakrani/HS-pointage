@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')
    <section class="content-header">
        <h1>
            liste utilisateur
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gestion Privilege</a></li>
            <li class="active">liste utilisateur </li>
        </ol>
    </section><br>
    <div class="row">

        <div class="col-xs-12">

            <div class="box">

                <div class="box-header">

                    <form class="form-horizontal">
                        <div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search for all.." aria-controls="example1"></label></div>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead><tr>
                                    <th>matricule </th>
                                    <th>login</th>
                                    <th>profil</th>
                                    <th>ajouter par</th>

                                </tr>
                                </thead>
                                <tr> @foreach($utilisaters as $utilisater)
                                        <td>{{$utilisater->matricule}}</td>
                                        <td>{{$utilisater->email}}</td>
                                        <td>{{$utilisater->profil}}</td>
                                        <td>{{$utilisater->ajouterpar}}</td>






                        </div>
                </div>
            </div>



            </td>

            </tr>@endforeach
            </table>
        </div>

        </form>


        <!-- The Modal -->

    </div>
    </div>
    </div>
    </div>
    <script src="jquery.js"></script>

@stop
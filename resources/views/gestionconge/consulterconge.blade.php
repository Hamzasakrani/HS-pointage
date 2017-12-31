@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')
    <section class="content-header">
        <h1>
            Gestion cong&eacute;es
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gestion Horaire</a></li>
            <li class="active">cong&eacute; </li>
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
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Matricule</th>
                                    <th>Boutique</th>
                                    <th>theme</th>
                                    <th>date debut</th>
                                    <th>date fin</th>

                                </tr>
                                </thead>
                                <tr> @foreach($ems as $em)
                                        <td>{{$em->nom}}</td>
                                        <td>{{$em->prenom}}</td>
                                        <td>{{$em->matricule}}</td>
                                        <td>{{$em->nom_b}}</td>
                                        <td>{{$em->type}}</td>
                                        <td>{{$em->date_debut}}</td>
                                        <td>{{$em->date_fin}}</td>




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
    <script>
        $(function() {
            // Insérer le code jQuery ici
        });
    </script>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                td1 = tr[i].getElementsByTagName("td")[1];
                td2 = tr[i].getElementsByTagName("td")[2];
                td3 = tr[i].getElementsByTagName("td")[3];

                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1||td1.innerHTML.toUpperCase().indexOf(filter) > -1||td2.innerHTML.toUpperCase().indexOf(filter) > -1||td3.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }

            }
        }</script>
@stop
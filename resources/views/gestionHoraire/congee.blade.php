@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
          Demandes  en attente
         <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">congé </li>
      </ol>
    </section><br>
    <div class="row">

        <div class="col-xs-12">

          <div class="box">



    <form class="form-horizontal">
     <div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="chercher.." aria-controls="example1"></label></div>
    <div class="box-body">
      <table class="table table-bordered table-hover" id="myTable">
       <thead><tr>
       <th>Nom</th>
           <th>Prenom</th>
           <th>Matricule</th>
           <th>Boutique</th>
           <th></th>
           
       </tr>
       </thead>
       <tr> @foreach($ems as $em)
       <td>{{$em->nom}}</td>
       <td>{{$em->prenom}}</td>
       <td>{{$em->matricule}}</td>
       <td>{{$em->nom_b}}</td>
        <td><button type="button" name="mod" class="btn btn-success" data-toggle="modal" data-target="#myModal{{$em->id_e}}"><i class="fa fa-plus "></i></button>
        
               

  <!-- Modal content -->
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal{{$em->id_e}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ajouter permission</h4>
        </div>
        <div class="modal-body">
          <p>
          <form class="form-horizontal" method="post" role="form"  action="ajouterconge" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="employer" value="{{$em->id_e}}" />
           <center> <label > <h3>Matricule</h3>{{$em->matricule}}</label></center>
            <div class="box-body">
          
             <!--   <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">type du congé</label>
             <div class="col-sm-4">
                
               <select name="type" class="btn btn-default dropdown-toggle">
                <option value="maladi">maladi</option>
                <option value="annuel">annuel</option>
                 <option value="autorisation">autorisation</option>
                
               </select>
              </div>
             </div>
             </div>-->

             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">heur debut</label>
             <div class="col-sm-4">

                <input type="time" class="form-control" value="" name="heur_debut">
              </div>
             </div>
             </div>
           <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">heur fin</label>
             <div class="col-sm-4">

                <input type="time" class="form-control" value="" name="heur_fin">
              </div>
             </div>
             </div>
                 

        <div>
          <button  class="btn btn-success pull-right" type="submit" name="">Ajouter</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Fermer</button>
        </div>
            </form>
        </div>
      </div>
    </div>
  </div>



        </td>

       </tr>@endforeach
      </table>
    </div>



<!-- The Modal -->



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
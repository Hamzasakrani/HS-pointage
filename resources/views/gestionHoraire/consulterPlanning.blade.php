
@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
       Suprimer et/ou Modifier un Planning
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">consulter </li>
      </ol>
    </section>
    

    <br>
    <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">

    <form class="form-horizontal">
     <div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search for all.." aria-controls="example1"></label></div>
    <div class="box-body">
 
 


     
    	<table class="table table-bordered table-hover" id="myTable">
    	 <thead><tr>
    	 <th>Nom Planning</th>
           <th>lundi</th>
           <th>mardi</th>
           <th>Mercredi</th>
           <th>Jeudi</th>
           <th>Vendredi</th>
           <th>Samedi</th>
           <th>Dimanche</th>
           <th></th>
           
    	 </tr>
    	 </thead>
    	 <tr> @foreach($plans as $plan)
    	 <td>{{$plan->nom_planning}}</td>
    	 <td>{{$plan->l1}}<i class="fa fa-arrows-h"></i> {{$plan->l2}} <br> {{$plan->l3}} <i class="fa fa-arrows-h"></i> {{$plan->l4}}</td>
    	<td>{{$plan->m1}}<i class="fa fa-arrows-h"></i> {{$plan->m2}} <br> {{$plan->m3}} <i class="fa fa-arrows-h"></i> {{$plan->m4}}</td>
    <td>{{$plan->me1}}<i class="fa fa-arrows-h"></i> {{$plan->me2}} <br> {{$plan->me3}} <i class="fa fa-arrows-h"></i> {{$plan->me4}}</td>
      <td>{{$plan->j1}}<i class="fa fa-arrows-h"></i> {{$plan->j2}} <br> {{$plan->j3}} <i class="fa fa-arrows-h"></i> {{$plan->j4}}</td>
     <td>{{$plan->v1}}<i class="fa fa-arrows-h"></i> {{$plan->v2}} <br> {{$plan->v3}} <i class="fa fa-arrows-h"></i> {{$plan->v4}}</td>
     <td>{{$plan->s1}}<i class="fa fa-arrows-h"></i> {{$plan->s2}} <br> {{$plan->s3}} <i class="fa fa-arrows-h"></i> {{$plan->s4}}</td>
      <td>{{$plan->d1}}<i class="fa fa-arrows-h"></i> {{$plan->d2}} <br> {{$plan->d3}} <i class="fa fa-arrows-h"></i> {{$plan->d4}}</td>
    	  <td><button type="button" name="mod" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$plan->id_planning}}"><i class="fa fa-wrench "></i></button>
    	   <a href="http://localhost/Bio/public/sup/{{$plan->id_planning}}"><button type="button" class="btn btn-danger " ><i class="fa  fa-times "></i></button></a>
               

  <!-- Modal content -->
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal{{$plan->id_planning}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier Empreinte</h4>
        </div>
        <div class="modal-body">
          <p>
          <form class="form-horizontal" method="post" action="http://localhost/Bio/public/modif" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="id" value="{{$plan->id_planning}}" />
          	<div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$plan->id_planning}}" name="nom">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Prenom</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$plan->id_planning}}" name="prenom">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matricule</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$plan->id_planning}}" name="matricule">
              </div>
             </div>
             </div> 
          
                 
          </p>
        <div>
          <button  class="btn btn-success pull-right" type="submit" name="">modifier</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
          </div>

      </div>
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
}
</script>
@stop
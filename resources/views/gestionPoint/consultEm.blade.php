@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
       Suprimer et/ou Modifier un Empoy&eacute;
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Empoy&eacute;</a></li>
        <li class="active">consulter Empoy&eacute; </li>
      </ol>
    </section>
    

    <br>
    <div class="row">

        <div class="col-xs-12">

          <div class="box">

            <div class="box-header">


     <div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search for all.." aria-controls="example1">
     <select class="form-control" id="s">
      
       <option value="1">nom</option>
        <option value="2">matricule</option>
         <option value="3">boutique</option>
     </select></label></div>
    <div class="box-body">
    	<table class="table table-bordered table-hover" id="myTable">
    	 <thead><tr>
    	 <th>Nom</th>
           <th>Pr&eacute;nom</th>
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
    	  <td><button type="button" name="mod" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$em->id_e}}"><i class="fa fa-wrench "></i></button>
    	   <a href="http://localhost/Bio/public/sup/{{$em->id_e}}"><button type="button" class="btn btn-danger " ><i class="fa  fa-times "></i></button></a>


  <!-- Modal content -->
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal{{$em->id_e}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier Empreinte</h4>
        </div>
        <div class="modal-body">
          <p>
          <form class="form-horizontal" method="post" role="form" action="modif" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" value="{{$em->id_e}}" />
          	<div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$em->nom}}" name="nom">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Pr&eacute;nom</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$em->prenom}}" name="prenom">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Matricule</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$em->matricule}}" name="matricule">
              </div>
             </div>
             </div> 
          


        <div>
          <button  class="btn btn-success pull-right" type="submit" name="">modifier</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
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
  var input, filter, table, tr, td, i, select;
  input = document.getElementById("myInput");

  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
select= document.getElementById("s").value;

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    if(select=="1"){td = tr[i].getElementsByTagName("td")[0];}
    else if(select=="2")
    { td = tr[i].getElementsByTagName("td")[2];}
      else if(select=="3")
      { td = tr[i].getElementsByTagName("td")[3];}
     else 
      {alert(select);}
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  
  }
}

</script>
@stop
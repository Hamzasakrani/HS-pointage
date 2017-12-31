@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
       Affectation Planning
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">Affectation Planning</li>
      </ol>
    </section><br>
    <section class="content">
      <div class="row">
      </div>
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            
            
              <form class="form-horizontal">
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
           <th>Prenom</th>
           <th>Matricule</th>
           <th>Boutique</th>
           <th></th>
           
    	 </tr>
    	 </thead>
		
	<tr><td></td></td></tr>	
    	 <tr> @foreach($ems as $em)
    	 <td>{{$em->nom}}</td>
    	 <td>{{$em->prenom}}</td>
    	 <td>{{$em->matricule}}</td>
    	 <td>{{$em->nom_b}}</td>
    	  <td><button type="button" name="mod{{$em->id_e}}" class="btn btn-info" data-toggle="modal" data-target="#myModal{{$em->id_e}}"><i class="fa  fa-table "></i></button>
    	   
               

  <!-- Modal content -->
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal{{$em->id_e}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Affecter Planning</h4>
        </div>
        <div class="modal-body">
          <p>
          <form class="form-horizontal" method="post" action="http://localhost/Bio/public/affecterplanning" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="matricule" value="{{$em->matricule}}" />
          	<div class="box-body">
                <div class="form-group">
        <center> <label > <h3>Matricule</h3>{{$em->matricule}}</label></center>
             <div class="col-sm-10">
                
                
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">date debut</label>
             <div class="col-sm-4">
                
                <input type="date"  value="" name="date_debut">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">date fin</label>
             <div class="col-sm-4">
                
                <input type="date"  value="" name="date_fin">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Planning</label>
             <div class="col-sm-4">
                
                <select name="planning" class="btn btn-default dropdown-toggle">
    	 @foreach($bs as $b)
               	<option value="{{$b->id_plannigh}}">{{$b->nom_planning}}</option>
               @endforeach
              
              	
               </select>
              </div>
             </div>
             </div> 
          
                 
          </p>
        <div>
          <button  class="btn btn-success pull-right" type="submit" name="">ok</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
          </div>
       </form>
      </div>
      </p></div>
    </div>
  </div>
  


    	  </td>
    	   
    	 </tr>@endforeach
    	 </table>
    	 </div>

    	 </form>
            </div>
          </div>
            </div>
      </section>            
@stop 

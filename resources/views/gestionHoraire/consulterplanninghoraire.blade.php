@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
       Listes Planning
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">consulter planning </li>
      </ol>
    </section><br>
    <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
           <div class="box-header">
          <center><h2>Liste Planning</h2></center>
           
            
          <center><h3 style="padding:5px; background-color:#10C1F5  ; border:2px solid #1075F5  ; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">Liste Planning Jour</h3>  </center>
            <table class="table table-bordered table-hover" id="myTable">
    	 <thead><tr>
    	 <th>nom planning</th>
         
           <th>Premiere séance</th>
           <th>Deusiéme séance</th>
           <th></th>
           
    	 </tr>
    	 </thead>
		
		
    	 <tr> @foreach($planningjours as $planningjour)
    	 <td>{{$planningjour->nom_planning}}</td>
    	
    	 <td>{{$planningjour->s1}}<i class="fa fa-arrows-h"></i>{{$planningjour->s2}}</td>
    	 <td>{{$planningjour->s3}}<i class="fa fa-arrows-h"></i>{{$planningjour->s4}}</td>
            </tr>@endforeach
            </table>
              <br>
           
             
          <center><h3  style="padding:5px; background-color:#ffaca3; border:2px solid #ff3924; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">Liste Planning Nuit</h3></center>  
     <table class="table table-bordered table-hover" id="myTable">
    	 <thead><tr>
    	 <th>nom planning</th>
         
          
           <th> séance de nuit</th>
           <th></th>
           
    	 </tr>
    	 </thead>
		
		
    	 <tr> @foreach($planningnuits as $planningnuit)
    	 <td>{{$planningnuit->nom_planning}}</td>
    	
    	 
    	 <td>{{$planningnuit->s4}}<i class="fa fa-arrows-h"></i>{{$planningnuit->s1}}</td>
            </tr>@endforeach
            </table>
          </div>
        </div>
     </div>
          </div>
    @stop
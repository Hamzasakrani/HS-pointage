@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
        Ajouter Un Nouveau Planning de Nuit
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">ajouter planning de Nuit</li>
      </ol>
    </section><br>
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
    <form class="form-horizontal"  method="post" action="http://localhost/Bio/public/ajouterPlanning" accept-charset="UTF-8">
     <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="box-body">
    <label>Nom planning</label><input type="text"  placeholder="nom du nouvelle planning .." class="form-control" name="nom_planning" required="required">
    	<table class="table table-bordered table-hover" id="h">
        <thead>
    	<tr>
                  <th>les jours</th>
                  <th>heur debut</th>
                  <th>heur fin</th>
                    
                </tr>
         </thead>

         <tr>
    		<td >Lundi<i class="fa fa-arrows-h"></i> Mardi</td><td align="center"><input type="time" name="l1" value="18:00" id="l1" ></td><td align="center"><input type="time" name="l2" name="l2" value="06:00"></td></tr>
    		<tr>
    	    <td >Mardi <i class="fa fa-arrows-h"></i>Mercredi </td><td align="center"><input type="time" name="m1" value="18:00"></td><td align="center"><input type="time" name="m2" value="06:00"></td></tr>
    	    <tr>
    	    <td >Mercredi <i class="fa fa-arrows-h"></i>Jeudi </td><td align="center"><input type="time" name="me1" value="18:00"></td><td align="center"><input type="time" name="me2" value="06:00"></td></tr>
    	    <tr>
    	    <td >Jeudi <i class="fa fa-arrows-h"></i>Vendredi </td><td align="center"><input type="time" name="j1" value="18:00"></td><td align="center"><input type="time" name="j2" value="06:00"></td></tr>
    	    <tr>
    	    <td >vendredi <i class="fa fa-arrows-h"></i>Samedi </td><td align="center"><input type="time" name="v1" value="18:00"></td><td align="center"><input type="time" name="v2" value="06:00"></td></tr>
    	    <tr>
    	    <td >Samedi <i class="fa fa-arrows-h"></i>Dimanche </td><td align="center"><input type="time" name="s1" value="18:00"></td><td align="center"><input type="time" name="s2" value="06:00"></td></tr>
    	     <tr>
    	    <td >Dimanche <i class="fa fa-arrows-h"></i>lundi </td><td align="center"><input type="time" name="d1" value="18:00"></td><td align="center"><input type="time" name="d2" value="06:00"></td>


    	  </tr></table></div></form></div></div></div></div>  
@stop
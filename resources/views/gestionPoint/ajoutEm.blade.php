@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')

 <section class="content-header">
      <h1>
        Ajouter Nouveau Empoy&eacute;
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Empoyer</a></li>
        <li class="active">ajouter</li>
      </ol>
    </section>
 <br>
   <div class="row">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
<form class="form-horizontal" method="post" action="ajoutEmprint" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

              <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nom</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" placeholder="nom" name="nom">
              </div>
             </div>
             </div>
              <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Prenom</label>
                <div class="col-sm-10">
                
                <input type="text" class="form-control" placeholder="prenom" name="prenom">
              </div>
              </div>
             </div>
              <div class="box-body">
                
              </div><div class="box-body">

                  
              <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">civilité</label>
                <div class="col-sm-10">
               <select name="cv" class="btn btn-default dropdown-toggle">
               	<option value="1">homme</option>
               	<option value="2">femme</option>
               	
               </select>
              </div>
              </div>
              </div>
              <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Situation</label>
                <div class="col-sm-10">
               <select name="set" class="btn btn-default dropdown-toggle">
               	<option value="1">marié</option>
               	<option value="2">célibataire</option>
               		<option value="3">veuf</option>
               		<option value="4">divorcé</option>
               	
               </select>
              </div>
              </div>
              </div>
              <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Téléphone</label>
                <div class="col-sm-10">
                
                <input type="tel" class="form-control" placeholder="téléphone" name="tel"
                pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
              </div>
              </div>
              </div>
              
              <div class="box-body">
                <div class="form-group">
             
               <label for="inputEmail3" class="col-sm-2 control-label">fonction</label>
                 <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Username" name="fonction">
              </div>
            </div>
         </div> 
           
    </div>       
   
    </div></div></div>  
    <div class="col-md-6">

          <div class="box box-primary">
          <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Date d'embauche</label>
                <div class="col-sm-10">
                
               <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" id="datepicker" name="datee">
                </div>
              </div>
              </div>
              </div>
            <div class="box-header">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Boutique</label>
                <div class="col-sm-10">
                
                 <select name="boutique" class="btn btn-default dropdown-toggle">
    	 @foreach($bs as $b)
               	<option value="{{$b->id_b}}">{{$b->nom_b}}</option>
               @endforeach
              
              	
               </select>
                             </div>
             </div></div>
             <div class="box-header">
             <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">Matricule</label>
                <div class="col-sm-10">
                
                <input type="text" class="form-control" placeholder="matricule" name="matricule">
              </div>
              </div>
              
             
               <br>
                <br>
                <button  class="btn btn-info pull-right">ajouter</button>
                </form>
               
                

<!-- The Modal -->

              </div> </div>
             
        </div>     
      </div>  

   


@stop
@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
        Ajouter Un Nouveau Planning 
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">ajouter planning</li>
      </ol>
    </section><br><form class="form-horizontal" method="post" action="http://localhost/Bio/public/ajouterplanninghoraire" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
     <section class="content">
      <div class="row">
      </div>
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <h2> Planning</h2><label>
		 
               
            <br><br>
		
		Nom planning</label><input type="text"  placeholder="nom du nouvelle planning .." class="form-control" name="nom_planning" required="required">
                 <br> 
      
       
     </select><br><br>  <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header">
          <center> <br> planning jour  <input type="radio" id="1jour" name="type" onclick="chgfond();" checked="checked" value="jour" class="flat-red"> </center>
           <label id="jour" >Premiere séance</label> <br>
              <input type="time" id="s1" name="s1"><i class="fa fa-arrows-h"></i>
              <input type="time" id="s2" name="s2"><br><br>
             <label id="nuit">Deusiéme séance </label><br>
              <input type="time" id="s3" name="s3"><i class="fa fa-arrows-h"></i>
              <input type="time" id="s4" name="s4"> 
		</div></div>
			</div>
             
	  <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
          <center> <br> planning nuit  <input type="radio" id="2jour" name="type" onclick="chgfond();" value="nuit" class="flat-red"> </center>
           <label id="jour" >Séance nuit</label> <br>
              <input type="time" id="n1"  disabled="disabled" name="s4"><i class="fa fa-arrows-h"></i>
              <input type="time" id="n2"  disabled="disabled" name="s1" ><br><br>
             <br><br><br>
			</div>
	  
	      </div>
          </div><br>
		<button  class="btn btn-info pull-right">ajouter</button>
	</div>
	    
	    </div>	
	</form>	
          
     </section>
      <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>
      <script type="text/javascript"> 
 function chgfond() 
  { 
  	
  	if(document.getElementById("2jour").checked)
  	{
  	
  	document.getElementById("s1").disabled = true;
	document.getElementById("s2").disabled = true;
	 document.getElementById("s3").disabled = true;
	document.getElementById("s4").disabled = true;
     document.getElementById("n1").disabled = false;
	document.getElementById("n2").disabled = false;
    }
   else if(document.getElementById("1jour").checked)
  	{
  	
   
  document.getElementById("s1").disabled = false;
	document.getElementById("s2").disabled = false;
	  document.getElementById("s3").disabled = false;
	document.getElementById("s4").disabled = false;
     document.getElementById("n1").disabled = true;
	document.getElementById("n2").disabled = true;
    }
    
  }
      </script>
@stop  
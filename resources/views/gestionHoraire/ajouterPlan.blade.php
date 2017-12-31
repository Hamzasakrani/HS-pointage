@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
        Ajouter Un Nouveau Planning de Jour
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">ajouter planning de Jour</li>
      </ol>
    </section><br>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
    <form class="form-horizontal"  method="post" action="ajouterPlanning" accept-charset="UTF-8">
     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="box-body">
    <label>Nom planning</label><input type="text"  placeholder="nom du nouveau planning .." class="form-control" name="nom_planning" required="required">
    	<table class="table table-bordered table-hover" id="h">
    	 <thead>
    	       <tr>
                  <th>#</th>
                  <th colspan="2"> premiere séance</th>
                 <th align="center">NB  séance</th>
                  <th colspan="2"> deuxieme séance</th>
                 
                </tr>
                <tr>
                  <th>les jours</th>
                  <th>heur debut</th>
                  <th>heur fin</th>
                    <th></th>
                  <th>heur debut</th>
                  <th>heur fin</th>
                </tr>
                 
               </thead>
    		<tr>
    		<td >Lundi</td><td align="center"><input type="time" name="l1" value="08:00" id="l1" ></td><td align="center"><input type="time" name="l2" name="l2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond();" id="b"></td><td align="center"><input type="time" name="l3" id="l3" Disabled="Disabled"></td><td align="center"><input type="time" name="l4" id="l4" Disabled="Disabled"></td>
    		</tr>
    	    <tr>
    	    <td >Mardi</td><td align="center"><input type="time" name="m1" value="08:00"></td><td align="center"><input type="time" name="m2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond1();"  id="b1"></td><td align="center"><input type="time" name="m3" id="m3" Disabled="Disabled"></td><td align="center"><input type="time" name="m4" id="m4" Disabled="Disabled"></td>
    	    </tr>
    	    <tr>
    	    <td >Mercredi</td><td align="center"><input type="time" name="me1" value="08:00"></td><td align="center"><input type="time" name="me2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond2();" id="b2"></td><td align="center"><input type="time" name="me3" id="me3" Disabled="Disabled"></td><td align="center"><input type="time" name="me4" id="me4" Disabled="Disabled"></td>
    	    </tr>
    	    <tr>
    	    <td >Jeudi </td><td align="center"><input type="time" name="j1" value="08:00"></td><td align="center"><input type="time" name="j2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond3();" id="b3"></td><td align="center"><input type="time" name="j3" id="j3"  Disabled="Disabled"></td><td align="center"><input type="time" name="j4" id="j4" Disabled="Disabled"></td>
    	    </tr>
    	    <tr>
    	    <td >vendredi</td><td align="center"><input type="time" name="v1" value="08:00"></td><td align="center"><input type="time" name="v2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond4();" id="b4"></td><td align="center"><input type="time" name="v3" id="v3" Disabled="Disabled"></td><td align="center"><input type="time" name="v4" id="v4" Disabled="Disabled"></td>
    	    </tr>
    	    <tr>
    	    <td >samedi</td><td align="center"><input type="time" name="s1" value="08:00"></td><td align="center"><input type="time" name="s2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond5();" id="b5"></td><td align="center"><input type="time" name="s3" id="s3" Disabled="Disabled"></td><td align="center"><input type="time" name="s4" id="s4" Disabled="Disabled"></td>
    	    </tr>
    	    <tr>
    	    <td >dimanche</td><td align="center"><input type="time" name="d1" value="08:00"></td><td align="center"><input type="time" name="d2" value="13:00"></td><td align="center"><input type="button" name="" value="1" class="btn " style="background: green "  onclick="chgfond6();" id="b6"></td><td align="center"><input type="time" name="d3" id="d3" Disabled="Disabled"></td><td align="center"><input type="time" name="d4" id="d4" Disabled="Disabled"></td>
    	    </tr> 
    	    
    	</table><br>
<div align="center"><button type="submit" class="btn btn-info pull-center">ajouter</button></div>
</div>
    </form>
 </div></div></div></div> 
 
 <script type="text/javascript"> 
 function chgfond() 
  { 
  	
  	if(document.getElementById("b").style.backgroundColor=="green")
  	{
  	document.getElementById("b").style.backgroundColor="red";
  	document.getElementById("b").value="2";
  	document.getElementById("l3").disabled = false;
  	document.getElementById("l4").disabled = false;
    document.getElementById("l3").value="14:00";
    document.getElementById("l4").value="17:00";
    }
   else if(document.getElementById("b").style.backgroundColor=="red")
  	{
  	document.getElementById("b").style.backgroundColor="green";
   document.getElementById("b").value="1";
   document.getElementById("l3").disabled = true;
    document.getElementById("l4").disabled = true;
     document.getElementById("l3").value="";
    document.getElementById("l4").value="";
    }
    
  }	
  function chgfond1() 
  { 
  	 
  	if(document.getElementById("b1").style.backgroundColor=="green")
  	{
  	document.getElementById("b1").style.backgroundColor="red";
  	document.getElementById("b1").value="2";
  	document.getElementById("m3").disabled = false;
  	document.getElementById("m4").disabled = false;
     document.getElementById("m3").value="14:00";
    document.getElementById("m4").value="17:00";
    }
   else if(document.getElementById("b1").style.backgroundColor=="red")
  	{
  	document.getElementById("b1").style.backgroundColor="green";
   document.getElementById("b1").value="1";
   document.getElementById("m3").disabled = true;
  	document.getElementById("m4").disabled = true;
     document.getElementById("m3").value="";
    document.getElementById("m4").value="";
    }
   
  }	
  function chgfond2() 
  { 
  
  	if(document.getElementById("b2").style.backgroundColor=="green")
  	{
  	document.getElementById("b2").style.backgroundColor="red";
  	document.getElementById("b2").value="2";
  	document.getElementById("me3").disabled = false;
  	document.getElementById("me4").disabled = false;
     document.getElementById("me3").value="14:00";
    document.getElementById("me4").value="17:00";
    }
   else if(document.getElementById("b2").style.backgroundColor=="red")
  	{
  	document.getElementById("b2").style.backgroundColor="green";
   document.getElementById("b2").value="1";
   document.getElementById("me3").disabled = true;
  	document.getElementById("me4").disabled = true;
     document.getElementById("me3").value="";
    document.getElementById("me4").value="";
    }
   
  }	
  function chgfond3() 
  { 
  	
  	if(document.getElementById("b3").style.backgroundColor=="green")
  	{
  	document.getElementById("b3").style.backgroundColor="red";
  	document.getElementById("b3").value="2";
  	document.getElementById("j3").disabled = false;
  	document.getElementById("j4").disabled = false;
     document.getElementById("j3").value="14:00";
    document.getElementById("j4").value="17:00";
    }
   else if(document.getElementById("b3").style.backgroundColor=="red")
  	{
  	document.getElementById("b3").style.backgroundColor="green";
   document.getElementById("b3").value="1";
   document.getElementById("j3").disabled = true;
  	document.getElementById("j4").disabled = true;
     document.getElementById("j3").value="";
    document.getElementById("j4").value="";
    }
   
  }	
  function chgfond4() 
  { 
  	
  	if(document.getElementById("b4").style.backgroundColor=="green")
  	{
  	document.getElementById("b4").style.backgroundColor="red";
  	document.getElementById("b4").value="2";
  	document.getElementById("v3").disabled = false;
  	document.getElementById("v4").disabled = false;
     document.getElementById("v3").value="14:00";
    document.getElementById("v4").value="17:00";
    }
   else if(document.getElementById("b4").style.backgroundColor=="red")
  	{
  	document.getElementById("b4").style.backgroundColor="green";
   document.getElementById("b4").value="1";
   document.getElementById("v3").disabled = true;
  	document.getElementById("v4").disabled = true;
     document.getElementById("v3").value="";
    document.getElementById("v4").value="";
    }
    
  }	
  function chgfond5() 
  { 
  	
  	if(document.getElementById("b5").style.backgroundColor=="green")
  	{
  	document.getElementById("b5").style.backgroundColor="red";
  	document.getElementById("b5").value="2";
  	document.getElementById("s3").disabled = false;
  	document.getElementById("s4").disabled = false;
     document.getElementById("s3").value="14:00";
    document.getElementById("s4").value="17:00";
    }
   else if(document.getElementById("b5").style.backgroundColor=="red")
  	{
  	document.getElementById("b5").style.backgroundColor="green";
   document.getElementById("b5").value="1";
   document.getElementById("s3").disabled = true;
  	document.getElementById("s4").disabled = true;
     document.getElementById("s3").value="";
    document.getElementById("s4").value="";
    }
   
  }	
  function chgfond6() 
  { 
  	
  	if(document.getElementById("b6").style.backgroundColor=="green")
  	{
  	document.getElementById("b6").style.backgroundColor="red";
  	document.getElementById("b6").value="2";
  	document.getElementById("d3").disabled = false;
  	document.getElementById("d4").disabled = false;
     document.getElementById("d3").value="14:00";
    document.getElementById("d4").value="17:00";
    }
   else if(document.getElementById("b6").style.backgroundColor=="red")
  	{
  	document.getElementById("b6").style.backgroundColor="green";
   document.getElementById("b6").value="1";
   document.getElementById("d3").disabled = true;
  	document.getElementById("d4").disabled = true;
     document.getElementById("d3").value="";
    document.getElementById("d4").value="";
    }
   
  }	

  	
   
    
   
   
   
   


 
</script> 
@stop

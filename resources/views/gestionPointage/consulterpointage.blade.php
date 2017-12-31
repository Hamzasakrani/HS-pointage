@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
     
<section class="content-header">
      <h1>
       Liste du pointage
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Horaire</a></li>
        <li class="active">consulter pointage</li>
      </ol>
    </section><br>
    <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
           <div class="box-header">
               <a href="pdfview"><img src="dist/img/pdf.jpg" style="width:40px; height:50px;"> Download PDF</a>
               <a href="exportPDF"><img src="dist/img/excel.jpg" style="width:40px; height:50px;">Download Excel</a>
               <br><div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search for all.." aria-controls="example1">

                       <select class="form-control" id="s" name="pointage">

                           <option value="1">nom</option>
                           <option value="2">penom</option>
                           <option value="3">matricule</option>
                       </select>
                   </label></div>
           <center><div class="form-group row">
                   <div class="col-xs-2">
                       <label for="ex1">date</label>
                       <input class="form-control" id="date" type="text" onkeyup="myFunction()"  id="date">
                   </div>
                   </center>
          <center><h2>Liste Pointage</h2></center>



            <table class="table table-bordered table-hover" id="myTable">

                <thead>
                <tr>

    	 <th>Nom</th>
         
           <th>Prenom</th>
            <th>matricule</th>
                  <th>date du pointage</th>
           <th>heurs du travail</th>
             <th>boutique</th>
             <th>fonction</th>
             <th>solde cong&eacute;</th>
           
    	 </tr>
    	 </thead>

		
    	 <tr> @foreach($pnuits as $pnuit)
    	 <td>{{$pnuit->nom}}</td>
    	<td>{{$pnuit->prenom}}</td>
            <td>{{$pnuit->matricule}}</td>
    	 <td>{{$pnuit->date_pointe}}</td>
    	 <td>{{$pnuit->somme_heur}}</td>

                 <td>{{$pnuit->nom_b}}</td>
                 <td>{{$pnuit->fonction}}</td>
                 <td>{{$pnuit->sodeconge}}</td>
            </tr>@endforeach

            </table>
               <script src="jquery.js"></script>
               <script>
                   $(function() {
                       // Insérer le code jQuery ici
                   });
               </script>
               <script>
                   function myFunction() {
                       // Declare variables
                       var input, filter, table, tr, td, i, select,date,filter1;
                       input = document.getElementById("myInput");
                       date = document.getElementById("date");
                       filter = input.value.toUpperCase();
                       filter1 = date.value.toUpperCase();
                       table = document.getElementById("myTable");
                       tr = table.getElementsByTagName("tr");
                       select= document.getElementById("s").value;

                       // Loop through all table rows, and hide those who don't match the search query
                       for (i = 0; i < tr.length; i++) {
                           if(select=="1"){td = tr[i].getElementsByTagName("td")[0];
                               td1 = tr[i].getElementsByTagName("td")[3];
                           }
                           else if(select=="2")
                           { td = tr[i].getElementsByTagName("td")[1];
                               td1 = tr[i].getElementsByTagName("td")[3];
                           }
                           else if(select=="3")
                           { td = tr[i].getElementsByTagName("td")[2];
                               td1 = tr[i].getElementsByTagName("td")[3];
                           }
                           else
                           {alert(select);}
                           if (td) {
                               if (td.innerHTML.toUpperCase().indexOf(filter) > -1&&td1.innerHTML.toUpperCase().indexOf(filter1) > -1) {
                                   tr[i].style.display = "";
                               } else {
                                   tr[i].style.display = "none";
                               }
                           }

                       }
                   }
                   function myFunction1() {
                       // Declare variables
                       var input, filter, table, tr, td, i, select;
                       input = document.getElementById("date");

                       filter = input.value.toUpperCase();
                       table = document.getElementById("myTable");
                       tr = table.getElementsByTagName("tr");


                       // Loop through all table rows, and hide those who don't match the search query
                       for (i = 0; i < tr.length; i++) {


                            td = tr[i].getElementsByTagName("td")[3];


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
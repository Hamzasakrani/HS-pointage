@extends('admin.index')

@section('sidebar')
    @parent


 
@stop

@section('content')
<section class="content-header">
      <h1>
       Consultation boutique
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion Empreinte</a></li>
        <li class="active">Consultation boutique</li>
      </ol>
    </section>
 <br>
   <div class="row">
        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header">
          <center>  <h3 class="">Ajouter Boutique</h3></center>
<form class="form-horizontal" method="post" action="http://localhost/Bio/public/ajouterbout" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

              <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nom Boutique</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" placeholder="nom de la boutique" name="nom_b">
              </div>
             </div>
             </div>
              <div class="box-body">
                <div class="form-group">
               <label for="inputEmail3" class="col-sm-2 control-label">group</label>
                <div class="col-sm-10">

                    <select name="code_data" class="btn btn-default dropdown-toggle">
                        @foreach($gbs as $gb)
                            <option value="{{$gb->id_g}}">{{$gb->nom_group}}</option>
                    @endforeach
                    </select>
              </div>
              </div>
             </div>
             
           <button  class="btn btn-info pull-right">ajouter</button>  
  </form>  </div>

          </div></div>

    <div class="col-md-6">

          <div class="box  box-danger">
          <div class="box-body">
            <form class="form-horizontal">
     <div id="example1_filter" class="dataTables_filter"><label><input type="text" class="form-control input-sm" id="myInput" onkeyup="myFunction()" placeholder="Search for all.." aria-controls="example1"></label></div>
    <div class="box-body">
      <table class="table table-bordered table-striped display" cellspacing="0"  id="example">
       <thead><tr>
       <th>Nom boutique</th>
           <th>group</th>
          
           <th></th><tbody>
           
       </tr>
       </thead>@foreach($bs as $b)
       <tr>
       <td>{{$b->nom_b}}</td>
       <td>{{$b->nom_group}}</td>
      
        <td><button type="button" name="mod" class="btn btn-warning" data-toggle="modal" data-target="#myModal{{$b->id_b}}"><i class="fa fa-wrench "></i></button>
         <a href="http://localhost/Bio/public/supboutique/{{$b->id_b}}"><button type="button" class="btn btn-danger " ><i class="fa  fa-times "></i></button></a>
           <div class="modal fade" id="myModal{{$b->id_b}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier Boutique</h4>
        </div>
        <div class="modal-body">

          <form class="form-horizontal" method="post" action="http://localhost/Bio/public/modifboutique" role="form" accept-charset="UTF-8" name="h1">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <input type="hidden" name="id" value="{{$b->id_b}}" />
            <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nom Boutique</label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$b->nom_b}}" name="nom_b">
              </div>
             </div>
             </div>
             <div class="box-body">
                <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">group </label>
             <div class="col-sm-10">
                
                <input type="text" class="form-control" value="{{$b->code_data}}" name="code_data">
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
               
</td></tr></tbody>
@endforeach
</table></div></form>
  
      </div> </div>

        </div>
      </div>
      <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('https://code.jquery.com/jquery-1.12.4.js')}}"></script>
<script src="{{ URL::asset('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')}}"></script>

 <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("example");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
     td1 = tr[i].getElementsByTagName("td")[1];
     
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1||td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  
  }
}
</script>
<script>
 function format ( d ) {
    return 'Full name: '+d.first_name+' '+d.last_name+'<br>'+
        'Salary: '+d.salary+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}
 
$(document).ready(function() {
    var dt = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/ids-objects.php",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            
            { "data": "nom_b" },
            { "data": "code_data" },
            { "data": "position" },
            { "data": "office" }
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );
</script>
@stop
@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')
    <section class="content-header">
        <h1>
            Nouveau Debrief
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">debrief</a></li>
            <li class="active">ajouter</li>
        </ol>
    </section>
    <br>
    <div class="row">
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header">
                    <form class="form-horizontal" method="post" action="ajou" accept-charset="UTF-8" name="h1">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="box-body">


                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">debrief pour</label>
                                    <div class="col-sm-10">
                                        <select required name="matricule" class="btn btn-default dropdown-toggle">
                                            <option value=""></option>
                                            @foreach($employers as $employer)
                                                <option value="{{$employer->matricule}}">{{$employer->matricule}}|{{$employer->nom}}|{{$employer->prenom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">sujet</label>
                                <div class="col-sm-10">

                                    <input type="password" class="form-control" placeholder="sujet" name="mdp">
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">commentaire</label>
                                <div class="col-sm-10">

                                    <input type="password" class="form-control" placeholder="des informations" name="mdpc" id="mdpc">
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">fiche complete de debrif</label>
                                <div class="col-sm-10">

                                    <input type="file" class="form-control" placeholder="des informations" name="mdpc" id="mdpc">
                                </div>
                            </div>
                        </div>
                        
                        <button  class="btn btn-info pull-right" >ajouter</button>
                    </form>
                </div> </div>

        </div>
    </div>
    <script type="text/javascript">
        function verif()
        {
            /*  var mdp=document.getElementById("mdp").value;
             var mdpc=document.getElementById("mdpc").value;
             if(mdp==mdpc)
             {
             alert(mdp);
             }*/
            var selectBox = document.getElementById("profil");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            alert(selectedValue);

        }
        function addButton()
        {
            var f1 = document.requeteur;
            var button = document.createElement("input");
            button.type="submit";
            button.value="Afficher le Rapport";
            f1.appendChild(button);
        }
        function changeFunc() {
            var selectBox = document.getElementById("selectBox");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            if(selectedValue=="RB") {
                document.getElementById("a").disabled = false;

                document.getElementById("d").disabled = true;
            }
            else if(selectedValue=="GB") {
                document.getElementById("a").disabled = true;

                document.getElementById("d").disabled = false;
            }
            else if(selectedValue=="RH") {
                document.getElementById("a").disabled = true;

                document.getElementById("d").disabled = true;
            }
        }
    </script>
@stop
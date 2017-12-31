@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')

    <section class="content-header">
        <h1>
            contact
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">contact</a></li>
            <li class="active">ajouter</li>
        </ol>
    </section>
    <br>
    <div class="row">
    <div class="col-md-12">

        <div class="box box-danger">
            <div class="box-header">
                <form class="form-horizontal" method="post" action="contacttransmi" accept-charset="UTF-8" name="h1">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">commentaire</label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" placeholder="commentaire" name="com">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="form-group">
                           <label for="inputEmail3" class="col-sm-2 control-label">envoyer A</label>
                            <div class="col-sm-10"  >

                                @foreach($lists as $list)
                                    {{$list->email}}<i class="fa fa-arrows-h"></i>{{$list->profil}} <input type="checkbox" name="checkbox[]"  value="{{$list->email}} "><br>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                           <div class="box-body">

                           <div class="form-group">

                            <label for="inputEmail3" class="col-sm-2 control-label"><input type="radio" id="avis"  onclick="chgfond();" checked="checked" name="type" value="1" >avis</label>
                            <div class="col-sm-4">
                                <select  class="btn btn-default dropdown-toggle" id="a" name="theme">
                                    <option value="Avis d'affectation">Avis d'affectation</option>
                                    <option value="avis de planning">avis de planning</option>

                                </select>
                            </div>
                            </div>
                       </div>
                  </div>
                        <div class="col-md-6">
                            <div class="box-body">

                                <div class="form-group">

                                    <label for="inputEmail3" class="col-sm-3 control-label"><input type="radio" id="demande" onclick="chgfond();" name="type"  value="2">demande</label>
                                    <div class="col-sm-6">
                                        <select  class="btn btn-default dropdown-toggle" name="theme"  id="d" disabled="disabled" onchange="changeFunc();">

                                            <option value="demande employer">demande employer </option>
                                            <option value="des questions">des questions  </option>
                                            <option value="demande conge">demande conge</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">type du cong&eacute;</label>
                                    <div class="col-sm-4">

                                        <select name="types" class="btn btn-default dropdown-toggle" id="t" disabled="disabled" >
                                            <option value="maladi">maladi</option>
                                            <option value="annuel">annuel</option>
                                            <option value="autorisation">autorisation</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">date debut</label>
                            <div class="col-sm-4">

                                <input type="date"  value="" name="date_debut" id="h" disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label">date fin</label>
                            <div class="col-sm-4">

                                <input type="date"  value="" name="date_fin" id="p" disabled="disabled">
                            </div>
                        </div>
                    </div>

                        <div class="box-body">

                            <div class="form-group">

                                <label for="inputEmail3" class="col-sm-3 control-label">pour</label>
                                <div class="col-sm-6">
                                    <select  class="btn btn-default dropdown-toggle" name="employer"  id="m" disabled="disabled" >
                                    <option value=""></option>
                                    @foreach($employers as $employer)
                                        <option value="{{$employer->id_e}}"> <i class="fa fa-arrows-h"></i>{{$employer->matricule}}<i class="fa fa-arrows-h"></i>{{$employer->nom}}<i class="fa fa-arrows-h"></i>{{$employer->prenom}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                   </div>
                    </div>
                     <br>

                    <button  class="btn btn-info pull-right">Valider</button>
                    </form>
            </div> </div>

    </div>
    </div>
    <script type="text/javascript">
        function chgfond()
        {

            if(document.getElementById("avis").checked)
            {
                document.getElementById("a").disabled = false;

                document.getElementById("d").disabled = true;

            }
            else if(document.getElementById("demande").checked)
            {



                document.getElementById("a").disabled = true;

                document.getElementById("d").disabled = false;
            }

        }
        function chgfond1()
        {

            if(document.getElementById("bro").checked)
            {

                document.getElementById("b").disabled = false;
                document.getElementById("l").disabled = true;

            }
            else if(document.getElementById("list").checked)
            {




                document.getElementById("b").disabled = true;
                document.getElementById("l").disabled = false;
            }

        }
        function changeFunc() {
            var selectBox = document.getElementById("d");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            if(selectedValue=="demande conge") {
                document.getElementById("h").disabled = false;
                document.getElementById("m").disabled = false;
                document.getElementById("p").disabled = false;
                document.getElementById("t").disabled = false;
            }
            else{
                document.getElementById("h").disabled = true;
                document.getElementById("m").disabled = true;
                document.getElementById("p").disabled = true;
                document.getElementById("t").disabled = true;
            }

        }
    </script>
    @stop
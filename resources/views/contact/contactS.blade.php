@extends('admin.index')

@section('sidebar')
    @parent



@stop

@section('content')
    <section class="content-header">
        <h1>
            les contacts re&ccedil;u
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gestion contact</a></li>
            <li class="active">conatact re&ccedil;u</li>
        </ol>
    </section><br>
    <div class="row">

        <div class="col-xs-12">
            <div class="box">

                <div class="box-header">

                    <form class="form-horizontal">
                        <center><h3 style="padding:5px; background-color:#10C1F5  ; border:2px solid #1075F5  ; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">Avis</h3>  </center>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead><tr>
                                    <th>de</th>
                                    <th>theme</th>
                                    <th>commentaire</th>
                                    <th>concern&eacute;</th>

                                </tr>
                                </thead>
                                <tr> @foreach($aviSs as $aviS)
                                        <td>{{$aviS->emeteur}}</td>
                                        <td>{{$aviS->theme}}</td>
                                        <td>{{$aviS->commantaire}}</td>
                                        <td>{{$aviS->conserne}}</td>




                                        </td>

                                </tr>@endforeach
                            </table>
                        </div>
            <div class="box">

                <div class="box-header">

                    <form class="form-horizontal">
                        <center><h3  style="padding:5px; background-color:#ffaca3; border:2px solid #ff3924; -moz-border-radius:9px; -khtml-border-radius:9px; -webkit-border-radius:9px; border-radius:9px;">demande</h3></center>
                        <div class="box-body">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead><tr>
                                    <th>de</th>
                                    <th>theme</th>
                                    <th>commentaire</th>
                                    <th>concern&eacute;</th>


                                </tr>
                                </thead>
                                <tr> @foreach($contactSs as $contactS)
            <td>{{$contactS->emeteur}}</td>
            <td>{{$contactS->theme}}</td>
            <td>{{$contactS->commantaire}}</td>
            <td>{{$contactS->conserne}}</td>

            <td><button type="button" name="mod" class="btn btn-success" data-toggle="modal" data-target="#myModal{{$contactS->id_c}}"><i class="fa fa-plus "></i></button>



                <!-- Modal content -->

                <!-- Trigger the modal with a button -->


                <!-- Modal -->
                <div class="modal fade" id="myModal{{$contactS->id_c}}" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">repanse</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                <form class="form-horizontal" method="post" action="http://localhost/Bio/public/modiddf" accept-charset="UTF-8" name="h1">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" name="employer" value="{{$contactS->id_c}}" />
                                    <center> <label > <h3>De:</h3>{{$contactS->emeteur}}</label></center>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">type du congé</label>
                                            <div class="col-sm-4">

                                                <select name="type" class="btn btn-default dropdown-toggle">
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
                                            <label for="inputEmail3" class="col-sm-4 control-label">heur debut</label>
                                            <div class="col-sm-4">

                                                <input type="time" class="form-control" value="" name="heur_debut">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">heur fin</label>
                                            <div class="col-sm-4">

                                                <input type="time" class="form-control" value="" name="heur_fin">
                                            </div>
                                        </div>
                                    </div>

                                </p>
                                <div>
                                    <button  class="btn btn-success pull-right" type="submit" name="">Ajouter</button>
                                    <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                </div>
                </div>
                </div>



            </td>

    </tr>
    @endforeach
    <tr> @foreach($conges as $conge)
            <td>{{$conge->emeteur}}</td>
            <td>{{$conge->theme}}</td>
            <td>{{$conge->commantaire}}</td>
            <td>{{$conge->matricule}}</td>

            <td><button type="button" name="ko" class="btn btn-danger" data-toggle="modal" data-target="#myModal2{{$contactS->id_c}}">KO</button>
                <button type="button" name="ok" class="btn btn-success" data-toggle="modal" data-target="#myModal1{{$contactS->id_c}}" >OK</button>


                <!-- Modal content -->

                <!-- Trigger the modal with a button -->


                <!-- Modal -->
                <div class="modal fade" id="myModal2{{$conge->id_c}}" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">demande conge</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                <form class="form-horizontal" method="post" action="http://localhost/Bio/public/modiddf" accept-charset="UTF-8" name="h1">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" name="avis" value="{{$conge->emeteur}}" />
                                    <center> <label > <h3>pour:</h3>{{$conge->matricule}}</label></center>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">type du congé</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->type}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">date debut</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->date_debut}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">date fin</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->date_fin}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">cause du refu</label>
                                            <div class="col-sm-4">

                                               <textarea class="form-control" rows="3" cols="20" name="commtaire"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                <div>
                                    <button  class="btn btn-success pull-right" type="submit" name="">Ajouter</button>
                                    <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="myModal1{{$conge->id_c}}" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">demande conge </h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                <form class="form-horizontal" method="post" action="http://localhost/Bio/public/modiddf" accept-charset="UTF-8" name="h1">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" name="employer" value="{{$conge->id_c}}" />
                                    <center> <label > <h3>pour:</h3>{{$conge->matricule}}</label></center>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">type du congé</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->type}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">date debut</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->date_debut}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-4 control-label">date fin</label>
                                            <div class="col-sm-4">

                                                <label for="inputEmail3" class="col-sm-18 control-label">{{$conge->date_fin}}</label>
                                            </div>
                                        </div>
                                    </div>



                                <div>
                                    <button  class="btn btn-success pull-right" type="submit" name="">Ajouter</button>
                                    <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
                </div>
                </div>



            </td>

    </tr>@endforeach
            </table>

        </div>




        <!-- The Modal -->

    </div>
    </div>
    </div>
    </div>
    <script src="jquery.js"></script>

@stop
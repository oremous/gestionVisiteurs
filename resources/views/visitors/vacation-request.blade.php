@extends('adminlte::page')

@section('title')
Request (Demande) Visite
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>En cours de visite</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{$visitor->fullname}}</b> est actuellement en visite dans le département <b>{{$visitor->depart}}</b>.
                        </p>
                        <!--<p class="lead">
                            departement <b>{{$visitor->depart}}</b>.
                        </p>-->
                        <p class="lead">
                            Le/Les motif(s) de sa visite : <b>_________________________________________________________</b><br>
                            <b>_________________________________________________________</b>
                            <b>_________________________________________________________</b>
                            <b>_________________________________________________________</b><br><br>
                        </p>
                        <p class="lead">
                            Responsable/Personnel du département : <b>_______________________</b>
                        </p>
        
                        <p class="m-5">
                           Signature : 
                        </p>
                        <div class="my-5">
                            <a href="#"
                                onclick="
                                        document.getElementById('printLink').style.display = 'none'
                                        setTimeout(function(){
                                            document.getElementById('printLink').style.display = 'block'
                                        },2000);
                                        window.print();
                                    "
                                class="btn btn-sm btn-primary" id="printLink">
                                <i class="fas fa-print"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
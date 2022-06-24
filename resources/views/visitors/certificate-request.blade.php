@extends('adminlte::page')

@section('title')
    Attestation Visite
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>Attestation de Visite</h3>
                    </div>
                    <div class="card-body">
                        <p class="lead">
                            <b>{{$visitor->fullname}}</b> a réellement visité en ce jour <b>{{\Carbon\Carbon::today()->toDateString()}}</b> la SGMT à <b>{{\Carbon\Carbon::now()->toTimeString()}}</b> le département <b>{{$visitor->depart}}</b>.
                        </p>
                        <!--<p class="lead">
                            le departement <b>{{$visitor->depart}}</b>.
                        </p>-->
                        <!--<p class="lead">
                            Date et Heure d'enregistrement / d'entree : <b>{{$visitor->hire_date}}</b>
                        </p>-->
                        <!--<p class="lead">
                            This Certification is being issued upon the request of <b>{{$visitor->fullname}}</b> for whatever legal purpose it may serve.
                        </p>
                        <p class="lead">
                            Issued on <b>{{\Carbon\Carbon::today()->toDateString()}}</b> at <b>{{\Carbon\Carbon::now()->toTimeString()}}</b> 
                        </p>
        
                        <p class="m-5">
                            __________
                            __________
                        </p>-->
                        <p class="lead">
                            <b>La société vous remercie !</b>
                        </p>
                        <div class="my-4">
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
@extends('adminlte::page')

@section('title')
    Home | Visiteurs App
@endsection

@section('content_header')
    <div class="shadow p-3 mb-5 bg-body rounded"> <h1>Dashboard (Tableau De Bord)</h1> </div>
    <!--<h1>Dashboard (Tableau De Bord)</h1>-->
@endsection

@section('content')
    <div class="container">
        <div class="row my-6">
            <div class="col-md-4">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{\App\Models\Visitors::count()}}</h3>
                        <p>Visiteurs actuellement</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/visitors')}}" class="small-box-footer">
                        Cliquez ici pour plus d'informations   <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
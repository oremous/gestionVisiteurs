@extends('layouts.app')

@section('title')
    Welcome | Visiteurs App
@endsection

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-light">
                        <h3 class="p-2">BIENVENUE SUR VISITARIUM</h3>
                    </div>
                    <div class="card-body">
                        @guest
                            <a href="{{url('/login')}}" class="btn btn-primary">
                                Tentez de se connecter
                            </a>
                        @endguest
                       @auth
                        <a href="{{url('admin/home')}}" class="btn btn-primary">
                            Home
                            </a>
                       @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
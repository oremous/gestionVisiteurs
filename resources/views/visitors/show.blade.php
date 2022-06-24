@extends('adminlte::page')

@section('title')
    Details_Visiteur | Visiteurs App
@endsection

@section('content_header')
    <div class="shadow p-3 mb-5 bg-body rounded"> <h1>Show visitor</h1> </div>
    <!--<h1>Show visitor</h1>-->
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>{{$visitor->fullname}}</h3>
                        </div>
                    </div>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                        <a href="{{route('vacation.request',$visitor->registration_number)}}" class="btn btn-dark">
                            Details Visite
                        </a>
                        <a href="{{route('certificate.request',$visitor->registration_number)}}" class="btn btn-danger">
                            Preuve/Attestation Visite
                        </a>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="fullname">Registration Number</label>
                            <input type="text" class="form-control" 
                                name="registration_number"
                                max="8"
                                placeholder="Registration Number"
                                value="{{$visitor->registration_number}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" 
                                name="fullname" placeholder="Fullname"
                                value="{{$visitor->fullname}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Departement</label>
                            <input type="text" class="form-control" 
                                name="depart" placeholder="Departement"
                                value="{{$visitor->depart}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="hire_date">Visit Date</label>
                            <input type="date" class="form-control" 
                                name="hire_date" placeholder="Visit Date"
                                value="{{$visitor->hire_date}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" 
                                name="phone" placeholder="Phone"
                                value="{{$visitor->phone}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="fullname">Address</label>
                            <input type="text" class="form-control" 
                                name="address" placeholder="Address"
                                value="{{$visitor->address}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="city">City</label>
                            <input type="text" class="form-control" 
                                name="city" placeholder="City"
                                value="{{$visitor->city}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('adminlte::page')

@section('title')
    Mettre_A_Jour_Le_Visiteur | Visiteurs App
@endsection

@section('content_header')
    <div class="shadow p-3 mb-5 bg-body rounded"> <h1>Update visitor</h1> </div>
    <!--<h1>Update visitor</h1>-->
@endsection

@section('content')
    <div class="container">
        @include('layouts.alert')
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="col-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Update visitor</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('visitors.update',$visitor->registration_number)}}"
                            method ="POST" class="mt-3">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="fullname">Registration Number</label>
                                <input type="text" class="form-control" 
                                    name="registration_number" placeholder="Registration Number"
                                    value="{{old('registration_number',$visitor->registration_number)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Fullname</label>
                                <input type="text" class="form-control" 
                                    name="fullname" placeholder="Fullname"
                                    value="{{old('fullname',$visitor->fullname)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Departement</label>
                                <input type="text" class="form-control" 
                                    name="depart" placeholder="Departement"
                                    value="{{old('depart',$visitor->depart)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="hire_date">Visit Date</label>
                                <input type="date" class="form-control" 
                                    name="hire_date" placeholder="Hire Date"
                                    value="{{old('hire_date',$visitor->hire_date)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" 
                                    name="phone" placeholder="Phone"
                                    value="{{old('phone',$visitor->phone)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="fullname">Address</label>
                                <input type="text" class="form-control" 
                                    name="address" placeholder="Address"
                                    value="{{old('address',$visitor->address)}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control" 
                                    name="city" placeholder="City"
                                    value="{{old('city',$visitor->city)}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
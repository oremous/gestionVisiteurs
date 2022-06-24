@extends('layouts.admin')

@section('title')
User
@endsection
@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="col-my-5">
                    <div class="card-header">
                        <div class="text-center font-weight-bold text-uppercase">
                            <h4>Visiteurs</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom Complet</th>
                                    <th>Département Visité</th>
                                    <th>Date Visite</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$user->fullname}}</td>
                                        <td>{{$user->depart}}</td>
                                        <td>{{$user->hire_date}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{route('users.show',$visitor->registration_number)}}" 
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </a> 
                                            @if(Auth::user()->role_id == 1) {{-- Rendre invisible les options Modifier et Supprimer pour un user quelconque --}}
                                                <a href="{{route('users.edit',$visitor->registration_number)}}" 
                                                    class="btn btn-sm btn-outline-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form id="{{$visitor->registration_number}}" action="{{route('users.destroy',$visitor->registration_number)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                                <button type="submit"
                                                    onclick="deleteVisit({{$visitor->registration_number}})"
                                                    class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

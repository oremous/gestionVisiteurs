@extends('adminlte::page')

@section('plugins.Datatables',true)

@section('title')
    Liste_des_visiteurs | Visiteurs App
@endsection

@section('content_header')
    <div class="shadow p-3 mb-5 bg-body rounded"> <h1>List Of Visiteurs</h1> </div>
    <!--<h1>List Of Visiteurs</h1>-->
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
                                @foreach($visitors as $key => $visitor)
                                    <tr>
                                        <td>{{$key+=1}}</td>
                                        <td>{{$visitor->fullname}}</td>
                                        <td>{{$visitor->depart}}</td>
                                        <td>{{$visitor->hire_date}}</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{route('visitors.show',$visitor->registration_number)}}" 
                                                class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </a> 
                                            @if(Auth::user()->role_id == 1) {{-- Rendre invisible les options Modifier et Supprimer pour un user quelconque --}}
                                                <a href="{{route('visitors.edit',$visitor->registration_number)}}" 
                                                    class="btn btn-sm btn-outline-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form id="{{$visitor->registration_number}}" action="{{route('visitors.destroy',$visitor->registration_number)}}" method="post">
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

@section('js')
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable({
                dom : 'Bfrtip',
                buttons : [
                    'copy','excel','csv','pdf','print','colvis'
                ]
            });
        });
        function deleteVisit(id){
            Swal.fire({
                title: 'Are you sure to delete it?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
               
                }
            })
        }
    </script>
    @if(session()->has('success'))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
@endsection
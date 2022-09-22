@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-sucess alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    @endif

    <blockquote class="blockquote text-center">
        <p class="mb-0">Tabla de empleados </a></p>
    </blockquote>
    <a href="{{url('empleado/create')}}" >
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-secondary ">Registrar nuevo empleado </button></a>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">                
            </div>
        <div>
    </div>

<br/>
<br/>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>Num</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
            
        <tr>
            <td>{{$empleado->id}}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width="100" alt="">
            </td>


            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido_P}}</td>
            <td>{{$empleado->Apellido_M}}</td>
            <td>{{$empleado->correo}}</td>
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-success">
                     Editar 
                </a>
                 |
                <form action="{{url('/empleado/'.$empleado->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger"
                value="Borrar">
                </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $empleados->links()!!}
</div>
@endsection
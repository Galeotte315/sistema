@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            </div>
        <div>
    </div>
<br>
<h2> Formulario de creacion de empleado </h2> 
<br>
<form action= "{{url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf
@include('empleado.form',['modo'=>'Crear']);


</form>
</div>
@endsection
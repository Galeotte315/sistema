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
<form action="{{url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">   
    @csrf
    {{ method_field('PATCH') }}

    @include('empleado.form',['modo'=>'Editar']);
</form>
</div>
@endsection

<h1> {{$modo}} empleado </h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
 
        @foreach( $errors->all() as $error)
            <li> {{ $error}} </li>
        @endforeach
</ul>
    </div>
    
@endif

<Label for ="Nombre" > Nombres</Label>    
<input type="text" name='Nombre' value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id='Nombre'>
<br>
<br>


<Label for ="Apellido_P" > Apellido Paterno</Label>    
<input type="text" name='Apellido_P' value="{{ isset($empleado->Apellido_p)?$empleado->Apellido_p:old('Apellido_p') }}" id='Apellido_p'>
<br>
<br>

<Label for ="Apellido_M" > Apellido Materno</Label>    
<input type="text" name='Apellido_M'value="{{ isset($empleado->Apellido_M)?$empleado->Apellido_M:old('Apellido_m')}}" id='Apellido_M'>
<br>
<br>


<Label for ="correo" > Correo</Label>    
<input type="text" name='correo' value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}" id='correo'>
<br>
<br>

<Label for ="Foto" > Foto</Label>    
@if(isset($empleado->Foto)) 
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" width ="100" alt="">
@endif
<br>
<br>

<input type="file" class="form-control" name='Foto' value="" id='Foto'>
<br>
<br>

<input type="submit" value="{{ $modo}} datos">

<a href="{{url('empleado/')}}"> 
    <br> 
    <br> 
    <br> 
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-danger btn-sm">
            Regresar 
        </button>
    </div>
</a>
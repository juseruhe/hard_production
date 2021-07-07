@extends('layout.app')

@section('content')

<form action="{{route('usuario.update',$usuario->id)}}" method="post">

@csrf

@method('PUT')

<h2 class="text-center m-4">Actualizar Usuario</h2>

<div class="container">

<div class="row">

<label for="Nombre" class="label">Nombre:</label>
<input type="text" class="input  m-4" name="Nombre" id="" value="{{$usuario->Nombre}}">



<label for="Apellido"  class="label">Apellido:</label>
<input type="text"  class="input  m-4" name="Apellido" id="" value="{{$usuario->Apellido}}">

<label for="Cedula"  class="label">Cédula:</label>
<input type="number"  class="input  m-4" name="Cedula" id="" value="{{$usuario->Cedula}}">

<label for="Direccion"  class="label">Dirección:</label>
<input type="text"  class="input m-4" name="Direccion" id="" value="{{$usuario->Direccion}}">


<label for="Telefono"  class="label">Teléfono:</label>
<input type="number"  class="input m-4" name="Telefono" id="" value="{{$usuario->Telefono}}">

<button type="submit" class="btn btn-success m-4"><i class="fas fa-circle-notch"></i> Actualizar Usuario</button>



</form>

<a href="{{route('usuario.index')}}" class="btn btn-warning m-4"><i class="fas fa-arrow-alt-circle-left"></i> Volver</a>

</div>

</div>

@endsection
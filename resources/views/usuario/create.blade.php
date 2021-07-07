@extends('layout.app')

@section('content')

<form action="{{route('usuario.store')}}" method="post">

@csrf

<h2 class="text-center m-4">Crear Usuario</h2>

<div class="container">

<div class="row">

<label for="Nombre" class="label">Nombre:</label>
<input type="text" class="input  m-4" name="Nombre" id="" required>



<label for="Apellido"  class="label">Apellido:</label>
<input type="text"  class="input  m-4" name="Apellido" id="" required>

<label for="Cedula"  class="label">Cédula:</label>
<input type="number"  class="input  m-4" name="Cedula" id="" required>

<label for="Direccion"  class="label">Dirección:</label>
<input type="text"  class="input m-4" name="Direccion" id="" required>


<label for="Telefono"  class="label">Teléfono:</label>
<input type="number"  class="input m-4" name="Telefono" id="" required>

<button type="submit" class="btn btn-success m-4"><i class="fas fa-plus-circle"></i>  Insertar Nuevo Usuario</button>



</form>

<a href="{{route('usuario.index')}}" class="btn btn-warning m-4"><i class="fas fa-arrow-alt-circle-left"></i>  Volver</a>

</div>

</div>

@endsection
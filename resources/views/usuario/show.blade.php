@extends('layout.app')

@section('content')


<h2 class="text-center m-4">Datos del Usuario </h2>


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cédula</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      
    </tr>
  </thead>
  <tbody>
 
    <tr>

      <th scope="row">{{$usuario->id}}</th>
      <td>{{$usuario->Nombre}}</td>
      <td>{{$usuario->Apellido}}</td>
      <td>{{$usuario->Cedula}}</td>
      <td>{{$usuario->Direccion}}</td>
      <td>{{$usuario->Telefono}}</td>
      
     
    </tr>
  
  </tbody>
 
</table>

<a class="btn btn-warning m-4" href="{{route('usuario.index')}}"><i class="fas fa-arrow-alt-circle-left"></i> Volver</a>

@endsection




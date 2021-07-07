@extends('layout.app')

@section('content')

<!-- Alertas  -->
@if(session('mensaje')=="Creado Correctamente")
<div class="alert alert-success" role="alert">
<i class="fas fa-check-square"></i> {{session('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
@elseif(session('mensaje')=="Eliminado Correctamente")
<div class="alert alert-danger" role="alert">
<i class="fas fa-times-circle"></i> {{session('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close" >
<span aria-hidden="true">&times;</span>
</button>
</div>
@else
@endif

<a class="btn btn-success m-4" href="{{route('usuario.create')}}"><i class="fas fa-plus-circle"></i>  Crear Usuario</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cédula</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)
    <tr>

      <th scope="row">{{$usuario->id}}</th>
      <td>{{$usuario->Nombre}}</td>
      <td>{{$usuario->Apellido}}</td>
      <td>{{$usuario->Cedula}}</td>
      <td>{{$usuario->Direccion}}</td>
      <td>{{$usuario->Telefono}}</td>
      <td>
      <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
      <a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-info"><i class="fas fa-eye"></i> Mostrar</a>
      <form action="{{route('usuario.destroy',$usuario->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger"><i class="fas fa-eraser"></i> Eliminar</button>
      </form>
      </td>
     
    </tr>
    @endforeach
  </tbody>
 
</table>


@endsection




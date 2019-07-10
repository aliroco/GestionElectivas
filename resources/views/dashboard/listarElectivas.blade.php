@extends('plantilla.plantilla')
@section('subtittle')
  <h1> Listar Electivas</h1>
@endsection
@section('content')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Codigo</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Capacidad</th>
	      <th scope="col">Estado</th>
	    </tr>
	  </thead>
<tbody>
@foreach ($electivas as $e)
	    <tr>
	      <td>{{$e->codigo}}</td>
	      <td>{{$e->nombre}}</td>
	      <td>{{$e->capacidad}}</td>
	      <td>{{$e->estado}}</td>
	      <td>
	      	<!--Boton Editar-->
	      	<a href="{{route('editarElectiva',$e->codigo)}}" class="btn btn-info btn-xs">
            <i class="fa fa-pencil"></i>Editar</a>
            <!--Boton Eliminar-->
            <form action="{{route('eliminarElectiva')}}" method="POST" id="form_x" data-parsley-validate class="form-horizontal form-label-left">
	            {{method_field('DELETE')}}
	            {{csrf_field()}}
	                <input type="hidden" readonly id="codigo" value="{{$e->codigo}}" name="codigo" required="required" class="form-control col-md-7 col-xs-12">
	            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Eliminar</button>
	         </form>
	      </td>
	    </tr>
@endforeach
	</tbody>
</table>
@endsection
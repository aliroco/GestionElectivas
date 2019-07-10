@extends('plantilla.plantilla')

@section('subtittle')
  <h1> Editar Electiva</h1>
@endsection

@section('content')
<div class="container">
	<form method="POST" action="{{route('actualizarElectiva')}}">
		{{method_field('PUT')}}
	    {{csrf_field()}}
	  <div class="form-group col-md-12">
	      <label for="codigo">Codigo</label>
	      <input type="text" value="{{$electiva->codigo}}" class="form-control" id="codigo" name="codigo"  readonly="readonly">
	  </div>
	  <div class="form-group col-md-12">
	    <label for="nombre">Nombre</label>
	    <input type="text" value="{{$electiva->nombre}}" class="form-control" id="nombre" name="nombre">
      @error('nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="capacidad">Capacidad</label>
	      <input type="text" value="{{$electiva->capacidad}}" class="form-control" id="capacidad" name="capacidad">
        @error('capacidad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
	    </div>
	    <div class="form-group col-md-6">
	      <label for="estado">Estado</label>
	      <select name="estado" id="estado" class="form-control">
	      	@if ($electiva->estado == 1)
	        <option value='1' selected>Activa</option>
	        <option value='0'>Inactiva</option>
	        @else
	        <option value='1'>Activa</option>
	        <option value='0'selected>Inactiva</option>
	        @endif
	      </select>
	    </div>
	  </div>
	  <div class="form-row col-md-6 text-left">
	  <button type="submit" class="btn btn-primary ">Actualizar</button>
		</div>
	</form>
</div>
@endsection

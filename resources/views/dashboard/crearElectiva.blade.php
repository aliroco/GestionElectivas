@extends('plantilla.plantilla')

@section('subtittle')
  <h1> Crear Electiva</h1>
@endsection

@section('content')
<div class="container">


  <form method="POST" action="{{route('registrarElectiva')}}">
      {{csrf_field()}}
    <div class="form-group col-md-12">
        <label for="codigo">Codigo</label>
        <input type="text" class="form-control  @error('codigo') is-invalid @enderror" id="codigo" value="{{old('codigo')}}" name="codigo">
        @error('codigo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group col-md-12">
      <label for="nombre">Nombre</label>
      <input type="text"  class="form-control" id="nombre"  value="{{old('nombre')}}" name="nombre">
      @error('nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="capacidad">Capacidad</label>
        <input type="text" class="form-control" id="capacidad" value="{{old('capacidad')}}" name="capacidad">
        @error('capacidad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="estado">Estado</label>
        <select name="estado" id="estado" value="{{old('estado')}}" class="form-control">
          <option value='1' selected>Activa</option>
          <option value='0'>Inactiva</option>
        </select>
      </div>
    </div>
    <div class="form-row text-left">
    <button type="submit" class="btn btn-primary ">Guardar</button>
    </div>
  </form>
</div>
@endsection

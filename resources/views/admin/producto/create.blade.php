@extends('layouts.admin')
@section('title','Registrar producto')

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registrar producto
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('productos.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar producto</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar producto</h4>
                    </div>

                    {!! Form::open(['route'=>'productos.store', 'method'=>'POST','files'=>true]) !!}

                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" id="codigo" value="{{ old('codigo') }}" aria-describedby="helpId" placeholder="Codigo del producto" required>

                          @error('codigo')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}" aria-describedby="helpId" placeholder="Nombre del producto" required>

                        @error('nombre')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="precio1">Precio de venta</label>
                        <input type="number" Step=".01" class="form-control @error('precio1') is-invalid @enderror" name="precio1" id="precio1" value="{{ old('precio1') }}" aria-describedby="helpId" placeholder="Precio del producto" required>

                          @error('precio1')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="form-group">
                      <label for="idcategoria">Categoría</label>
                      <select class="form-control @error('idcategoria') is-invalid @enderror" name="idcategoria" id="idcategoria">
                        <option value="" selected disabled> - Selecciona un categoría - </option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                      </select>
                      @error('idcategoria')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="idproveedor">Proveedor</label>
                        <select class="form-control @error('idproveedor') is-invalid @enderror" name="idproveedor" id="idproveedor">
                          <option value="" selected disabled> - Selecciona un proveedor - </option>
                          @foreach ($proveedores as $proveedor)
                              <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                          @endforeach
                        </select>
                        @error('idproveedor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="imagen">{{ __("Adjuntar imagen") }}</label>
                            <input id="imagen" type="file" accept="image/*" class="form-control-file @error('imagen') is-invalid @enderror" name="imagen" value="{{ old('imagen') }}" placeholder="img" autofocus>

                            @error('imagen')
                                <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('productos.index')}}" class="btn btn-light mr-2">Cancelar</a>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection

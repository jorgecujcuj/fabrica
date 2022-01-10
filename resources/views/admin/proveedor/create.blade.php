@extends('layouts.admin')
@section('title','Registrar proveedor')

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registrar proveedor
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('proveedores.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar proveedor</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar proveedor</h4>
                    </div>

                    {!! Form::open(['route'=>'proveedores.store', 'method'=>'POST']) !!}

                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}" aria-describedby="helpId" placeholder="Nombre del proveedor" required>

                        @error('nombre')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" aria-describedby="emailHelpId" placeholder="ejemplo@gamil.com" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dpi">DPI</label>
                        <input type="number" class="form-control @error('dpi') is-invalid @enderror" name="dpi" id="dpi" value="{{ old('dpi') }}" aria-describedby="helpId" placeholder="Numero de PDI" required>

                        @error('dpi')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" id="direccion" value="{{ old('direccion') }}" aria-describedby="helpId" placeholder="Dirección" required>

                        @error('direccion')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telefono">Número de contacto</label>
                        <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono') }}" aria-describedby="helpId" placeholder="Número de contacto" required>

                        @error('telefono')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('proveedores.index')}}" class="btn btn-light mr-2">Cancelar</a>
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

@extends('layouts.admin')
@section('title','Editar cliente')

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Editar cliente
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar cliente</h4>
                    </div>

                    {!! Form::model($cliente,['route'=>['clientes.update',$cliente], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre',$cliente->nombre) }}" aria-describedby="helpId" placeholder="Nombre del cliente" required>

                          @error('nombre')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                                  <div class="form-group has-feedback">
                                      <label for="nit" class="control-label">Nit:</label>
                                      <input type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" id="nit" value="{{ old('nit',$cliente->nit) }}" placeholder="Ingrese Nit" required/>
                                      <span class="glyphicon form-control-feedback"></span>

                                      @error('nit')
                                          <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="direccion">Dirección</label>
                          <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" id="direccion" value="{{ old('direccion',$cliente->direccion) }}" aria-describedby="helpId" placeholder="Dirección">
                          <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>

                          @error('direccion')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label for="telefono">Número de contacto</label>
                          <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono',$cliente->telefono) }}" aria-describedby="helpId" placeholder="Número de contacto">
                          <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>

                          @error('telefono')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email',$cliente->email) }}" aria-describedby="emailHelpId" placeholder="ejemplo@gamil.com">
                          <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Editar</button>
                    <a href="{{route('clientes.index')}}" class="btn btn-light mr-2">Cancelar</a>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('melody/js/dropify.js') !!}
@endsection

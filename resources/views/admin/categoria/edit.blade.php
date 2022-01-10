@extends('layouts.admin')
@section('title','Editar categoría')

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Editar categoría
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('categorias.index')}}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar categoría</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar categorías</h4>
                    </div>

                    {!! Form::model($categoria,['route'=>['categorias.update',$categoria], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" value="{{ $categoria->nombre }}" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{ $categoria->descripcion }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('categorias.index')}}" class="btn btn-light mr-2">Cancelar</a>
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

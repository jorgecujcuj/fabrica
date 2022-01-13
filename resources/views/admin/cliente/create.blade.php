@extends('layouts.admin')
@section('title','Registrar cliente')

@section('styles')
{{-- {!! Html::style('boots3/bootstrap.min.css') !!} --}}
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registrar cliente
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar cliente</h4>
                    </div>

                    {!! Form::open(['route'=>'clientes.store', 'method'=>'POST']) !!}

                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}" aria-describedby="helpId" placeholder="Nombre del cliente" required>

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
                                    <input type="text" class="form-control @error('nit') is-invalid @enderror" name="nit" id="nit" placeholder="Ingrese Nit" required/>
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
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" id="direccion" value="{{ old('direccion') }}" aria-describedby="helpId" placeholder="Dirección">
                        <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>
                        @error('direccion')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telefono">Número de contacto</label>
                        <input type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono') }}" aria-describedby="helpId" placeholder="Número de contacto">
                        <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>

                        @error('telefono')
                            <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" aria-describedby="emailHelpId" placeholder="ejemplo@gamil.com">
                        <small id="helpId" class="form-text text-muted">Este Campo es opcional</small>

                          @error('email')
                              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('clientes.index')}}" class="btn btn-light mr-2">Cancelar</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- {!! Html::script('boots3/bootstrap.min.js') !!} --}}

<script type="text/javascript">
	function nitIsValid(nit) {
		if (!nit) {
			return true;
		}

		var nitRegExp = new RegExp('^[0-9]+(-?[0-9kK])?$');

		if (!nitRegExp.test(nit)) {
			return false;
		}

		nit = nit.replace(/-/, '');
		var lastChar = nit.length - 1;
		var number = nit.substring(0, lastChar);
		var expectedCheker = nit.substring(lastChar, lastChar + 1).toLowerCase();

		var factor = number.length + 1;
		var total = 0;

		for (var i = 0; i < number.length; i++) {
			var character = number.substring(i, i + 1);
			var digit = parseInt(character, 10);

			total += (digit * factor);
			factor = factor - 1;
		}

		var modulus = (11 - (total % 11)) % 11;
		var computedChecker = (modulus == 10 ? "k" : modulus.toString());

		return expectedCheker === computedChecker;
	}
</script>
<script type="text/javascript">
$('#nit').bind('change paste keyup', function (e) {
    var $this = $(this);
    var $parent = $this.parent();
    var $next = $this.next();
    var nit = $this.val();

    if (nit && nitIsValid(nit)) {
        $parent.addClass('has-success');
        $next.addClass('glyphicon-ok');
        $parent.removeClass('has-error');
        $next.removeClass('glyphicon-remove');
    } else if (nit) {
        $parent.addClass('has-error');
        $next.addClass('glyphicon-remove');
        $parent.removeClass('has-success');
        $next.removeClass('glyphicon-ok');
    } else {
        $parent.removeClass('has-error');
        $next.removeClass('glyphicon-remove');
        $parent.removeClass('has-success');
        $next.removeClass('glyphicon-ok');
    }
});
</script>
@endsection

@extends('layouts.admin')
@section('title','Registrar compras')

@section('styles')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registrar compras
        </h3>
        <nav arial-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('compras.index')}}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar compras</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registrar compras</h4>
                    </div>

                    {!! Form::open(['route'=>'compras.store', 'method'=>'POST']) !!}
                    @include('admin.compra._form')

                    {!! Form::close() !!}
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" id="guardar" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('compras.index')}}" class="btn btn-light mr-2">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{!! Html::script('melody/js/alerts.js') !!}
{!! Html::script('melody/js/avgrund.js') !!}

<script>
    $(document).ready(function () {
        $("#agregar").click(function () {
            agregar();
        });
    });

    var cont = 0;
    total = 0;
    subtotal = [];

    $("#guardar").hide();

    function agregar() {

        idproducto = $("#idproducto").val();
        producto = $("#idproducto option:selected").text();
        cantidad = $("#cantidad").val();
        precio = $("#precio").val();
        impuesto = $("#inpuesto").val();

        if (idproducto != "" && cantidad != "" && cantidad > 0 && precio != "") {
            subtotal[cont] = cantidad * precio;
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+cont+');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="idproducto[]" value="'+idproducto+'">'+producto+'</td> <td> <input type="hidden" id="precio[]" name="precio[]" value="' + precio + '"> <input class="form-control" type="number" id="precio[]" value="' + precio + '" disabled> </td>  <td> <input type="hidden" name="cantidad[]" value="' + cantidad + '"> <input class="form-control" type="number" value="' + cantidad + '" disabled> </td> <td align="right">Q/' + subtotal[cont] + ' </td></tr>';
            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la compras',

            })
        }
    }

    function limpiar() {
        $("#cantidad").val("");
        $("#precio").val("");
    }

    function totales() {
        $("#total").html("Q " + total.toFixed(2));
        total_impuesto = total * impuesto / 100;
        total_pagar = total + total_impuesto;
        $("#total_impuesto").html("Q " + total_impuesto.toFixed(2));
        $("#total_pagar_html").html("Q " + total_pagar.toFixed(2));
        $("#total_pagar").val(total_pagar.toFixed(2));
    }

    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total = total - subtotal[index];
        total_impuesto = total * impuesto / 100;
        total_pagar_html = total + total_impuesto;
        $("#total").html("Q" + total);
        $("#total_impuesto").html("Q" + total_impuesto);
        $("#total_pagar_html").html("Q" + total_pagar_html);
        $("#total_pagar").val(total_pagar_html.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }

</script>
@endsection

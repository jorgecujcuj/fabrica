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
        <label for="inpuesto">Inpuesto</label>
        <input type="number" Step=".01" class="form-control @error('inpuesto') is-invalid @enderror" name="inpuesto" id="inpuesto" value="{{ old('inpuesto') }}" aria-describedby="helpId" placeholder="12%" required>

          @error('inpuesto')
              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

    <div class="form-group">
        <label for="code">Código de barras</label>
        <input type="text" name="code" id="code" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
        <label for="idproducto">Producto</label>
        <select class="form-control @error('idproducto') is-invalid @enderror" name="idproducto" id="idproducto">
        <option value="" selected disabled> - Selecciona un producto - </option>
        @foreach ($productos as $producto)
            <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
        @endforeach
        </select>
        @error('idproducto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control @error('cantidad') is-invalid @enderror" name="cantidad" id="cantidad" value="{{ old('cantidad') }}" aria-describedby="helpId" placeholder="Número" required>

          @error('cantidad')
              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

    <div class="form-group">
        <label for="precio">Precio de compra</label>
        <input type="number" Step=".01" class="form-control @error('precio') is-invalid @enderror" name="precio" id="precio" value="{{ old('precio') }}" aria-describedby="helpId" placeholder="Costo" required>

          @error('precio')
              <span class="invalid-feedback" role="alert" style="color: #FFFFFF; background-color: #046ce5; border:none;">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

    <div class="form-group">
        <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
    </div>

    <div class="form-group">
        <h4 class="card-title">Detalles de compra</h4>
        <div class="table-responsive col-md-12">
            <table id="detalles" class="table table-striped">
                <thead>
                    <tr>
                        <th>Eliminar</th>
                        <th>Producto</th>
                        <th>Precio(Q)</th>
                        <th>Cantidad</th>
                        <th>SubTotal(Q)</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL:</p>
                        </th>
                        <th>
                            <p align="right"><span id="total">Q 0.00</span> </p>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL IMPUESTO (12%):</p>
                        </th>
                        <th>
                            <p align="right"><span id="total_impuesto">Q 0.00</span></p>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4">
                            <p align="right">TOTAL PAGAR:</p>
                        </th>
                        <th>
                            <p align="right"><span align="right" id="total_pagar_html">Q 0.00</span> <input type="hidden"
                                    name="total" id="total_pagar"></p>
                        </th>
                    </tr>
                </tfoot>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

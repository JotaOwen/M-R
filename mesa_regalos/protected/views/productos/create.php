<script type="text/javascript">
    $(document).on('ready', function() {
        $('#fecha_disponible').datepicker({ dateFormat: 'yy-mm-dd' });
    }); 
</script>



<form method="post">
    <fieldset>
        <legend>
            Nuevo Producto
        </legend>
        <input type="hidden" name="idProducto" value=""/>
        <div class="row">
            <div class="large-12 columns">
                <label>Nombre</label>
                <input type="text" placeholder="Nombre del Producto" name="nombre">
            </div>
        </div>

        <div class="row">
             <div class="large-6 columns">
                <label>Categoria</label>
                <select name='fkCategoria' class="chosen-select-no-single" >
                    <option value='0'>Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaCategorias as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                </select>
            </div>
             <div class="large-6 columns">
                <label>Subcategoria</label>
                    <select name="fkSubcategoria" class="chosen-select-no-single">
                        <option value="0">Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaSubCategorias as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="large-6 columns">
                <label>Proveedor</label>
                    <select name="fkProveedor" class="chosen-select-no-single">
                        <option value="0" selected>Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaProveedor as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                    </select>
            </div>
            <div class="large-6 columns">
                <label>Marca</label>
                    <select name="fkMarca" class="chosen-select-no-single">
                        <option value="0" selected>Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaMarcas as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                    </select>
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label>Precio</label>
                <input type="text" placeholder="000.00" name="precio">
            </div>
            <div class="small-3 columns">
                <label>Costo</label>
                <input type="text" placeholder="000.00" name="costo">
            </div>
           <div class="small-6 columns">
                <label>Código de barras</label>
                <input type="text" placeholder="Codigo de Barras" name="codigoDeBarras">
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label>SKU</label>
                <input type="text" placeholder="10" name="sku">
            </div>
            <div class="small-3 columns">
                  <label>¿En venta?
                    <select name="enVenta" class="chosen-select-no-single">
                      <option value="true" selected>Si</option>
                      <option value="false">No</option>
                    </select>
              </label>
            </div>
            <div class="small-6 columns">
                    <label>Unidad de medida</label>
                    <select name="fkUnidadMedida" class="chosen-select-no-single">
                        <option value="0" selected>Seleccione una opción...</option>
                    <?php
                    foreach ($ListaUnidadMedida as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                    </select>
            </div>
            <input type="hidden" name="esVirtual" value="false"/>
        </div>

        <div class="row">
            <div class="large-6 columns">
                <label>Referencia</label>
                <input type="text" placeholder="Categoria" name="referencia">
            </div>
            <div class="large-6 columns">
                <label>Referencia de proveedor</label>
                <input type="text" placeholder="Categoria" name="referencia_proveedor">
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label>Ancho</label>
                <input type="text" placeholder="000.00" name="ancho">
            </div>
            <div class="small-3 columns">
                <label>Alto</label>
                <input type="text" placeholder="000.00" name="alto">
            </div>
           <div class="small-3 columns">
                <label>Largo</label>
                <input type="text" placeholder="000.00" name="largo">
            </div>
            <div class="small-3 columns">
                <label>Peso</label>
                <input type="text" placeholder="000.00" name="peso">
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label>Fecha de disponibilidad</label>
                <input type="text" placeholder="Seleccione" id="fecha_disponible" name="fecha_disponible">
            </div>
            <div class="small-3 columns"></div>
            <div class="small-3 columns">
                  <label>Estatus
                    <select name="activo" class="chosen-select-no-single">
                      <option value="true" selected>Activo</option>
                      <option value="false">Inactivo</option>
                    </select>
              </label>
            </div>
            <div class="small-3 columns"></div>
        </div>

        <div class="row">
            <div class="small-6 columns">
                <table id="IMGATACH" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Agregar Imagen</th>
                            <th style="text-align: right; "><input type="button" id="agregar" value="+" title="Agregar otra Imagen" style="color: #FFFFFF; border: 1px solid; background-color:#E339A4; border-color:#FFFFFF; " /></th>
                        </tr>
                    </thead>
                    <!-- Cuerpo de la tabla con los campos -->
                    <tbody>
                    <?php { ?>
                        <!-- fila base para clonar y agregar al final -->
                        <tr class="fila-base">
                            <td><input type="file" name="IMGS[]"  /></td>
                            <td class="eliminar" style="text-align: left"><input type="button" value="X" class="button [tiny small large] [radius round]" /></td>
                        </tr>
                        <!-- fin de código: fila base -->
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button [radius round]" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>

<div style="width: 50px;"></div>



<script type="text/javascript">
     $(function(){
        // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
        $("#agregar").on("click", function(){
            $("#IMGATACH tbody tr:eq(0)").clone().removeClass("fila-base").appendTo("#IMGATACH tbody");
        //  alert( $("#tabla tbody").find(":last-child")    );
        });
        
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){
            var parent = $(this).parents().get(0);
            $(parent).remove();
        });
        
    });
</script>



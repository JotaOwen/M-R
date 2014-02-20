<script type="text/javascript">
    $(document).on('ready', function() {
        $('#fecha_disponible').datepicker({ dateFormat: 'yy-mm-dd' });
    }); 
</script>

<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/buttonFile.css">
<form data-abide action="<?php echo Yii::app()->getBaseUrl().'/productos/create'?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>
            Nuevo Producto
        </legend>
        <input type="hidden" name="idProducto" value=""/>
        <div class="row">
            <div class="large-12 columns">
                <label>Nombre<small>Requerido</small>
                <input type="text" placeholder="Nombre del Producto" name="nombre" required>
                </label><small class="error">El nombre del producto es requerido.</small>
            </div>
        </div>

        <div class="row">
             <div class="small-12 columns">
                <label>Categoria<small>Requerido</small>
                <select name='fkCategoria' class="chosen-select-no-single" required>
                    <option value='0'>Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaCategorias as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                </select>
                </label><small class="error">La categoria es requerido.</small>
            </div>
             <div class="small-12 columns">
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
                <label>Marca<small>Requerido</small>
                    <select name="fkMarca" class="chosen-select-no-single">
                        <option value="0" selected>Seleccione una opción...</option>
                    <?php 
                    foreach ($ListaMarcas as $key => $value) {
                        echo "<option value=\"{$key}\">{$value}</option>";
                    }
                    ?>
                    </select>
               </label><small class="error">La marca es requerida.</small>
            </div>
        </div>
         <div class="row">
            <div class="large-6 columns">
                <label>Referencia<small>Requerido</small>
                <input type="text" placeholder="Categoria" name="referencia">
                </label>
            </div>
            <div class="large-6 columns">
                <label>Referencia de proveedor<small>Requerido</small>
                <input type="text" placeholder="Categoria" name="referencia_proveedor">
                </label>
            </div>
        </div>

        <div class="row">
            <div class="small-3 columns">
                <label>Precio<small>Requerido</small>
                <input type="text" placeholder="000.00" name="precio">
                </label><small class="error">El precio del producto es requerido.</small>
            </div>
            <div class="small-3 columns">
                <label>Costo<small>Requerido</small>
                <input type="text" placeholder="000.00" name="costo">
                </label><small class="error">El costo del producto es requerido.</small>
            </div>

           <div class="small-6 columns">
                <label>Código de barras<small>Requerido</small>
                <input type="text" placeholder="Codigo de Barras" name="codigoDeBarras">
                </label><small class="error">El código de barras es requerido.</small>
            </div>
            
        </div>

        <div class="row">
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
            <div class="small-3 columns">
                <label>SKU<small>Requerido</small>
                <input type="text" placeholder="10" name="sku">
                </label><small class="error">SKU o número de referencia es requerido.</small>
            </div>
            <div class="small-3 columns">
                  <label>¿En venta?</label>
                    <select name="enVenta" class="chosen-select-no-single">
                      <option value="true" selected>Si</option>
                      <option value="false">No</option>
                    </select>
            </div>
           
            <input type="hidden" name="esVirtual" value="false"/>
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
            <div class="small-6 columns">
                <label>Fecha de disponibilidad<small>Requerido</small>
                <input type="text" placeholder="10-11-2014" id="fecha_disponible" name="fecha_disponible">
                </label>
            </div>
            <div class="small-3 columns"></div>
            
            <div class="small-3 columns">
                  <label>Estatus<small>Requerido</small>
                    <select name="activo" class="chosen-select-no-single">
                      <option value="true" selected>Activo</option>
                      <option value="false">Inactivo</option>
                    </select>
              </label>
            </div>
            
        </div>

        <div class="row">
            <div class="small-12 columns">
                <table id="IMGATACH" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th></th>
                            <th style="{text-align: center; vertical-align: middle}">
                                <a id="agregar"class="button prefix" style="background-color:rgb(226,5,116);">
                                    Agregar
                                </a>
                            </th>
                            
                        </tr>
                    </thead>
                    <!-- Cuerpo de la tabla con los campos -->
                    <tbody>
                        <!-- fila base para clonar y agregar al final -->
                        <tr class="fila-base">
                            <td>
                                <a class="button postfix">Cargar
                                    <input id="fileInput" type="file" class="buttonFile"  name="IMGS[]"/>
                                    </a>
                            </td>
                            <td><input id="inputText" type="text" placeholder="imagen"disabled="true"></input></td>
                            <td class="eliminar"><input type="button"  value="X" class="button [tiny small large] [radius round]"/>
                                
                            </td>
                        </tr>
                        <!-- fin de código: fila base -->
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="small-3 columns"></div>
            <div class="small-3 columns"></div>
            <div class="small-3 columns"></div>
            <div class="large-3 columns">
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
            var $input=$("#IMGATACH tbody tr:first").get(0).children[1].children[0].value;
            if($input!=null && $.trim($input)!=''){
                $("#IMGATACH tbody tr:eq(0)").clone().removeClass("fila-base").appendTo("#IMGATACH tbody");
                  $("#IMGATACH tbody tr").get(0).children[1].children[0].value ="";
                  var $inputText=$("#IMGATACH tbody tr:last").children().get(1).children[0];
                  $inputText.setAttribute("disabled","true");
                  var $inputText=$("#IMGATACH tbody tr:last").children().get(0).children[0].remove();
             }
        });
        
        // Evento que selecciona la fila y la elimina 
        $(document).on("click",".eliminar",function(){
            var rowCount = document.getElementById('IMGATACH').rows.length;
            rowCount = rowCount-1;
            if(rowCount>=2){
                var parent = $(this).parents().get(0);
                $(parent).remove();
             }else{
                $("#IMGATACH tbody tr:last").get(0).children[1].children[0].value ="";
             }
        });
        
          $('#fileInput').change(function () {
            var $parent = $(this).parents().get(2);
            $parent.children[1].children[0].value = this.value;
        });
        

    });
</script>



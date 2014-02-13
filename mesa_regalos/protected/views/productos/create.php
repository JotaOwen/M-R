<script type="text/javascript">
    $(document).on('ready', function() {
        $("#select").select2();
        $("#address8").select2();
    }); 
</script>



<form action="<?php echo Yii::app()->getBaseUrl().'/productos/insert';?>" method="post">
    <fieldset>
         <legend>
            Nuevo Producto
        </legend>
        <input type="hidden" name="idProducto" value=""/>
        <div class="row">
            <div class="large-12 columns">
                <label>Nombre</label>
                <input type="text" placeholder="Categoria" name="nombre">
            </div>
        </div>

        <div class="row">
             <div class="large-6 columns">
                <label>Categoria</label>
                <?php 
                	$model = Categoria::model()->findAll();	
                	$list = CHtml::listData($model, 'idCategoria', 'nombre');  
					 echo "<select name=\"fkCategoria\">";
					 echo "<option value=\"0\" selected>Seleccione una opción...</option>";
					 foreach ($list as $key => $value) {
						echo "<option value=\"$key\">$value</option>";
					 }
					echo "</select>";
            	?>
            </div>
             <div class="large-6 columns">
                <label>Subcategoria</label>
                <?php 
                	$model = Subcategoria::model()->findAll();	
                	$list = CHtml::listData($model, 'idSubcategoria', 'nombre');  
					 echo "<select name=\"fkSubcategoria\">";
					 echo "<option value=\"0\" selected>Seleccione una opción...</option>";
					 foreach ($list as $key => $value) {
						echo "<option value=\"$key\">$value</option>";
					 }
					echo "</select>";
            	?>
            </div>
        </div>

        <div class="row">
        	<div class="large-6 columns">
                <label>Proveedor</label>
                <?php 
                	$model = Proveedor::model()->findAll();	
                	$list = CHtml::listData($model, 'idProveedor', 'nombre');  
					 echo "<select name=\"fkProveedor\">";
					 echo "<option value=\"0\" selected>Seleccione una opción...</option>";
					 foreach ($list as $key => $value) {
						echo "<option value=\"$key\">$value</option>";
					 }
					echo "</select>";
            	?>
            </div>
             <div class="large-6 columns">
                <label>Marca</label>
                <?php 
                	$model = Marca::model()->findAll();	
                	$list = CHtml::listData($model, 'idMarca', 'nombre');  
					 echo "<select name=\"fkMarca\">";
					 echo "<option value=\"0\" selected>Seleccione una opción...</option>";
					 foreach ($list as $key => $value) {
						echo "<option value=\"$key\">$value</option>";
					 }
					echo "</select>";
            	?>
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
                <input type="text" placeholder="1111111" name="codigoDeBarras">
            </div>
        </div>

         


        <div class="row">

              
             <div class="small-3 columns">
                <label>SKU</label>
                <input type="text" placeholder="10" name="sku">
            </div>
            <div class="small-3 columns">
                  <label>¿En venta?
                    <select name="enVenta">
                      <option value="true" selected>Si</option>
                      <option value="false">No</option>
                    </select>
              </label>
            </div>
            <div class="small-6 columns">
                <label>Unidad de medida</label>
                <?php 
                    $model = UnidadMedida::model()->findAll(); 
                    $list = CHtml::listData($model, 'idUnidadMedida', 'unidad');  
                     echo "<select name=\"fkUnidadMedida\">";
                     echo "<option value=\"0\" selected>Seleccione una opción...</option>";
                     foreach ($list as $key => $value) {
                        echo "<option value=\"$key\">$value</option>";
                     }
                    echo "</select>";
                ?>
            </div>
            <!--div class="small-3 columns">
                  <label>¿Es virtual?
                    <select name="esVirtual">
                      <option value="true">Si</option>
                      <option value="false" selected>No</option>
                    </select>
              </label>
            </div-->
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
            <div class="small-6 columns">
                <label>Fecha de disponibilidad</label>
                <input type="text" placeholder="10-11-2014" name="fecha_disponible">
            </div>
            <div class="small-6 columns">
                  <label>Estatus
                    <select name="activo">
                      <option value="true" selected>Activo</option>
                      <option value="false">Inactivo</option>
                    </select>
              </label>
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

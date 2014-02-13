<script type="text/javascript">
    $(document).on('ready', function() {
        $("#select").select2();
        $("#address8").select2();
    }); 
</script>



<form action="<?php echo Yii::app()->getBaseUrl().'/proveedores/insert';?>" method="post">
    <fieldset>
         <legend>
            Nuevo Proveedor
        </legend>
        <input type="hidden" name="idProveedor" value=""/>
        <div class="row">
            <div class="large-9 columns">
                <label>Nombre</label>
                <input type="text" placeholder="Categoria" name="nombre">
            </div>
			<div class="small-3 columns">
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

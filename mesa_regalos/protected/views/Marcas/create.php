<script type="text/javascript">
    $(document).on('ready', function() {
        $("#select").select2();
        $("#address8").select2();
    }); 
</script>



<form action="<?php //echo Yii::app()->getBaseUrl().'/marcas/insert';?>" method="post">
    <fieldset>
         <legend>
            Nueva Marca
        </legend>
        <input type="hidden" name="idMarca" value=""/>
        <div class="row">
            <div class="large-6 columns">
                <label>Nombre</label>
                <input type="text" placeholder="Categoria" name="nombre">
            </div>

			<div class="large-6 columns">
                <label>Logo</label>
                <div class="row collapse">
                    <div class="small-9 columns">
                        <input type="text" placeholder="Seleccione una imagen" name="logo">
                    </div>
                    <div class="large-3 columns">
                        <a href="#" class="button postfix">Cargar</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            
            <div class="large-9 columns">
                 <label>Descripción breve</label>
                <input type="text" placeholder="" name="descripcionBreve" value="">
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
              <div class="small-12 columns">
                  <label>Descripción Larga</label>
                  <textarea type="text" placeholder="" name="descripcionLarga" value=""></textarea>
                  	    
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

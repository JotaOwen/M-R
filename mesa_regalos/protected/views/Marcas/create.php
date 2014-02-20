<script type="text/javascript">
    $(document).on('ready', function() {
        $('#fileInput').change(function () {
        $('#fileInputText').val(this.value);
        var nombre = this.value.split('.');
      console.log(nombre);
        $('#nuevoNombre').val(nombre[0]);
        console.log( $('#ext').html());
        $('#ext').html('.'+nombre[1]);
    });
    }); 
</script>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/buttonFile.css">

<form data-abide action="<?php echo Yii::app()->getBaseUrl().'/marcas/create'?>" method="post" enctype="multipart/form-data">
<!--form action="<?php //echo Yii::app()->getBaseUrl().'/marcas/insert';?>" method="post"-->
    <fieldset>
         <legend>
            Nueva Marca
        </legend>
        <input type="hidden" name="idMarca" value=""/>
        <div class="row">
            <div class="small-12 columns">
                <label>Nombre<small>Requerido</small>
                  <input type="text" placeholder="Categoria" name="nombre" required pattern="[a-zA-Z]+">
                </label><small class="error">El nombre de la marca es requerido.</small>
            </div>
        </div>

        <div class="row">
        <div class="small-6 columns">
                <label>Logo</label>
                <div class="row collapse">
                    <div class="small-9 columns">
                        <input id="fileInputText" disabled="true" type="text" placeholder="Selecciona logo" >
                    </div>
                    <div class="small-3 columns">
                           <a class="button postfix">Cargar
                           <input id="fileInput" type="file" class="buttonFile" name="imagen"/></a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <label>Nuevo nombre</label>
                 <div class="row collapse">
                    <div class="small-9 columns">
                       <input type="text" id="nuevoNombre" placeholder="imagen" name="nuevoNombre" value="">
                    </div>
                    <div class="small-3 columns">
                           <a id="ext" class="button postfix">.jpg</a>
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="row">
            
            <div class="small-9 columns">
                <label>Descripción breve<small>Requerido</small>
                    <input type="text" placeholder="" name="descripcionBreve" value="" required>
                 </label><small class="error">La descripción es requerida.</small>
            </div>
            <div class="small-3 columns">
              <label>Estatus
                <select name="activo">
                  <option value="true" selected>Activo</option>
                  <option value="false">Inactivo</option>
                </select>
              </label><small class="error">El estatus es requerida.</small>
            </div>
        </div>

        <div class="row">
              <div class="small-12 columns">
                  <label>Descripción Larga</label>
                  <textarea type="text" placeholder="" name="descripcionLarga" value=""></textarea>
                        
            </div>
        </div>

        <div class="row">
            <div class="small-12 columns">
                <input type="submit" class="button [radius round]" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>

<div style="width: 50px;"></div>

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

<form data-abide action="<?php echo $this->createUrl("categorias/create"); ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>
            Nueva Categoria
        </legend>
        <div class="row">
            <div class="large-6 columns">
                <label>Nombre<small>   Requerido</small>
                    <input type="text" placeholder="Categoria" name="nombre" required pattern="[a-zA-Z]+">
                </label><small class="error">El nombre de la categoría es requerido.</small>
            </div>

            <div class="large-6 columns">
                <label>Tags</label>
                <select data-placeholder="Seleccione Tags" name="metas[]" _style="width:350px;" multiple class="chosen-select-no-results" tabindex="11">
                    <option value=""></option>
                    <option>American Black Bear</option>
                    <option>Asiatic Black Bear</option>
                    <option>Brown Bear</option>
                    <option>Giant Panda</option>
                    <option>Sloth Bear</option>
                    <option>Sun Bear</option>
                    <option>Polar Bear</option>
                    <option>Spectacled Bear</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="large-3 columns">
                <label>Imagen</label>
                <div class="row collapse">
                    <div class="small-9 columns">
                        <input id="fileInputText" disabled="true" type="text" placeholder="Selecciona imagen" >
                    </div>
                    <div class="large-3 columns">
                           <a class="button postfix">Cargar
                           <input id="fileInput" type="file" class="buttonFile" name="imagen"/></a>
                    </div>
                </div>
            </div>
            <div class="small-3 columns">
                <label>Nuevo nombre</label>
                 <div class="row collapse">
                    <div class="small-9 columns">
                       <input type="text" id="nuevoNombre" placeholder="imagen" name="nuevoNombre" value="">
                    </div>
                    <div class="large-3 columns">
                           <a id="ext" class="button postfix">.jpg</a>
                    </div>
                </div>
                
            </div>
            <div class="small-3 columns">
                <label>Posición</label>
                <input type="text" placeholder="10" name="posicion" value="">
            </div>
            

            <div class="small-3 columns">
                <label>Estatus<small>   Requerido</small>
                    <select name="activo">
                        <option value="true" selected>Activo</option>
                        <option value="false">Inactivo</option>
                    </select> </label>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <input type="submit" class="button [tiny small large]" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>

<div style="width: 50px;"></div>

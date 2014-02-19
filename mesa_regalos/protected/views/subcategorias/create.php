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
<form data-abide action="<?php echo Yii::app()->getBaseUrl().'/subcategorias/insert'?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>
            Nueva Subcategoria
        </legend>
        <input type="hidden" name="idSubCategoria" value=""/>
        <div class="row">
            <div class="large-6 columns">
                <label>Nombre<small>   Requerido</small>
                    <input type="text" placeholder="Subcategoria"  required pattern="[a-zA-Z]+" name="nombre">
                </label><small class="error">El nombre de la subcategoría es requerido.</small>
            </div>
            <div class="large-6 columns">
                <label>Categoria<small>   Requerido</small>
                <?php 
                    $model = Categoria::model()->findAll(); 
                    $list = CHtml::listData($model, 'idCategoria', 'nombre');  
                     echo "<select name=\"fkCategoria\" required>";
                     echo "<option value=\"\" selected>Seleccione una opción...</option>";
                     foreach ($list as $key => $value) {
                        echo "<option value=\"$key\">$value</option>";
                     }
                    echo "</select>";
                ?>
            </label><small class="error">Seleccione la categoria correspondiente.</small>
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
            <div class="large-3 columns">
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
            <div class="small-6 columns">
                <label>Tags</label>
                <input type="text" placeholder="large-4.columns" name="metas" value="">
            </div>
          
             
        </div>

        <div class="row">
            
            <div class="small-3 columns">
                <label>Posición</label>
                <input type="text" placeholder="large-4.columns" name="posicion" value="">
            </div>

            <div class="small-3 columns">
                  <label>Estatus<small>   Requerido</small>
                    <select name="activo">
                      <option value="true" selected>Activo</option>
                      <option value="false">Inactivo</option>
                    </select>
              </label>
            </div>
            <div class="small-6 columns">
                </div>
            
        </div>
        
        <div class="row">
            <div class="large-12 columns left">
                <input type="submit" class="button [radius round]" value="Guardar" />
            </div>
        </div>
    </fieldset>
</form>

<div style="width: 50px;"></div>

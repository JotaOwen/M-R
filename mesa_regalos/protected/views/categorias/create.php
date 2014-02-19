<script type="text/javascript">
    $(document).on('ready', function() {
        //$("#select").select2();
    }); 
</script>

<form action="<?php echo $this->createUrl("categorias/create"); ?>" method="post">
    <fieldset>
        <legend>
            Nueva Categoria
        </legend>
        <div class="row">
            <div class="large-6 columns">
                <label>Nombre</label>
                <input type="text" placeholder="Nombre de Categoria" name="nombre">
            </div>

            <div class="large-6 columns">
                <label>Tags</label>
                <input type="text" placeholder="Meta Tags" name="metas">
            </div>
        </div>

        <div class="row">
            <div class="large-6 columns">
                <label>Imagen</label>
                <div class="row collapse">
                    <div class="small-9 columns">
                        <input type="text" placeholder="Seleccione una imagen" name="imagen">
                    </div>
                    <div class="large-3 columns">
                        <a href="#" class="button postfix">Cargar</a>
                    </div>
                </div>
            </div>
            <div class="small-3 columns">
                <label>Posición</label>
                <input type="text" placeholder="Posición" name="posicion" value="">
            </div>

            <div class="small-3 columns">
                <label>Estatus
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

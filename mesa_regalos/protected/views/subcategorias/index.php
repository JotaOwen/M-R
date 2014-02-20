
<script type="text/javascript">
    $(document).on('ready',function() {
        oTable1 = $('table[id="Table_Subcategories"]')
            .dataTable( {
            "sPaginationType": "full_numbers",
             "sDom": 'T<"clear">lfrtip',
        });
        
        $('a[name="OpenEditModal"]').click(function() {
            $('#EditID').val($(this).attr('id'));
            $('#EditName').val($(this).attr('nombre'));
            $('#EditPosicion').val($(this).attr('posicion'));
            $('#EditImagen').val($(this).attr('imagen'));
            $('#EditFkCategoria').val($(this).attr('fkCategoria'));
            $('#EditMetas').val($(this).attr('metas'));
            $('#EditModal').foundation('reveal', 'open');
        });
        //$('#myModal').foundation('reveal', 'close');
        
    });
</script>

<div id="EditModal" class="reveal-modal" data-reveal style="float:center; width: 30%;" >
    <!-- <h2>Editar Categoria .</h2> -->
    <p class="lead">Editar Marca.</p>
    <p>
        <input id="EditID" type="hidden" />
        <div class="row">
            <div class="small-6 columns">
                <label>Nombre</label>
                <input id="EditName" type="text" value="" />
            </div>
        </div>
        <div class="row">
            <div class="small-6 columns">
                <label>Categoría</label>
                <input id="EditFkCategoria" type="text" />
            </div><div class="clear"></div>
        </div>
        <div class="row">
            <div class="small-6 columns">
                <label>Posición</label>
                <input id="EditPosicion" type="text" />
            </div><div class="clear"></div>
        </div>
        <div class="row">
            <div class="small-6 columns">
                <label>Tags</label>
                <input id="EditMetas" type="text" />
            </div><div class="clear"></div>
        </div>
        <div class="row">
            <div class="small-6 columns">
                <label>Imagen</label>
                <textarea id="EditImagen"> </textarea>
            </div><div class="clear"></div>
        </div>
        <div class="small-6 columns">
            <input type="button" class="button [tiny small large]" value="Guardar" />
        </div><div class="clear"></div>
    </p>
    <a class="close-reveal-modal">&#215;</a>
</div>


<?php FB::INFO($SubcategoriesData,'_________________');  ?>
<h5>Administrar Subcategorias</h5>

<!--
 * @property integer $idSubcategoria
 * @property integer $activo
 * @property string $fechaDeCreacion
 * @property integer $posicion
 * @property string $imagen
 * @property string $metas
  * @property integer $fkCategoria
) 
-->
<table id="Table_Subcategories">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <!--th>Img</th-->
            <th>Posicion</th>
            <!--th>Creado</th-->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($SubcategoriesData as $Data){ ?>
        <tr>
            <td><?php echo $Data['idSubcategoria']; ?></td>
            <td><?php echo $Data['nombre']; ?></td>
            <td><?php echo $Data['posicion']; ?></td>
            <td>
                <a name="OpenEditModal" id="<?=$Data['idSubcategoria']?>" posicion="<?=$Data['posicion']?>" 
                    imagen="<?=$Data['imagen']?>" metas="<?=$Data['metas']?>" nombre="<?=$Data['nombre']?>" 
                    fkCategoria="<?=$Data['fkCategoria']?>">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pencil.png" data-tooltip class="has-tip"  title="Editar Subcategoria" />
                </a>
                <a href="<?php echo $this->createUrl("marcas/delete"); ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cross.png" data-tooltip class="has-tip"  title="Eliminar Categoria" /></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



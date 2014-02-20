
<script type="text/javascript">
    $(document).on('ready',function() {
        oTable1 = $('table[id="Table_Providers"]')
            .dataTable( {
            "sPaginationType": "full_numbers",
             "sDom": 'T<"clear">lfrtip',
        });
        
        $('a[name="OpenEditModal"]').click(function() {
            $('#EditID').val($(this).attr('id'));
            $('#EditName').val($(this).attr('nombre'));
            $('#EditModal').foundation('reveal', 'open');
        });
        //$('#myModal').foundation('reveal', 'close');
    });
</script>

<div id="EditModal" class="reveal-modal" data-reveal style="float:center; width: 50%;" >
    <!-- <h2>Editar Categoria .</h2> -->
    <p class="lead">Editar Categoria.</p>
    <p>
        <input id="EditID" type="hidden" />
        <div class="small-6 columns">
            <label>Nombre</label>
            <input id="EditName" type="text" value="" />
        </div>
        <div class="small-3 columns">
            <input type="button" class="button [tiny small large]" value="Guardar" />
        </div><div class="clear"></div>
    </p>
    <a class="close-reveal-modal">&#215;</a>
</div>


<?php FB::INFO($ProvidersData,'_________________');  ?>
<h5>Administrar Proveedores</h5>

<!--
* @property integer $idProveedor
 * @property string $nombre
 * @property string $fechaDeCreacion
 * @property integer $activo
-->
<table id="Table_Providers">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
			<th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ProvidersData as $Data){ ?>
        <tr>
            <td><?php echo $Data['idProveedor']; ?></td>
            <td><?php echo $Data['nombre']; ?></td>
            <td>
                <a name="OpenEditModal" id="<?=$Data['idProveedor']?>" nombre="<?=$Data['nombre']?>" 
                	activo="<?=$Data['activo']?>" >
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pencil.png" data-tooltip class="has-tip"  title="Editar Proveedores" />
                </a>
                <a href="<?php echo $this->createUrl("proveedores/delete"); ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cross.png" data-tooltip class="has-tip"  title="Eliminar Categoria" /></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



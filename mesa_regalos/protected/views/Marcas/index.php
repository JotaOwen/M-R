
    <script type="text/javascript">
        $(document).on('ready',function() {
            oTable1 = $('table[id="Table_Brands"]')
                .dataTable( {
                "sPaginationType": "full_numbers",
                 "sDom": 'T<"clear">lfrtip',
            });
            
            $('a[name="OpenEditModal"]').click(function() {
                $('#EditID').val($(this).attr('id'));
                $('#EditName').val($(this).attr('nombre'));
                $('#EditDescripcionBreve').val($(this).attr('descripcionBreve'));
                $('#EditDescripcionLarga').val($(this).attr('descripcionLarga'));
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
                    <label>Descripción breve</label>
                    <input id="EditDescripcionBreve" type="text" />
                </div><div class="clear"></div>
            </div>
            <div class="row">
                <div class="small-6 columns">
                    <label>Descripción Larga</label>
                    <textarea id="EditDescripcionLarga"> </textarea>
                </div><div class="clear"></div>
            </div>
            <div class="small-6 columns">
                <input type="button" class="button [tiny small large]" value="Guardar" />
            </div><div class="clear"></div>
        </p>
        <a class="close-reveal-modal">&#215;</a>
    </div>


    <?php FB::INFO($BrandsData,'_________________');  ?>
    <h5>Administrar Marcas</h5>

    <!--
    * @property integer $idMarca
     * @property string $nombre
     * @property string $fechaDeCreacion
     * @property integer $activo
     * @property string $logo
     * @property string $descripcionBreve
     * @property string $descripcionLarga
    ) 
    -->
    <table id="Table_Brands">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción breve</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($BrandsData as $Data){ ?>
            <tr>
                <td><?php echo $Data['idMarca']; ?></td>
                <td><?php echo $Data['nombre']; ?></td>
                <td><?php echo $Data['descripcionBreve']; ?></td>
                <td>
                    <a name="OpenEditModal" id="<?=$Data['idMarca']?>" nombre="<?=$Data['nombre']?>" 
                        logo="<?=$Data['logo']?>" descripcionBreve="<?=$Data['descripcionBreve']?>" 
                        descripcionLarga="<?=$Data['descripcionLarga']?>">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pencil.png" data-tooltip class="has-tip"  title="Editar Marca" />
                    </a>
                    <a href="<?php echo $this->createUrl("marcas/delete"); ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cross.png" data-tooltip class="has-tip"  title="Eliminar Categoria" /></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>



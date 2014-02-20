
<script type="text/javascript">
    $(document).on('ready',function() {
        oTable1 = $('table[id="Table_Products"]')
            .dataTable( {
            "sPaginationType": "full_numbers",
             "sDom": 'T<"clear">lfrtip',
        });
        
        $('a[name="OpenEditModal"]').click(function() {
            $('#EditID').val($(this).attr('id'));
            $('#EditName').val($(this).attr('nombre'));
            $('#EditPosicion').val($(this).attr('posicion'));
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
            <label>Posicion</label>
            <input id="EditPosicion" type="text" />
        </div><div class="clear"></div>
        <div class="small-3 columns">
            <input type="button" class="button [tiny small large]" value="Guardar" />
        </div><div class="clear"></div>
    </p>
    <a class="close-reveal-modal">&#215;</a>
</div>


<?php FB::INFO($ProductsData,'_________________');  ?>
<h5>Administrar Productos</h5>

<!--
[0] =>
array(
['idProducto'] =>1
['fkProveedor'] =>1
['fkMarca'] =>1
['fkCategoria'] =>6
['fkSubcategoria'] =>1
['enVenta'] =>1
['codigoDeBarras'] =>00134679853138
['precio'] =>4500.0000
['costo'] =>5000.0000
['referencia'] =>'RER754893125'
['sku'] =>10
['referencia_proveedor'] =>'RER754893125'
['alto'] =>
['ancho'] =>
['largo'] =>
['peso'] =>
['activo'] =>1
['fechaDeCreacion'] =>'2014-02-13 14:06:25'
['fecha_disponible'] =>'2014-02-13 14:06:25'
['esVirtual'] =>0
['nombre'] =>'LG P769'
['fkUnidadMedida'] =>1
) 
-->
<table id="Table_Products">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <!--th>Img</th>
            <th>Marca</th>
            <th>Categoria</th-->
            <th>Costo</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ProductsData as $Data){ ?>
        <tr>
            <td><?php echo $Data['idProducto']; ?></td>
            <td><?php echo $Data['nombre']; ?></td>
            <!--td><?php echo $Data['imagen']; ?></td>
            <td><?php echo $ListaMarcas[$Data['fkMarca']]; ?></td>
            <td><?php echo $ListaCategorias[$Data['fkCategoria']]; ?></td-->
            <td class="price"><?php echo $Data['costo']; ?></td>
            <td class="price"><?php echo $Data['precio']; ?></td>
            <td>
                <a name="OpenEditModal" id="<?=$Data['idCategoria']?>" nombre="<?=$Data['nombre']?>" posicion="<?=$Data['posicion']?>" >
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pencil.png" data-tooltip class="has-tip"  title="Editar Categoria" />
                </a>
                <a href="<?php echo $this->createUrl("categorias/delete"); ?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cross.png" data-tooltip class="has-tip"  title="Eliminar Categoria" /></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



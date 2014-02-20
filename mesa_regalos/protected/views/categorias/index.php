
<script type="text/javascript">
    $(document).on('ready',function() { //GetDataTableContent
        
        //Create DataTable
        oTable1 = $('table[id="Table_Category"]')
            .dataTable( {
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
                "bProcessing": true,
                "bServerSide": true,
                "sAjaxSource": "<?php echo $this->createUrl("categorias/getdatatablecontent"); ?>",
                "fnServerData": function ( sSource, aoData, fnCallback ) {
                    $.ajax( {
                        "dataType": 'json', 
                        "type": "POST", 
                        "url": sSource, 
                        "data": aoData, 
                        "success": fnCallback
                    } );
                }
        });
        
        
        
        
        
        //Load Vars
        $('a[name="OpenEditModal"]').click(function() {
            $('#EditID').val($(this).attr('id'));
            $('#EditName').val($(this).attr('nombre'));
            $('#EditPosicion').val($(this).attr('posicion'));
            $('#EditModal').foundation('reveal', 'open');
        });
        
        //Update & Response
        $("#UpdateCategory").click(function() {
            var jqxhr = $.ajax({
                url: "<?php echo $this->createUrl("categorias/updateajx"); ?>",
                type: "POST",
                dataType : "json",
                timeout : (120 * 1000),
                data: {
                      Categoria:{
                          idCategoria: $('#EditID').val(),
                          nombre: $('#EditName').val(),
                          posicion: $('#EditPosicion').val()
                      },
                },
                success : function(data, newValue) { //ajaxSuccess,
                    if (data.requestresult == 'ok') {
                        displayNotify('success', data.message);
                        //replaceText = "<tr><td>Some label3</td><td>Some data3</td></tr>";
                        //alert($('tr[id="6"]').parents("tr:first").outerHTML());
                         $('#Table_Category tbody').html(data.content);
                    }
                },
                error : ajaxError
            })
            .done(function() {
                //
                //replaceText = "<tr><td>Some label3</td><td>Some data3</td></tr>";
                //$('tr[id="'+ idCategoria +'"]').parent().html(replaceText);
            })
            .fail(function() {
                //alert( "error" );
            })
            .always(function() {
                $('#EditModal').foundation('reveal', 'close');
            });
        });
        
    });
</script>

<div id="EditModal" class="reveal-modal" data-reveal style="float:center; width: 50%;" >
    <!-- <h2>Editar Categoria .</h2> -->
    <p class="lead">Editar Categoria</p>
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
            <input type="button" class="button [tiny small large]" id="UpdateCategory" value="Guardar" />
        </div><div class="clear"></div>
    </p>
    <a class="close-reveal-modal">&#215;</a>
</div>


<?php FB::INFO($CategoryData,'_________________');  ?>
<h4>Administrar Categorias</h4>
<table id="Table_Category" class="">
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
        <?php foreach($CategoryData as $Data){ ?>
        <tr id="<?php echo $Data['idCategoria']; ?>">
            <td><?php echo $Data['idCategoria']; ?></td>
            <td><?php echo $Data['nombre']; ?></td>
            <!--td><?php echo $Data['imagen']; ?></td-->
            <td><?php echo $Data['posicion']; ?></td>
            <!--td><?php echo $Data['fechaDeCreacion']; ?></td-->
            <td>
                <a name="OpenEditModal" id="<?=$Data['idCategoria']?>" nombre="<?=$Data['nombre']?>" posicion="<?=$Data['posicion']?>" >
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/pencil.png" data-tooltip class="has-tip"  title="Editar Categoria" />
                </a>
                <a href="<?php echo $this->createUrl("categorias/delete"); ?>">
                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/cross.png" data-tooltip class="has-tip"  title="Eliminar Categoria" />
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>



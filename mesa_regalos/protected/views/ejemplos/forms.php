
<script type="text/javascript">
    
    var onloadDTable1 = function (){
        
    }
    $(document).on('ready',function() {
        
        var oTable1;
        $(document).ready(function() {
            oTable1 = $('table[id="table_id"]')
                .bind('processing',
                    function (e, oSettings, bShow) {
                        if (bShow) {
                            $('table[id="table_id"]').block();
                        } else {
                            $('table[id="table_id"]').unblock();
                        }})
                .dataTable( {
                "aoColumns": [ 
                    { "sWidth": "5%" },
                    { "sWidth": "10%" },
                    { "sWidth": "15%", "bSearchable": false, "bSortable": false }
                    ],
                "sPaginationType": "full_numbers",
                
                "sDom": 'T<"clear">lfrtip',
                "oTableTools": {
                    "sSwfPath": "<?php echo Yii::app()->theme->baseUrl;?>/css/copy_csv_xls_pdf.swf"
                }
                
            });
            $('div[id="table_id_length"] select').addClass('span2');
            $('div[id="table_id_paginate"]').addClass('pagination');
        });
    
    });

</script>


<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
 ?>

<select data-placeholder="Your Favorite Type of Bear" style="width:350px;" class="chosen-select-no-single" tabindex="9">
    <option value=""></option>
    <option>American Black Bear</option>
    <option>Asiatic Black Bear</option>
    <option>Brown Bear</option>
    <option>Giant Panda</option>
    <option selected disabled>Sloth Bear</option>
    <option disabled>Sun Bear</option>
    <option selected disabled>Paddington Bear</option>
    <option selected>Polar Bear</option>
    <option disabled>Spectacled Bear</option>
</select>
<br />
<br />
<select data-placeholder="Type 'C' to view" style="width:350px;" multiple class="chosen-select-no-results" tabindex="11">
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
<br />
<br />
<select data-placeholder="Your Favorite Type of Bear" style="width:350px;" class="chosen-select-deselect" tabindex="12">
    <option value=""></option>
    <option>American Black Bear</option>
    <option>Asiatic Black Bear</option>
    <option>Brown Bear</option>
    <option>Giant Panda</option>
    <option selected>Sloth Bear</option>
    <option>Sun Bear</option>
    <option>Polar Bear</option>
    <option>Spectacled Bear</option>
</select>
<br />
<br />
<select data-placeholder="Your Favorite Types of Bear" style="width:350px;" multiple class="chosen-select  chosen-rtl" tabindex="14">
    <option value=""></option>
    <option>American Black Bear</option>
    <option>Asiatic Black Bear</option>
    <option>Brown Bear</option>
    <option>Giant Panda</option>
    <option selected>Sloth Bear</option>
    <option selected>Polar Bear</option>
</select>
<br />
<br />
<select data-placeholder="Your Favorite Types of Bear" class="chosen-select-no-results" style="width:350px;" tabindex="17" id="single-label-example">
    <option value=""></option>
    <option selected>American Black Bear</option>
    <option>Asiatic Black Bear</option>
    <option>Brown Bear</option>
    <option>Giant Panda</option>
    <option>Sloth Bear</option>
    <option>Sun Bear</option>
    <option>Polar Bear</option>
    <option>Spectacled Bear</option>
</select>

<table id="table_id" class="table table-striped table-hover" style="float: left;">
    <div style="height: 30px"></div>
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>etc</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
                <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
        </tr>
                <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
        </tr>
                <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
        </tr>
                <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
        </tr>
                <tr>
            <td>Row 1 Data 3</td>
            <td>Row 1 Data 2</td>
            <td>etc</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>etc</td>
        </tr>
    </tbody>
</table>
<div style="height: 100px"></div>

<section id="why" class="clearfix mg4">
    <div class="container">

    </div>
</section>

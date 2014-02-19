<?php


// ubicaciòn:   themes/found/views/site/   


/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation/foundation.orbit.js"></script>

<h2> <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>


<div class="orbit-container">
    <ul class="example-orbit" data-orbit>
        <li class="" style="z-index: 2; margin-left: 100%;">
            <img src="http://192.241.166.215/justo/mesa-r/images/Slider1.jpg" alt="slide 1">
            <!--<div class="orbit-caption">
                Caption One.
            </div>-->
        </li>
        <li class="active" style="z-index: 4; margin-left: 0%;">
            <img src="http://192.241.166.215/justo/mesa-r/images/Slider2.jpg" alt="slide 2">
            <!--<div class="orbit-caption">
                Caption Two.
            </div>-->
        </li>
        <li>
            <img src="http://192.241.166.215/justo/mesa-r/images/Slider3.jpg" alt="slide 3">
            <!--<div class="orbit-caption">
                Caption Three.
            </div>-->
        </li>
    </ul>
</div>


<?php //:::::::::::::::::::::::: CAMBIOS:  Se agregaron las imagenes del slider  ?>

<div style="height: 30px;"></div>
<h4 id="block-grid">Catálogo</h4>
<ul class="small-block-grid-2 large-block-grid-4">
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal1.jpg"></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal2.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal3.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal4.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal5.jpg"></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal6.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal8.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal9.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal7.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal10.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal11.jpg""></li>
  <li><img class="th" src="http://192.241.166.215/justo/mesa-r/images/gal12.jpg""></li>
</ul>
<?php //:::::::::::::::::::::::::::::: FIN Se agregaron las imagenes del slider  ?>




<script>
    $(document).foundation({
      orbit: {
        animation: 'slide',
        timer_speed: 2000,
        pause_on_hover: true,
        animation_speed: 500,
        navigation_arrows: true,
        bullets: false,
        next_on_click: true
      }
    });
</script>

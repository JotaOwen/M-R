<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation/foundation.orbit.js"></script>

<h2> <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>


<div class="orbit-container">
    <ul class="example-orbit" data-orbit>
        <li class="" style="z-index: 2; margin-left: 100%;">
            <img src="http://foundation.zurb.com/docs/assets/img/examples/satelite-orbit.jpg" alt="slide 1">
            <div class="orbit-caption">
                Caption One.
            </div>
        </li>
        <li class="active" style="z-index: 4; margin-left: 0%;">
            <img src="http://foundation.zurb.com/docs/assets/img/examples/andromeda-orbit.jpg" alt="slide 2">
            <div class="orbit-caption">
                Caption Two.
            </div>
        </li>
        <li>
            <img src="http://foundation.zurb.com/docs/assets/img/examples/launch-orbit.jpg" alt="slide 3">
            <div class="orbit-caption">
                Caption Three.
            </div>
        </li>
    </ul>
</div>


<div style="height: 30px;"></div>
<h4 id="block-grid">Catalogo</h4>
<ul class="small-block-grid-2 large-block-grid-4">
  <li><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/comet-th.jpg"></li>
  <li><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/launch-th.jpg"></li>
  <li><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/space-th.jpg"></li>
  <li><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/spacewalk-th.jpg"></li>
</ul>





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



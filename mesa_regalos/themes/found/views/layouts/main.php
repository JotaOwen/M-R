<?php /* @var $this Controller */ ?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <!-- <title>Foundation | Welcome</title> -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/normalize.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/foundation.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/foundation.min.css" />
        
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prism.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/chosen.css" rel="stylesheet">
        
        <!--<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/data-tables-style.css" rel="stylesheet">-->
        
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/data-table.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/TableTools.css" rel="stylesheet">  
        
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/jquery.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/modernizr.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation/foundation.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.textareaCounter.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/elrte.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/elrte.en.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/select2.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.dataTables.min.js"></script>
        
        
        
    </head>

    <body>

        <div class="row">
            <div class="row">
                <div class="large-12 columns">
                    
                    <nav class="top-bar" data-topbar="">
                        <!-- Title -->
                        <ul class="title-area">
                            <li class="name"><h1><a href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a></h1></li>
                            <!-- Mobile Menu Toggle -->
                            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                        </ul>
                        <!-- Top Bar Section -->
                        <section class="top-bar-section">
                            <!-- Top Bar Left Nav Elements -->
                            <ul class="left" >
                                <li class="divider"></li>
                              <!-- Anchor -->
                              <li><a href="#">Inicio</a></li>
                              <li class="divider"></li>
                            </ul>
                            <!-- Top Bar Right Nav Elements -->
                            <ul class="right">
                                <!-- Divider -->
                                <li class="divider"></li>
                                <!-- Dropdown -->
                                <li class="has-dropdown not-click"><a href="http://zurb.com">Categorias</a>
                                    <ul class="dropdown">
                                        <li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
                                        <li><label>Level One</label></li>
                                        <li><a href="#">Sub-item 1</a></li>
                                        <li><a href="#">Sub-item 2</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Sub-item 3</a></li>
                                        <li class="has-dropdown not-click"><a href="#">Subcategoria</a>
                                            <!-- Nested Dropdown -->
                                            <ul class="dropdown">
                                                <li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
                                                <li><label>Level Two</label></li>
                                                <li><a href="#">Sub-item 2</a></li>
                                                <li><a href="#">Sub-item 3</a></li>
                                                <li><a href="#">Sub-item 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Sub-item 5</a></li>
                                    </ul>
                                </li>
                              <li class="divider"></li>
                              <!-- Anchor -->
                              <li><a href="#">Categorias</a></li>
                              <li class="divider"></li>
                              <!-- Button -->
                              <li class="has-form show-for-large-up">
                                  <a href="#" class="button">Get Lucky</a>
                              </li>
                            <li class="has-form">
                                <div class="row collapse">
                                    <div class="large-8 small-9 columns">
                                        <input type="text" placeholder="Buscar..." style=" height: 1.95rem;">
                                    </div>
                                    <div class="large-4 small-3 columns">
                                        <a href="#" class="alert button expand">Buscar</a>
                                    </div>
                                </div>
                            </li>
                          </ul>
                      </section>
                  </nav>
              </div>
            </div>
            <!--
            <div id="mainmenu">
                <?php/* $this->widget('zii.widgets.CMenu', array('items' => array(
                        array(
                            'label' => 'Home',
                            'url' => array('/site/index')
                        ),
                        array(
                            'label' => 'About',
                            'url' => array(
                                '/site/page',
                                'view' => 'about'
                            )
                        ),
                        array(
                            'label' => 'Contact',
                            'url' => array('/site/contact')
                        ),
                        array(
                            'label' => 'Login',
                            'url' => array('/site/login'),
                            'visible' => Yii::app()->user->isGuest
                        ),
                        array(
                            'label' => 'Logout (' . Yii::app()->user->name . ')',
                            'url' => array('/site/logout'),
                            'visible' => !Yii::app()->user->isGuest
                        )
                    ), )); */
                    ?>
            </div>--><!-- mainmenu -->
        	<?php if(isset($this->breadcrumbs)):?>
        		<?php $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs, )); ?><!-- breadcrumbs -->
        	<?php endif ?>

            <div class="row">
              <div class="large-12 columns">
                <div class="panel">
                    <?php echo $content; ?>
                </div>
              </div>
            </div>

            <div class="clear"></div>

            <div class="row">
                <div class="large-12 columns">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
                </div>
            </div>
        </div>
        
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen.jquery.js" type="text/javascript"></script>
      <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/prism.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
        var config = {
            '.chosen-select' : {},
            '.chosen-select-deselect' : {
                allow_single_deselect : true
            },
            '.chosen-select-no-single' : {
                disable_search_threshold : 10
            },
            '.chosen-select-no-results' : {
                no_results_text : 'No se encontraron Resultados!'
            },
            '.chosen-select-width' : {
                width : "95%"
            }
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
      </script>
        
    </body>
</html>

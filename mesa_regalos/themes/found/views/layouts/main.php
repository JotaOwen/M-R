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
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <!--<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/foundation.min.css" />-->
        
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/prism.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/chosen.css" rel="stylesheet">
        
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/data-table.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datatables/TableTools.css" rel="stylesheet">
        
        
        
        
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/jquery.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/vendor/modernizr.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation/foundation.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/foundation.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/menu.js"></script>
        
        
        
        <!--Filtro<script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.min.js"></script> -->

        <script>
			$(document).foundation();
        </script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.textareaCounter.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/elrte.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/elrte.en.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jquery.dataTables.min.js"></script>
        
      <!--Arreglar-->  
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">  		
  		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  		
       <!--Fin Arreglar-->  
        
    </head>

    <body>

        <div class="row">
        <div class="large-12 columns">
                 
        <?php //este es el header ?>
        
        
        
<!--Codigo anexado del prototipo html-->
			<div class="row">
				<div class="large-12 columns">
					<!--Menu superior-->
					<nav class="top-bar" data-topbar="">
						<section class="top-bar-section">
							<!-- Right Nav Section -->
							<ul class="left">
								<!--<li class="active"><a href="#">Right Button Active</a></li>-->
								<li>
									<a href="#">Mi cuenta</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Registrarse</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">Lista de regalos</a>
								</li>
								<li class="divider"></li>
								<li class="has-dropdown">
									<a href="#">Ayuda</a>
									<ul class="dropdown">
										<li>
											<a href="#">Faq</a>
										</li>
									</ul>
								</li>
								<!--<li class="divider"></li>
								<li class="has-form">
									<div class="row collapse">
										<div class="large-8 small-9 columns">
											<input type="text" placeholder="Buscar..." style=" height: 1.95rem;">
										</div>
										<div class="large-4 small-3 columns">
											<a href="#" class="alert button expand">Buscar</a>
										</div>
									</div>
								</li>-->
							</ul>
						</section>
					</nav>
				</div>
			</div>	
				
				<!--Logotipo-->
			<div class="row">
				<div class="large-9 columns">
					<!--Logotipo -->
					<h1 class="medium-3 columns" id="logop"><a href="#"><span>Logo</span></a></h1>
				</div>
				
				
				<div class="large-3 columns">
				<nav class="top-bar" data-topbar="">
						<section class="top-bar-section">
							<!-- Right Nav Section -->
							<ul class="right">
																
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
			
			
				
			
		<!--FIN Logotipo-->	
		<!-- Main Menu-->
			<div class="row">
				<div class="large-12 columns">			
				<nav class="nav-bar">			
				  <div class="nav-hold"> <p class="textmenu">MENU</p>
				  <a id="nav-menu" class="nav-menu">
				    	&#9776;
				    </a>
				    <ul class="nav-list" id="nav">
				      <li><a href="#">Inicio</a></li>
				      <li><a href="#">Politicas de Envio</a></li>
				      <li><a href="#">Formas de pago</a></li>
				      <li><a href="#">Cliente Frecuente</a></li>
				      <li><a href="#">Cobertura</a></li>
				      <li><a href="#">Contacto</a></li>
				    </ul>
				    
				  </div>
				</nav>
						<!-- Fin Main Menu-->		
				<!--Menu inicial Version 1-->
					<!--<nav class="main-menu">
						<ul class="menu">
							<li>
								<a href="#">INICIO</a>
							</li>
							<li>
								<a href="#">SHOP</a>
							</li>
							
							<li>
								<a href="#">INFORMACION</a>
							</li>
							<li>
								<a href="#">IDEAS DE BODA</a>
							</li>

							<li>
								<a class="cate" href="#">CATEGORIAS</a>
								<ul>
									<li>
										<a href="#">HOGAR</a>
									</li>
									<li>
										<a href="#">BLANCOS</a>
									</li>
									<li>
										<a href="#">ELECTRONICA</a>
									</li>
									<li>
										<a href="#">MUEBLES</a>
									</li>
								</ul>
							</li>
						</ul>

					</nav>-->
					
					
					<!--Menu inicial Version 1-->	
				</div>
			</div> <!-- Termina Main menu-->
			</div>
     
         <!--Fin Codigo anexado del prototipo html-->
 		
		
		
    <?php //contenido de los demas views ?>
        	<?php if(isset($this->breadcrumbs)):?>
        		<?php $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs, )); ?><!-- breadcrumbs -->
        	<?php endif ?>

            <div class="row">
            <div class="large-12 columns">
              <div class="large-3 columns">
                <div class="panel">
                
					<!--Inicio filtros-->
					<form>
					
					  
					  <div class="row">					  
					    <div class="large-12 columns">
					    <h5 class="categorias">Categorías</h5>
					      <label>
					        <select>
					          <option value="husker">Hogar</option>
					          <option value="starbuck">Electrónica</option>
					          <option value="hotdog">Muebles</option>
					          <option value="apollo">Blancos</option>
					        </select>
					      </label>
					    </div>
					  </div>
					  
					  <div class="row">					  
							   <div class="large-12 columns">					  
								   <p>
									  <label for="amount">Rango Precio:</label>
									  <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
								   </p>
									 
									<div id="slider-range"></div> 
								</div> 
					  </div>
					  
					  <div class="row">
					    <div class="large-12 columns">
					    </br>
					      <label>Elige tu favorito:</label>
					      <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
					      <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
					    </div>
					    
					  </div>
					 
					</form>
					                
					 <!--Fin filtros-->
                
                    <?php //aki metes el panel izquierdo ?>
                </div>
                
                
              </div>
              
              
              
              
              
              <div class="large-9 columns">
                <div class="panel">
                    <?php echo $content; ?>
                </div>
              </div>
             </div> 
            </div>
                         
            <div class="clear"></div>
<?php //este el footer ?>
            <div class="row">
                <div class="large-12 columns">
                
                <div class="row">
				  <div class="large-3 columns">
				    <h5 class="tit_footer">Contáctanos</span></h5>
				  		<span class="infomr">
				  			<b>Correo electrónico:</b><br />
							clientes@mesaderegalos.com						
						</span>
						<span class="infomr">
						<br />
						<br />
				  			<b>México</b><br />
							Monterrey: +52 (81) 12345 6789
							DF: +52 (55) 1234 79101<br />
							Guadalajara: +52 (33) 1234 7891<br />
							Querétaro: +52 (442)123 5678						
						</span>
						
						<span class="infomr">
						<br />
						<br />
				  			<b>Lada Nacional Sin Costo:</b><br />
							01 800 000 11 00
							<br />
							<b>Lada Internacional Sin Costo EUA:</b>
							1866 123 4560<br />
													
						</span>
				  </div>
				  <div class="large-3 columns">
				  	<h5 class="tit_footer">Ayuda & Información</h5>
				  	<ul class="infomr">				  		
				  			<li><a class="link-footer" ="#">¿Cómo comprar?</a></li>						
				  			<li><a class="link-footer" ="#">Políticas de Envío</a></li>
				  			<li><a class="link-footer" ="#">Cobertura</a></li>
				  			<li><a class="link-footer" ="#">Formas de Pago</a></li>
				  			<li><a class="link-footer" ="#">Preguntas Frecuentes</a></li>
				  			<li><a class="link-footer" ="#">Envíos Mismo Día</a></li>
				  			<li><a class="link-footer" ="#">Políticas de Seguridad</a></li>
				  				
				  			
					</ul>
				  
				  </div>
				  <div class="large-3 columns">
				  	<h5 class="tit_footer">Cónocenos</h5>
				  	<ul class="infomr">				  		
				  			<li><a class="link-footer" ="#">¿Quiénes somos?</a></li>						
				  			<li><a class="link-footer" ="#">Garantía MesadeRegalos</a></li>
				  			<li><a class="link-footer" ="#">Prensa</a></li>
				  			<li><a class="link-footer" ="#">Canal YouTube</a></li>
				  			<li><a class="link-footer" ="#">Comentarios & Sugerencias</a></li>
				  			
				  				
				  			
					</ul>				  
				  </div>
				  <div class="large-3 columns">
				  	<h5 class="tit_footer">Mi Pedido</h5>
				  	<ul class="infomr">				  		
				  			<li><a class="link-footer" ="#">Reporta tu Depósito</a></li>						
				  			<li><a class="link-footer" ="#">Estatus de Pedido</a></li>
				  			<li><a class="link-footer" ="#">Pedidos Personalizados</a></li>
				  			<li><a class="link-footer" ="#">Cambios</a></li>
				  			<li><a class="link-footer" ="#">Ir a Mi Cuenta</a></li>
				  			<li><a class="link-footer" ="#">Olvidé Mi Contraseña</a></li>
				  			<li><a class="link-footer" ="#">Solicitar Mi Factura</a></li>
					</ul>	
				  </div>
				</div>
				<div class="row">
					<div class="large-12 columns">	
						<hr />
					</div>
				</div>	
				
				<div class="row">
					<div class="large-12 columns">	
						<img src="http://192.241.166.215/justo/mesa-r/images/FormasdePago_24.png" />
						<img src="http://192.241.166.215/justo/mesa-r/images/NortonSecured_20.png" />
						<img src="http://192.241.166.215/justo/mesa-r/images/sello.png" />
					</div>
				</div>	
				
				
				<div class="row">
					<div class="large-12 columns">	
					<br />
					<p class="leyenda"> El uso de este sitio web implica la aceptación de las Políticas de Privacidad de <br />
					 Mesa de Regalos S.A. de C.V. 
					  			
	                    Copyright &copy; <?php echo date('Y'); ?> de MesadeRegalos S.A. de C.V. by <a href="http://www.realhost.com.mx">Realhost</a><br/>
	                    
	                    <?php //echo Yii::powered(); ?>
	                </div>
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
      
    <script type="text/javascript"> 
     $(document).ready(function() {
	var n = '#nav'
	$('#nav-menu').click(function() {
		if ($(n).hasClass('nav-open')) {
			$(n).removeClass('nav-open');
		}
		else {
			$(n).addClass('nav-open');
		}
	});
});
</script>  

<script>
  $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>   
     
        
    </body>
</html>

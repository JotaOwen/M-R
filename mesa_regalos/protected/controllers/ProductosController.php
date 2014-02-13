<?php

class ProductosController extends Controller {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionCreate() {

        $this->render('create');
    }

    public function actionForms() {

        $this->render('forms');
    }

/*

			'' => 'Fk Proveedor',
			'' => 'Fk Marca',
			'' => 'Fk Categoria',
			'' => 'Fk Subcategoria',
			'' => 'En Venta',
			'' => 'Codigo De Barras',
			'' => 'Precio',
			'' => 'Costo',
			'' => 'Referencia',
			'' => 'Sku',
			'' => 'Referencia Proveedor',
			'' => 'Alto',
			'' => 'Ancho',
			'' => 'Largo',
			'' => 'Peso',
			'activo' => 'Activo',
			'fechaDeCreacion' => 'Fecha De Creacion',
			'fecha_disponible' => 'Fecha Disponible',
			'' => 'Es Virtual',
			'' => 'Nombre',
			'' => 'Fk Unidad Medida',
 * */
     public function actionInsert() {
         FB::info($_POST,"nombre");
          $model = new Producto;
		  $model->idProducto	 = $_POST['idProducto'];
          $model->nombre		 = $_POST['nombre'];
          $model->fkProveedor	 = $_POST['fkProveedor'];
		  $model->fkMarca		 = $_POST['fkMarca'];
		  $model->fkCategoria	 = $_POST['fkCategoria'];
		  $model->fkSubcategoria = $_POST['fkSubcategoria'];
		  $model->fkUnidadMedida = $_POST['fkUnidadMedida'];
		  $model->codigoDeBarras = $_POST['codigoDeBarras'];
		  $model->precio		 = $_POST['precio'];
		  $model->referencia	 = $_POST['referencia'];
		  $model->sku			 = $_POST['sku'];
    $model->referencia_proveedor = $_POST['referencia_proveedor'];
		  $model->costo			 = $_POST['costo'];
		  isset($_POST['ancho'])&&$_POST['ancho']!=''?$model->ancho=$_POST['ancho']:1;
		  isset($_POST['alto'])&&$_POST['alto']!=''?$model->alto=$_POST['alto']:1;
		  isset($_POST['peso'])&&$_POST['peso']!=''?$model->peso=$_POST['peso']:1;
		  isset($_POST['largo'])&&$_POST['largo']!=''?$model->largo=$_POST['largo']:1;
		  //$model->alto			 = $_POST['alto'];
		 // $model->peso			 = $_POST['peso'];
		 // $model->largo			 = $_POST['largo'];
          $_POST['activo']=='true'?$model->activo=1:$model->activo=0;
		  $_POST['esVirtual']=='true'?$model->esVirtual=1:$model->esVirtual=0;
		  $_POST['enVenta']=='true'?$model->enVenta=1:$model->enVenta=0;
          $model->fechaDeCreacion = new CDbExpression('NOW()');//new Date();//
		  $model->fecha_disponible= new CDbExpression('NOW()');//$_POST['fecha_disponible'];
		  //if($model->validate()){
		  	FB::error($model, "valido");
          	$model->save();
          	//$this->render('create');
		  //}
		  	//FB::error("Error", "no valido");
    }

}
?>
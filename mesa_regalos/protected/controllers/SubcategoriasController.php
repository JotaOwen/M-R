<?php

class SubcategoriasController extends Controller {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionCreate() {

        $this->render('create');
    }

    public function actionForms() {

        $this->render('forms');
    }

     public function actionInsert() {
         FB::info($_POST,"nombre");
          $model = new Subcategoria;
	      $model->nombre= $_POST['nombre'];
	      $model->fkCategoria= $_POST['fkCategoria'];
	      $_POST['activo']=="true"?$model->activo=1:$model->activo=0;
	      $model->fechaDeCreacion= new CDbExpression('NOW()');//new Date();//$_POST['fechaDeCreacion'];
	      $model->posicion= $_POST['posicion'];
	      $model->imagen= $_POST['imagen'];
	      $model->metas= $_POST['metas'];
	      $model->save();
	      $this->render('create');
    }

}
?>
<?php

class ProveedoresController extends Controller {

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

        $model = new Proveedor;
          $model->nombre= $_POST['nombre'];
          $model->idProveedor= $_POST['idProveedor'];
          $_POST['activo']=="true"?$model->activo=1:$model->activo=0;
          $model->fechaDeCreacion= new CDbExpression('NOW()');
          $model->save();
          $this->render('create');
    }

}
?>
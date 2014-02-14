<?php

class CategoriasController extends Controller {

    public $layout = '//layouts/admin';

    public function actionIndex() {

        $CategoryData = Yii::app()->db->createCommand()->select(' * ')->from('categoria')->queryAll();

        $this->render('index', array('CategoryData' => $CategoryData));
    }

    public function actionForms() {

        $this->render('forms');
    }

    public function actionCreate() {
        FB::info($_POST, "____________________POST");

        $model = new Categoria;
        if (!empty($_POST)) {
            $_POST['metas'] = implode(",", $_POST['metas']);
            $model->attributes = $_POST;
            $_POST['activo']=="true" ? $model->activo = 1 : $model->activo = 0;
            $model->fechaDeCreacion = new CDbExpression('NOW()');
            FB::INFO($model->attributes, '_______________________ATTRIBUTES');
            if ($model->save()) {
                Yii::app()->user->setFlash("success", "La Categoria se Guardo Correctamente");
            } else {
                Yii::app()->user->setFlash("warning", "No se pudo guardar la categoria, por favor intente de nuevo.");
            }
        }
        $this->render('create');
    }

}
?>
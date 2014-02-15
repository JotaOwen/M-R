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
                Yii::app()->user->setFlash("success", "La Categoria se Guardo Correctamente.");
            } else {
                Yii::app()->user->setFlash("warning", "No se pudo guardar la categoria, por favor intente de nuevo.");
            }
        }
        $this->render('create');
    }

    public function actionUpdateajx() {
        FB::INFO($_POST, '__________________________POST');

        if ($_POST['Categoria'] && Yii::app()->request->isAjaxRequest) {
            $sql = "UPDATE categoria SET nombre = :nombre, posicion = :posicion WHERE idCategoria = :idCategoria";
            $parameters = array(
                ":idCategoria" => $_POST['Categoria']['idCategoria'],
                ':nombre' => $_POST['Categoria']['nombre'],
                ':posicion' => $_POST['Categoria']['posicion']
            );
            if (Yii::app()->db->createCommand($sql)->execute($parameters)) {
                echo CJSON::encode(array(
                    'requestresult' => 'ok',
                    'message' => "Datos Actualizados Correctamente..."
                ));
                return;
            } else {
                echo CJSON::encode(array(
                    'requestresult' => 'error',
                    'message' => "No se pudo Actualizar, intente de nuevo."
                ));
                return;
            }
        }
        return;
    }

}
?>
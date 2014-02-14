<?php

class MarcasController extends Controller {

    public function actionIndex() {

        $this->render('index');
    }

    public function actionForms() {

        $this->render('forms');
    }

    public function actionCreate() {
        FB::INFO($_POST, '____________________________POST');
        $model = new Marca;
        if (!empty($_POST)) {
            $model->nombre = $_POST['nombre'];
            $model->idMarca = $_POST['idMarca'];
            $_POST['activo']=="true" ? $model->activo = 1 : $model->activo = 0;
            $model->fechaDeCreacion = new CDbExpression('NOW()');
            $model->descripcionLarga = $_POST['descripcionLarga'];
            $model->logo = $_POST['logo'];
            $model->descripcionBreve = $_POST['descripcionBreve'];
            FB::info("data", $model->descripcionBreve);
            if ($model->validate()) {
                $model->save();
            } else {
                FB::error("ERROR", "no pasa validacion");
            }
        }
        $this->render("create");
    }

}
?>
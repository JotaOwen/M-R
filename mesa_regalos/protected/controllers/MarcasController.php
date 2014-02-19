<?php

class MarcasController extends Controller {

    public $layout = '//layouts/admin';

    public function actionIndex() {

        $this->render('index');
    }

    public function actionForms() {

        $this->render('forms');
    }

    public function actionCreate() {
        FB::info($_POST, "____________________POST");

        $model = new Marca;
        if (!empty($_POST)) {
            $model->attributes = $_POST;
            $_POST['activo']=="true" ? $model->activo = 1 : $model->activo = 0;
            $model->fechaDeCreacion = new CDbExpression('NOW()');
            FB::INFO($model->attributes, '_______________________ATTRIBUTES');

            if ($model->save()){
                $marcaFolder = '\\assets\\images\\marcas\\';
                $storeFolder = getcwd() . $marcaFolder;
                if (!is_dir($storeFolder)) 
                    mkdir($storeFolder, 0777,true);
                $type = $_FILES['imagen']['type'];
                $extension = explode('/', $type);           
                if (!empty($_FILES)) {
                    $tempFile = $_FILES['imagen']['tmp_name'];
                    $targetPath = $storeFolder;
                    $nuevoNombre =  $model->idMarca.'_'. $_POST['nuevoNombre'].'.'.$extension[1];
                    $targetFile = $targetPath .$nuevoNombre;
                    if (move_uploaded_file($tempFile, $targetFile)) {
                             $model->logo = $targetFile;
                    }
                }
                
                if ($model->save()) {
                    Yii::app()->user->setFlash("success", "La Categoria se Guardo Correctamente");
                }
            }else
                Yii::app()->user->setFlash("warning", "No se pudo guardar la categoria, por favor intente de nuevo.");
            
        }
        $this->render('create');
    }

}
?>
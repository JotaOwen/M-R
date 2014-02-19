<?php

class SubcategoriasController extends Controller {

    public $layout = '//layouts/admin';
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
          FB::error($_POST, "____________________POST");

       
        if (!empty($_POST)) {
           $model = new Subcategoria;
            $_POST['metas'] = implode(",", $_POST['metas']);
            $model->attributes = $_POST;
            $_POST['activo']=="true" ? $model->activo = 1 : $model->activo = 0;
            $model->fechaDeCreacion = new CDbExpression('NOW()');
            FB::error($model->attributes, '_______________________ATTRIBUTES');

        if ($model->save()){
          $storeFolder = getcwd() . '\\assets\\images\\subcategorias\\';
         FB::error($storeFolder, "storeFolder");
          if (!is_dir($storeFolder)) 
              mkdir($storeFolder, 0777,true);
          $type = $_FILES['imagen']['type'];
          FB::error($type, "type");
          $extension = explode('/', $type);
          FB::error($extension[1], "extension");     
              if (!empty($_FILES)) {
                  $tempFile = $_FILES['imagen']['tmp_name'];
                  $targetPath = $storeFolder;
          $nuevoNombre = $model->idSubcategoria.'_'.  $_POST['nuevoNombre'].'.'.$extension[1];
                  $targetFile = $targetPath .  $nuevoNombre;//$_FILES['imagen']['name'];
            FB::error($tempFile, "tempFile");
            FB::error($targetFile, "targetFile");
                  if (move_uploaded_file($tempFile, $targetFile)) {
              FB::error("La imagen ha sido cargada al servidor.", "EXITO-Erasto");
                 $model->imagen = $nuevoNombre;
              FB::error( $model->imagen, "modelo imagen");
                  }
            else {
                FB::error("No se guardo al imagen", "error erasto");
            }
              }
          
                if ($model->save()) {
                    Yii::app()->user->setFlash("success", "La subcategoria se guardó correctamente");
                }
        }else
                Yii::app()->user->setFlash("warning", "No se pudo guardar la subcacategoria, por favor intente de nuevo.");
            
        }
        $this->render('create');
    }

}
?>
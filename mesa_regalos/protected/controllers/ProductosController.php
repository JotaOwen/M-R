<?php

class ProductosController extends Controller {

    public $layout = '//layouts/admin';

    public function actionIndex() {

        $ProductsData = Yii::app()->db->createCommand()->select(' * ')->from('producto')->queryAll();

        $ListaCategorias = CHtml::listData(Categoria::model()->findAll(), 'idCategoria', 'nombre');
        $ListaMarcas = CHtml::listData(Marca::model()->findAll(), 'idMarca', 'nombre');
        $this->render('index', array(
            'ProductsData' => $ProductsData,
            'ListaMarcas' => $ListaMarcas,
            'ListaCategorias' => $ListaCategorias
        ));
    }

    public function actionCreate() {//E339A4  //F4067D
        FB::info($_POST, "__________________________POST");
        $flag = false;
        $model = new Producto;
        if (!empty($_POST)) {
            $model->attributes = $_POST;
            isset($_POST['ancho']) && $_POST['ancho']!='' ? $model->ancho = $_POST['ancho'] : 1;
            isset($_POST['alto']) && $_POST['alto']!='' ? $model->alto = $_POST['alto'] : 1;
            isset($_POST['peso']) && $_POST['peso']!='' ? $model->peso = $_POST['peso'] : 1;
            isset($_POST['largo']) && $_POST['largo']!='' ? $model->largo = $_POST['largo'] : 1;

            if(gettype($model->ancho)=='string') unset($model->ancho);
            if(gettype($model->alto) =='string') unset($model->alto);
            if(gettype($model->peso) =='string') unset($model->peso);
            if(gettype($model->largo)=='string') unset($model->largo);

            $_POST['activo']=='true' ? $model->activo = 1 : $model->activo = 0;
            $_POST['esVirtual']=='true' ? $model->esVirtual = 1 : $model->esVirtual = 0;
            $_POST['enVenta']=='true' ? $model->enVenta = 1 : $model->enVenta = 0;

            $model->fechaDeCreacion = new CDbExpression('NOW()');
            $model->fecha_disponible = new CDbExpression('NOW()');
            
            if ($model->save()){
                $flag = true;
                FB::info("producto guardado correctamente","_______OK");
                 if (!empty($_FILES)) {
                    FB::info("Archivos recibidos exitosamente","_______OK");
                    $productoFolder = '\\assets\\images\\producto\\';
                    $storeFolder = getcwd() . $productoFolder;
                    if (!is_dir($storeFolder)) 
                        mkdir($storeFolder, 0777,true);
                    foreach ($_FILES['IMGS']['name'] as $f => $name) {
                        $productoArchivo = new ProductoArchivo;
                        $productoArchivo->foto=1;
                        $productoArchivo->titulo =$_FILES['IMGS']['name'][$f];  
                        $productoArchivo->save();
                        $type = $_FILES['IMGS']['type'][$f];
                        $extension = explode('/', $type);
                        $tempFile = $_FILES['IMGS']['tmp_name'][$f];
                        $targetPath = $storeFolder;
                        $nuevoNombre = $productoArchivo->idProductoArchivo.'_'.$_FILES['IMGS']['name'][$f];//.'.'.$extension[1];
                        $targetFile = $targetPath.$nuevoNombre;
                        FB::info($nuevoNombre,"nombre nuevo");
                        FB::info($tempFile,"tempFile");
                        FB::info($targetFile,"target File");
                        if (move_uploaded_file($tempFile, $targetFile)) {
                            $productoArchivo->ruta =$nuevoNombre;
                            if($productoArchivo->save()){
                                
                                $sql = "insert into imagen_producto (fkProducto,fkArchivo) values(:fkProducto,:fkArchivo)";
                                $parameters = array(
                                    ':fkProducto' => $model->idProducto,
                                    ':fkArchivo' => $productoArchivo->idProductoArchivo
                                );
                                Yii::app()->db->createCommand($sql)->execute($parameters);
                            }
                        }
                        else {
                                FB::info("No se guardo al imagen", "error erasto");
                        }
                    }
                }   else
                    FB::info("ARCHIVOS RECIBIDOS  inorrectamente","_______NOT OK");
            }
            
            
            
            if ($flag) {
                Yii::app()->user->setFlash("success", "El Producto se guardo correctamente.");
            } else {
                Yii::app()->user->setFlash("warning", "No se guardo el producto, por favor intente de nuevo.");
            }
        }

        $ListaCategorias = CHtml::listData(Categoria::model()->findAll(), 'idCategoria', 'nombre');
        $ListaSubCategorias = CHtml::listData(Subcategoria::model()->findAll(), 'idSubcategoria', 'nombre');
        $ListaProveedor = CHtml::listData(Proveedor::model()->findAll(), 'idProveedor', 'nombre');
        $ListaMarcas = CHtml::listData(Marca::model()->findAll(), 'idMarca', 'nombre');
        $ListaUnidadMedida = CHtml::listData(Unidadmedida::model()->findAll(), 'idUnidadMedida', 'unidad');

        $this->render('create', array(
            'ListaCategorias' => $ListaCategorias,
            'ListaSubCategorias' => $ListaSubCategorias,
            'ListaProveedor' => $ListaProveedor,
            'ListaMarcas' => $ListaMarcas,
            'ListaUnidadMedida' => $ListaUnidadMedida
        ));
    }

    public function actionTest() {
        $this->render('test');
    }

}
?>
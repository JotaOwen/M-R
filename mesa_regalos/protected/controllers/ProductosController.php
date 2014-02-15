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

        $model = new Producto;
        if (!empty($_POST)) {

            $model->attributes = $_POST;
            isset($_POST['ancho']) && $_POST['ancho']!='' ? $model->ancho = $_POST['ancho'] : 1;
            isset($_POST['alto']) && $_POST['alto']!='' ? $model->alto = $_POST['alto'] : 1;
            isset($_POST['peso']) && $_POST['peso']!='' ? $model->peso = $_POST['peso'] : 1;
            isset($_POST['largo']) && $_POST['largo']!='' ? $model->largo = $_POST['largo'] : 1;

            $_POST['activo']=='true' ? $model->activo = 1 : $model->activo = 0;
            $_POST['esVirtual']=='true' ? $model->esVirtual = 1 : $model->esVirtual = 0;
            $_POST['enVenta']=='true' ? $model->enVenta = 1 : $model->enVenta = 0;

            $model->fechaDeCreacion = new CDbExpression('NOW()');
            $model->fecha_disponible = new CDbExpression('NOW()');
            if ($model->save()) {
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
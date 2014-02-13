<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $idProducto
 * @property integer $fkProveedor
 * @property integer $fkMarca
 * @property integer $fkCategoria
 * @property integer $fkSubcategoria
 * @property integer $enVenta
 * @property string $codigoDeBarras
 * @property string $precio
 * @property string $costo
 * @property string $referencia
 * @property string $sku
 * @property integer $referencia_proveedor
 * @property string $alto
 * @property string $ancho
 * @property string $largo
 * @property string $peso
 * @property integer $activo
 * @property string $fechaDeCreacion
 * @property string $fecha_disponible
 * @property integer $esVirtual
 * @property string $nombre
 * @property integer $fkUnidadMedida
 *
 * The followings are the available model relations:
 * @property ProductoArchivo[] $productoArchivos
 * @property Categoria $fkCategoria0
 * @property Marca $fkMarca0
 * @property Proveedor $fkProveedor0
 * @property Subcategoria $fkSubcategoria0
 * @property Unidadmedida $fkUnidadMedida0
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkProveedor, fkMarca, fkCategoria, codigoDeBarras, precio, costo, referencia, sku, referencia_proveedor, fechaDeCreacion, nombre', 'required'),
			array('fkProveedor, fkMarca, fkCategoria, fkSubcategoria, enVenta, activo, esVirtual, fkUnidadMedida', 'numerical', 'integerOnly'=>true),
			array('codigoDeBarras', 'length', 'max'=>30),
			array('precio, costo', 'length', 'max'=>8),
			array('referencia,referencia_proveedor', 'length', 'max'=>128),
			array('sku', 'length', 'max'=>64),
			array('alto, ancho, largo, peso', 'length', 'max'=>5),
			array('nombre', 'length', 'max'=>45),
			array('fecha_disponible', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProducto, fkProveedor, fkMarca, fkCategoria, fkSubcategoria, enVenta, codigoDeBarras, precio, costo, referencia, sku, referencia_proveedor, alto, ancho, largo, peso, activo, fechaDeCreacion, fecha_disponible, esVirtual, nombre, fkUnidadMedida', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'productoArchivos' => array(self::MANY_MANY, 'ProductoArchivo', 'imagen_producto(fkProducto, fkArchivo)'),
			'fkCategoria0' => array(self::BELONGS_TO, 'Categoria', 'fkCategoria'),
			'fkMarca0' => array(self::BELONGS_TO, 'Marca', 'fkMarca'),
			'fkProveedor0' => array(self::BELONGS_TO, 'Proveedor', 'fkProveedor'),
			'fkSubcategoria0' => array(self::BELONGS_TO, 'Subcategoria', 'fkSubcategoria'),
			'fkUnidadMedida0' => array(self::BELONGS_TO, 'Unidadmedida', 'fkUnidadMedida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProducto' => 'Id Producto',
			'fkProveedor' => 'Fk Proveedor',
			'fkMarca' => 'Fk Marca',
			'fkCategoria' => 'Fk Categoria',
			'fkSubcategoria' => 'Fk Subcategoria',
			'enVenta' => 'En Venta',
			'codigoDeBarras' => 'Codigo De Barras',
			'precio' => 'Precio',
			'costo' => 'Costo',
			'referencia' => 'Referencia',
			'sku' => 'Sku',
			'referencia_proveedor' => 'Referencia Proveedor',
			'alto' => 'Alto',
			'ancho' => 'Ancho',
			'largo' => 'Largo',
			'peso' => 'Peso',
			'activo' => 'Activo',
			'fechaDeCreacion' => 'Fecha De Creacion',
			'fecha_disponible' => 'Fecha Disponible',
			'esVirtual' => 'Es Virtual',
			'nombre' => 'Nombre',
			'fkUnidadMedida' => 'Fk Unidad Medida',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idProducto',$this->idProducto);
		$criteria->compare('fkProveedor',$this->fkProveedor);
		$criteria->compare('fkMarca',$this->fkMarca);
		$criteria->compare('fkCategoria',$this->fkCategoria);
		$criteria->compare('fkSubcategoria',$this->fkSubcategoria);
		$criteria->compare('enVenta',$this->enVenta);
		$criteria->compare('codigoDeBarras',$this->codigoDeBarras,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('costo',$this->costo,true);
		$criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('referencia_proveedor',$this->referencia_proveedor);
		$criteria->compare('alto',$this->alto,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fechaDeCreacion',$this->fechaDeCreacion,true);
		$criteria->compare('fecha_disponible',$this->fecha_disponible,true);
		$criteria->compare('esVirtual',$this->esVirtual);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fkUnidadMedida',$this->fkUnidadMedida);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

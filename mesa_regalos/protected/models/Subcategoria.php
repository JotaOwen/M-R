<?php

/**
 * This is the model class for table "subcategoria".
 *
 * The followings are the available columns in table 'subcategoria':
 * @property integer $idSubcategoria
 * @property integer $activo
 * @property string $fechaDeCreacion
 * @property integer $posicion
 * @property string $imagen
 * @property string $metas
 * @property integer $fkCategoria
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 * @property Categoria $fkCategoria0
 */
class Subcategoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subcategoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaDeCreacion, posicion, fkCategoria', 'required'),
			array('activo, posicion, fkCategoria', 'numerical', 'integerOnly'=>true),
			array('imagen, metas', 'length', 'max'=>128),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSubcategoria, activo, fechaDeCreacion, posicion, imagen, metas, fkCategoria, nombre', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'fkSubcategoria'),
			'fkCategoria0' => array(self::BELONGS_TO, 'Categoria', 'fkCategoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSubcategoria' => 'Id Subcategoria',
			'activo' => 'Activo',
			'fechaDeCreacion' => 'Fecha de creación',
			'posicion' => 'Posición',
			'imagen' => 'Imagen',
			'metas' => 'Metas',
			'fkCategoria' => 'Categoria',
			'nombre' => 'Nombre',
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

		$criteria->compare('idSubcategoria',$this->idSubcategoria);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('fechaDeCreacion',$this->fechaDeCreacion,true);
		$criteria->compare('posicion',$this->posicion);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('metas',$this->metas,true);
		$criteria->compare('fkCategoria',$this->fkCategoria);
		$criteria->compare('nombre',$this->nombre,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subcategoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

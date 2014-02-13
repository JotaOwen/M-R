<?php

/**
 * This is the model class for table "marca".
 *
 * The followings are the available columns in table 'marca':
 * @property integer $idMarca
 * @property string $nombre
 * @property string $fechaDeCreacion
 * @property integer $activo
 * @property string $logo
 * @property string $descripcionBreve
 * @property string $descripcionLarga
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class Marca extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, fechaDeCreacion, descripcionBreve', 'required'),
			array('activo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('logo', 'length', 'max'=>128),
			array('descripcionBreve', 'length', 'max'=>32),
			array('descripcionLarga', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idMarca, nombre, fechaDeCreacion, activo, logo, descripcionBreve, descripcionLarga', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'fkMarca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMarca' => 'Id Marca',
			'nombre' => 'Nombre',
			'fechaDeCreacion' => 'Fecha de creación',
			'activo' => 'Activo',
			'logo' => 'Logo',
			'descripcionBreve' => 'Descripcion breve',
			'descripcionLarga' => 'Descripcion larga',
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

		$criteria->compare('idMarca',$this->idMarca);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fechaDeCreacion',$this->fechaDeCreacion,true);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('descripcionBreve',$this->descripcionBreve,true);
		$criteria->compare('descripcionLarga',$this->descripcionLarga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marca the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

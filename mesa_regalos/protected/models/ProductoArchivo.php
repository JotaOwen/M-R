<?php

/**
 * This is the model class for table "producto_archivo".
 *
 * The followings are the available columns in table 'producto_archivo':
 * @property integer $idProductoArchivo
 * @property integer $foto
 * @property string $ruta
 * @property string $titulo
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class ProductoArchivo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto_archivo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('foto', 'numerical', 'integerOnly'=>true),
			array('ruta', 'length', 'max'=>128),
			array('titulo', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idProductoArchivo, foto, ruta, titulo', 'safe', 'on'=>'search'),
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
			'productos' => array(self::MANY_MANY, 'Producto', 'imagen_producto(fkArchivo, fkProducto)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idProductoArchivo' => 'Id Producto Archivo',
			'foto' => 'Foto',
			'ruta' => 'Ruta',
			'titulo' => 'Titulo',
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

		$criteria->compare('idProductoArchivo',$this->idProductoArchivo);
		$criteria->compare('foto',$this->foto);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('titulo',$this->titulo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductoArchivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

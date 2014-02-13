<?php

/**
 * This is the model class for table "unidadmedida".
 *
 * The followings are the available columns in table 'unidadmedida':
 * @property integer $idUnidadMedida
 * @property string $unidad
 * @property string $abreviacion
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class Unidadmedida extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'unidadmedida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('unidad, abreviacion', 'required'),
			array('unidad', 'length', 'max'=>16),
			array('abreviacion', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUnidadMedida, unidad, abreviacion', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'fkUnidadMedida'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUnidadMedida' => 'Id Unidad Medida',
			'unidad' => 'Unidad',
			'abreviacion' => 'Abreviacion',
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

		$criteria->compare('idUnidadMedida',$this->idUnidadMedida);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('abreviacion',$this->abreviacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Unidadmedida the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

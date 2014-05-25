<?php

/**
 * This is the model class for table "tbl_service_form".
 *
 * The followings are the available columns in table 'tbl_service_form':
 * @property integer $id
 * @property string $name
 * @property string $service_type
 * @property integer $quantity
 * @property string $mobile_number
 * @property string $email
 * @property integer $status
 */
class TblServiceForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_service_form';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, service_type, quantity, mobile_number, email', 'required'),
			array('quantity', 'numerical', 'integerOnly'=>true),
			array('name, service_type, email', 'length', 'max'=>128),
			array('mobile_number', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, service_type, quantity, mobile_number, email, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'service_type' => 'Service Type',
			'quantity' => 'Quantity',
			'mobile_number' => 'Mobile Number',
			'email' => 'Email',
			'status' => 'Status'
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('service_type',$this->service_type,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblServiceForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}



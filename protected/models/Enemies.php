<?php

/**
 * This is the model class for table "enemies".
 *
 * The followings are the available columns in table 'enemies':
 * @property string $id
 * @property string $from_cg
 * @property string $to_cg
 * @property string $date_cg
 * @property string $addition_cg
 */
class Enemies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Enemies the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enemies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('from_cg, to_cg', 'required'),
			array('from_cg, to_cg', 'length', 'max'=>10),
			array('addition_cg', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, from_cg, to_cg, date_cg, addition_cg', 'safe', 'on'=>'search'),
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
			'from_cg' => 'From Cg',
			'to_cg' => 'To Cg',
			'date_cg' => 'Date Cg',
			'addition_cg' => 'Addition Cg',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('from_cg',$this->from_cg,true);
		$criteria->compare('to_cg',$this->to_cg,true);
		$criteria->compare('date_cg',$this->date_cg,true);
		$criteria->compare('addition_cg',$this->addition_cg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
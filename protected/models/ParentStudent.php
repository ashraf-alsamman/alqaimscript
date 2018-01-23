<?php

/**
 * This is the model class for table "parent_student".
 *
 * The followings are the available columns in table 'parent_student':
 * @property string $id
 * @property string $parent_id
 * @property string $student_id
 * @property string $create_time
 * @property string $adder_id
 * @property string $relation_title
 */
class ParentStudent extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ParentStudent the static model class
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
		return 'parent_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('parent_id, student_id, create_time, adder_id, relation_title', 'required'),
			array('parent_id, student_id, adder_id, relation_title', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, parent_id, student_id, create_time, adder_id, relation_title', 'safe', 'on'=>'search'),
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
			'parent_id' => 'Parent',
			'student_id' => 'Student',
			'create_time' => 'Create Time',
			'adder_id' => 'Adder',
			'relation_title' => 'Relation Title',
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
		$criteria->compare('parent_id',$this->parent_id,true);
		$criteria->compare('student_id',$this->student_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('adder_id',$this->adder_id,true);
		$criteria->compare('relation_title',$this->relation_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
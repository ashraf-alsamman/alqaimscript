<?php

/**
 * This is the model class for table "lesson_planner".
 *
 * The followings are the available columns in table 'lesson_planner':
 * @property string $id
 * @property string $title
 * @property string $adder_id
 * @property string $subject_id
 * @property string $create_time
 * @property string $update_time
 * @property string $lesson_planner_term
 */
class LessonPlanner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LessonPlanner the static model class
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
		return 'lesson_planner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('title, adder_id, subject_id, lesson_planner_term', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, adder_id, subject_id, create_time, update_time, lesson_planner_term', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'adder_id' => 'Adder',
			'subject_id' => 'Subject',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'lesson_planner_term' => 'Lesson Planner Term',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('adder_id',$this->adder_id,true);
		$criteria->compare('subject_id',$this->subject_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('lesson_planner_term',$this->lesson_planner_term,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
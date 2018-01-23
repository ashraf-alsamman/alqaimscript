<?php

/**
 * This is the model class for table "lesson_planner_lesson".
 *
 * The followings are the available columns in table 'lesson_planner_lesson':
 * @property string $id
 * @property string $title
 * @property string $adder_id
 * @property string $create_date
 * @property string $update_date
 * @property string $lesson_planner_week_id
 * @property string $lesson_planner_id
 * @property string $subject_id
 * @property string $lesson_date
 * @property string $upload_ex
 * @property string $note
 */
class LessonPlannerLesson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LessonPlannerLesson the static model class
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
		return 'lesson_planner_lesson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('title', 'required'),
			array('title, adder_id, lesson_planner_week_id, lesson_planner_id, subject_id, lesson_date', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, adder_id, create_date, update_date, lesson_planner_week_id, lesson_planner_id, subject_id, lesson_date, upload_ex, note', 'safe', 'on'=>'search'),
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
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
			'lesson_planner_week_id' => 'Lesson Planner Week',
			'lesson_planner_id' => 'Lesson Planner',
			'subject_id' => 'Subject',
			'lesson_date' => 'Lesson Date',
			'upload_ex' => 'Upload Ex',
			'note' => 'Note',
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
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('lesson_planner_week_id',$this->lesson_planner_week_id,true);
		$criteria->compare('lesson_planner_id',$this->lesson_planner_id,true);
		$criteria->compare('subject_id',$this->subject_id,true);
		$criteria->compare('lesson_date',$this->lesson_date,true);
		$criteria->compare('upload_ex',$this->upload_ex,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
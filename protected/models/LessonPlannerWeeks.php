<?php

/**
 * This is the model class for table "lesson_planner_weeks".
 *
 * The followings are the available columns in table 'lesson_planner_weeks':
 * @property string $id
 * @property string $title
 * @property string $adder_id
 * @property string $create_date
 * @property string $update_date
 * @property string $from_date_ex
 * @property string $to_date_ex
 * @property string $lesson_planner_id
 */
class LessonPlannerWeeks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LessonPlannerWeeks the static model class
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
		return 'lesson_planner_weeks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
 
		return array(
			array('title,from_date_ex,to_date_ex', 'required'),
			array('title, adder_id, update_date, lesson_planner_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, adder_id, create_date, update_date, from_date_ex, to_date_ex, lesson_planner_id', 'safe', 'on'=>'search'),
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
			'from_date_ex' => 'From',
			'to_date_ex' => 'To',
			'lesson_planner_id' => 'Lesson Planner',
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
		$criteria->compare('from_date_ex',$this->from_date_ex,true);
		$criteria->compare('to_date_ex',$this->to_date_ex,true);
		$criteria->compare('lesson_planner_id',$this->lesson_planner_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
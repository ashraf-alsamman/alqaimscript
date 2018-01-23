<?php

/**
 * This is the model class for table "lesson_planner_history".
 *
 * The followings are the available columns in table 'lesson_planner_history':
 * @property string $id
 * @property string $adder_id
 * @property string $week_id
 * @property string $lesson_planner_id
 */
class LessonPlannerHistory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LessonPlannerHistory the static model class
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
		return 'lesson_planner_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('adder_id, week_id, lesson_planner_id', 'required'),
			array('adder_id, week_id, lesson_planner_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, adder_id, week_id, lesson_planner_id', 'safe', 'on'=>'search'),
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
			'adder_id' => 'Adder',
			'week_id' => 'Week',
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
		$criteria->compare('adder_id',$this->adder_id,true);
		$criteria->compare('week_id',$this->week_id,true);
		$criteria->compare('lesson_planner_id',$this->lesson_planner_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
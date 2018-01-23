<?php

/**
 * This is the model class for table "schedule".
 *
 * The followings are the available columns in table 'schedule':
 * @property string $id
 * @property string $day_id
 * @property string $class_id
 * @property string $subject_id
 * @property string $teacher_id
 * @property string $lesson_id
 */
class Schedule extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Schedule the static model class
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
		return 'schedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('day_id, class_id, subject_id, teacher_id, lesson_id', 'required'),
			array('day_id, class_id, subject_id, teacher_id, lesson_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, day_id, class_id, subject_id, teacher_id, lesson_id', 'safe', 'on'=>'search'),
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
			'day_id' => 'Day',
			'class_id' => 'Class',
			'subject_id' => 'Subject',
			'teacher_id' => 'Teacher',
			'lesson_id' => 'Lesson',
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
		$criteria->compare('day_id',$this->day_id,true);
		$criteria->compare('class_id',$this->class_id,true);
		$criteria->compare('subject_id',$this->subject_id,true);
		$criteria->compare('teacher_id',$this->teacher_id,true);
		$criteria->compare('lesson_id',$this->lesson_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
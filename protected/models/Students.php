<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property string $id
 * @property string $name
 * @property string $active
 * @property string $birth_date
 * @property string $sex
 * @property string $nationality
 * @property string $start_date
 * @property string $leaving_date
 * @property string $about
 * @property string $update_time
 * @property string $create_time
 * @property string $class_m
 * @property string $grade
 * @property string $adder_id
 */
class Students extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Students the static model class
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
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name, active, birth_date, sex, nationality, start_date, leaving_date, update_time, create_time, class_m, grade, adder_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, active, birth_date, sex, nationality, start_date, leaving_date, about, update_time, create_time, class_m, grade, adder_id', 'safe', 'on'=>'search'),
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
			'active' => 'Active',
			'birth_date' => 'Birth Date',
			'sex' => 'Sex',
			'nationality' => 'Nationality',
			'start_date' => 'Start Date',
			'leaving_date' => 'Leaving Date',
			'about' => 'About',
			'update_time' => 'Update Time',
			'create_time' => 'Create Time',
			'class_m' => 'Class M',
			'grade' => 'Grade',
			'adder_id' => 'Adder',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('leaving_date',$this->leaving_date,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('class_m',$this->class_m,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('adder_id',$this->adder_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "ex_auth_rel".
 *
 * The followings are the available columns in table 'ex_auth_rel':
 * @property string $id
 * @property string $job_title_id
 * @property string $action_id
 * @property string $controller_id
 * @property string $action_title
 * @property string $controller_title
 */
class ExAuthRel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExAuthRel the static model class
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
		return 'ex_auth_rel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('job_title_id, action_id, controller_id, action_title, controller_title', 'required'),
			array('job_title_id, action_id, controller_id, action_title, controller_title', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, job_title_id, action_id, controller_id, action_title, controller_title', 'safe', 'on'=>'search'),
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
			'job_title_id' => 'Job Title',
			'action_id' => 'Action',
			'controller_id' => 'Controller',
			'action_title' => 'Action Title',
			'controller_title' => 'Controller Title',
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
		$criteria->compare('job_title_id',$this->job_title_id,true);
		$criteria->compare('action_id',$this->action_id,true);
		$criteria->compare('controller_id',$this->controller_id,true);
		$criteria->compare('action_title',$this->action_title,true);
		$criteria->compare('controller_title',$this->controller_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
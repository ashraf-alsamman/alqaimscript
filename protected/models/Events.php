io<?php

/**
 * This is the model class for table "events".
 *
 * The followings are the available columns in table 'events':
 * @property string $id
 * @property string $name
 * @property string $leader_id
 * @property string $from
 * @property string $to
 * @property string $places
 * @property string $type
 * @property string $vs_id
 * @property string $status
 * @property string $message
 * @property string $active_id
 */
class Events extends CActiveRecord
{
	

	/**
	 * Returns the static model of the specified AR class.
	 * @return Events the static model class
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
		return 'events';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, leader_id, from, to, places, type, vs_id, status, message, active_id', 'required'),
			array('name', 'length', 'max'=>45),
			array('leader_id, places, type, vs_id, status, message, active_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, leader_id, from, to, places, type, vs_id, status, message, active_id', 'safe', 'on'=>'search'),
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
			'leader_id' => 'Leader',
			'from' => 'From',
			'to' => 'To',
			'places' => 'Places',
			'type' => 'Type',
			'vs_id' => 'Vs',
			'status' => 'Status',
			'message' => 'Message',
			'active_id' => 'Active',
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
		$criteria->compare('leader_id',$this->leader_id,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('places',$this->places,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('vs_id',$this->vs_id,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('active_id',$this->active_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	//////////////////////////////////////////////////////////Elsamman///////////////////////////////////////////
public function getTybeActive(){
    return array('2' => 'sports', '1' => 'games');
}
	
	

	
	
	
	
	

















}
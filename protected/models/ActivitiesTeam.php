<?php

/**
 * This is the model class for table "activities_team".
 *
 * The followings are the available columns in table 'activities_team':
 * @property string $id
 * @property string $team_id
 * @property string $category
 * @property string $activity_id
 * @property string $date_cg
 * @property string $order_cg
 */
class ActivitiesTeam extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ActivitiesTeam the static model class
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
		return 'activities_team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('team_id, category, activity_id, date_cg, order_cg', 'required'),
			array('team_id, category, activity_id, order_cg', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team_id, category, activity_id, date_cg, order_cg', 'safe', 'on'=>'search'),
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
			'team_id' => 'Team',
			'category' => 'Category',
			'activity_id' => 'Activity',
			'date_cg' => 'Date Cg',
			'order_cg' => 'Order Cg',
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
		$criteria->compare('team_id',$this->team_id,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('activity_id',$this->activity_id,true);
		$criteria->compare('date_cg',$this->date_cg,true);
		$criteria->compare('order_cg',$this->order_cg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
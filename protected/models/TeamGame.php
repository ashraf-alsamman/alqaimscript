<?php

/**
 * This is the model class for table "team_game".
 *
 * The followings are the available columns in table 'team_game':
 * @property string $id
 * @property string $team_id
 * @property string $game_id
 * @property string $adder_cg
 * @property string $date_cg
 */
class TeamGame extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TeamGame the static model class
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
		return 'team_game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('team_id, game_id, adder_cg, date_cg', 'required'),
			array('team_id, game_id, adder_cg', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team_id, game_id, adder_cg, date_cg', 'safe', 'on'=>'search'),
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
			'game_id' => 'Game',
			'adder_cg' => 'Adder Cg',
			'date_cg' => 'Date Cg',
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
		$criteria->compare('game_id',$this->game_id,true);
		$criteria->compare('adder_cg',$this->adder_cg,true);
		$criteria->compare('date_cg',$this->date_cg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
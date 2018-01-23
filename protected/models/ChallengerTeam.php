<?php

/**
 * This is the model class for table "challenger_team".
 *
 * The followings are the available columns in table 'challenger_team':
 * @property string $id
 * @property string $challenger_id
 * @property string $team_id
 * @property string $joined
 * @property string $confirm
 * @property string $asker
 */
class ChallengerTeam extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ChallengerTeam the static model class
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
		return 'challenger_team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('challenger_id, team_id, joined, confirm, asker', 'required'),
			array('challenger_id, team_id', 'length', 'max'=>10),
			array('confirm, asker', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, challenger_id, team_id, date_cg, confirm, team_title, asker', 'safe', 'on'=>'search'),
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
		'Teames_rel' => array(self::BELONGS_TO, 'teams', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'challenger_id' => 'Challenger',
			'team_id' => 'Team',
			'date_cg' => 'date_cg',
			'confirm' => 'Confirm',
			'asker' => 'Asker',
		
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
		$criteria->compare('challenger_id',$this->challenger_id,true);
		$criteria->compare('team_id',$this->team_id,true);
		$criteria->compare('date_cg',$this->date_cg,true);
		$criteria->compare('confirm',$this->confirm,true);
		$criteria->compare('asker',$this->asker,true);
        $criteria->compare('team_title',$this->team_title,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
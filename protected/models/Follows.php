<?php

/**
 * This is the model class for table "follows".
 *
 * The followings are the available columns in table 'follows':
 * @property string $id
 * @property string $user_id
 * @property string $r_id
 * @property string $model_cg
 * @property string $date_cg
 */
class Follows extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Follows the static model class
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
		return 'follows';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, r_id, model_cg, date_cg', 'required'),
			array('user_id, r_id, model_cg, date_cg', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, r_id, model_cg, date_cg', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'r_id' => 'R',
			'model_cg' => 'Model Cg',
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
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('r_id',$this->r_id,true);
		$criteria->compare('model_cg',$this->model_cg,true);
		$criteria->compare('date_cg',$this->date_cg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
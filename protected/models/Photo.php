<?php

/**
 * This is the model class for table "photo".
 *
 * The followings are the available columns in table 'photo':
 * @property string $id
 * @property string $title
 * @property string $type_cg
 * @property string $r_id
 * @property string $info_cg
 * @property string $create_time
 * @property string $uploader_id
 * @property string $controller_title_ex
 */
class Photo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Photo the static model class
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
		return 'photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('title, type_cg, r_id, info_cg, create_time, uploader_id, controller_title_ex', 'required'),
			array('type_cg, r_id, uploader_id, controller_title_ex', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, type_cg, r_id, info_cg, create_time, uploader_id, controller_title_ex', 'safe', 'on'=>'search'),
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
			'type_cg' => 'Type Cg',
			'r_id' => 'R',
			'info_cg' => 'Info Cg',
			'create_time' => 'Create Time',
			'uploader_id' => 'Uploader',
			'controller_title_ex' => 'Controller Title Ex',
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
		$criteria->compare('type_cg',$this->type_cg,true);
		$criteria->compare('r_id',$this->r_id,true);
		$criteria->compare('info_cg',$this->info_cg,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('uploader_id',$this->uploader_id,true);
		$criteria->compare('controller_title_ex',$this->controller_title_ex,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
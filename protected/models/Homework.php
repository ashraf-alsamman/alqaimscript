<?php

/**
 * This is the model class for table "homework".
 *
 * The followings are the available columns in table 'homework':
 * @property string $id
 * @property string $title
 * @property string $update_time
 * @property string $create_time
 * @property string $author_id
 * @property string $class_id
 * @property string $grad_id
 * @property string $subject_id
 */
class Homework extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Homework the static model class
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
		return 'homework';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, update_time, create_time, author_id, class_id, grad_id, subject_id', 'required'),
			array('title, update_time, author_id, class_id, grad_id, subject_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, update_time, create_time, author_id, class_id, grad_id, subject_id', 'safe', 'on'=>'search'),
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
			'update_time' => 'Update Time',
			'create_time' => 'Create Time',
			'author_id' => 'Author',
			'class_id' => 'Class',
			'grad_id' => 'Grad',
			'subject_id' => 'Subject',
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
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('author_id',$this->author_id,true);
		$criteria->compare('class_id',$this->class_id,true);
		$criteria->compare('grad_id',$this->grad_id,true);
		$criteria->compare('subject_id',$this->subject_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
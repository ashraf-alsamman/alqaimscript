<?php

/**
 * This is the model class for table "mailbox_message".
 *
 * The followings are the available columns in table 'mailbox_message':
 * @property string $message_id
 * @property string $conversation_id
 * @property string $created
 * @property string $sender_id
 * @property string $recipient_id
 * @property string $text
 * @property string $crc64
 */
class MailboxMessage2 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MailboxMessage2 the static model class
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
		return 'mailbox_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('conversation_id, text, crc64', 'required'),
			array('conversation_id, created, sender_id, recipient_id', 'length', 'max'=>10),
			array('crc64', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('message_id, conversation_id, created, sender_id, recipient_id, text, crc64', 'safe', 'on'=>'search'),
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
			'message_id' => 'Message',
			'conversation_id' => 'Conversation',
			'created' => 'Created',
			'sender_id' => 'Sender',
			'recipient_id' => 'Recipient',
			'text' => 'Text',
			'crc64' => 'Crc64',
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

		$criteria->compare('message_id',$this->message_id,true);
		$criteria->compare('conversation_id',$this->conversation_id,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('sender_id',$this->sender_id,true);
		$criteria->compare('recipient_id',$this->recipient_id,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('crc64',$this->crc64,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
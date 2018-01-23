<?php

/**
 * This is the model class for table "countries".
 *
 * The followings are the available columns in table 'countries':
 * @property string $iso
 * @property string $title
 * @property string $printable_name
 * @property string $iso3
 * @property integer $numcode
 * @property string $id
 * @property string $lon
 * @property string $lat
 * @property string $zoom
 * @property string $printable_name_ar
 */
class Countries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Countries the static model class
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
		return 'countries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iso, title, printable_name, lon, lat, zoom, printable_name_ar', 'required'),
			array('numcode', 'numerical', 'integerOnly'=>true),
			array('iso', 'length', 'max'=>2),
			array('title, printable_name', 'length', 'max'=>80),
			array('iso3', 'length', 'max'=>3),
			array('zoom', 'length', 'max'=>10),
			array('printable_name_ar', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iso, title, printable_name, iso3, numcode, id, lon, lat, zoom, printable_name_ar', 'safe', 'on'=>'search'),
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
			'iso' => 'Iso',
			'title' => 'Title',
			'printable_name' => 'Printable Name',
			'iso3' => 'Iso3',
			'numcode' => 'Numcode',
			'id' => 'ID',
			'lon' => 'Lon',
			'lat' => 'Lat',
			'zoom' => 'Zoom',
			'printable_name_ar' => 'Printable Name Ar',
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

		$criteria->compare('iso',$this->iso,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('printable_name',$this->printable_name,true);
		$criteria->compare('iso3',$this->iso3,true);
		$criteria->compare('numcode',$this->numcode);
		$criteria->compare('id',$this->id,true);
		$criteria->compare('lon',$this->lon,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('zoom',$this->zoom,true);
		$criteria->compare('printable_name_ar',$this->printable_name_ar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
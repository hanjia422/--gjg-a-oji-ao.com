<?php

/**
 * This is the model class for table "{{g_cource_teacher}}".
 *
 * The followings are the available columns in table '{{g_cource_teacher}}':
 * @property integer $id
 * @property string $jname
 * @property string $avator
 * @property string $jdes
 * @property string $ename
 * @property string $title
 * @property string $ctime
 */
class GCourceTeacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{g_cource_teacher}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jname, avator, jdes, ename, title, ctime', 'required'),
			array('jname, avator, ename, title', 'length', 'max'=>32),
			array('ctime', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, jname, avator, jdes, ename, title, ctime', 'safe', 'on'=>'search'),
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
			'id' => '讲师ID',
			'jname' => '讲师名称',
			'avator' => '讲师头像',
			'jdes' => '讲师介绍与简介',
			'ename' => '英文名',
			'title' => '抬头',
			'ctime' => '创建时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('jname',$this->jname,true);
		$criteria->compare('avator',$this->avator,true);
		$criteria->compare('jdes',$this->jdes,true);
		$criteria->compare('ename',$this->ename,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('ctime',$this->ctime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GCourceTeacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

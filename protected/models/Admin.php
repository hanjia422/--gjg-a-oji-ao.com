<?php

/**
 * This is the model class for table "{{admin}}".
 *
 * The followings are the available columns in table '{{admin}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $ctime
 * @property string $dtime
 * @property string $otime
 * @property string $ip
 * @property integer $status
 * @property string $realname
 * @property integer $type
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{admin}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, ctime, dtime, otime, ip, realname, type', 'required'),
			array('status, type', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>32),
			array('email', 'length', 'max'=>40),
			array('ctime, dtime, otime', 'length', 'max'=>10),
			array('ip', 'length', 'max'=>15),
			array('realname', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, ctime, dtime, otime, ip, status, realname, type', 'safe', 'on'=>'search'),
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
			'username' => '管理员账号',
			'password' => '管理员密码',
			'email' => '邮箱地址',
			'ctime' => '注册时间',
			'dtime' => '登录时间',
			'otime' => '退出时间',
			'ip' => '登录IP',
			'status' => '状态',
			'realname' => '真实姓名',
			'type' => '登录类型1:pc2:phone',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ctime',$this->ctime,true);
		$criteria->compare('dtime',$this->dtime,true);
		$criteria->compare('otime',$this->otime,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property string $uid
 * @property string $login
 * @property string $password
 * @property string $login_salt
 * @property string $uname
 * @property string $email
 * @property string $phone
 * @property integer $sex
 * @property string $location
 * @property integer $is_audit
 * @property integer $is_active
 * @property integer $is_init
 * @property string $ctime
 * @property integer $identity
 * @property string $api_key
 * @property string $domain
 * @property integer $province
 * @property string $city
 * @property string $area
 * @property string $reg_ip
 * @property string $lang
 * @property string $timezone
 * @property integer $is_del
 * @property string $first_letter
 * @property string $intro
 * @property string $last_login_time
 * @property string $last_feed_id
 * @property string $last_post_time
 * @property string $search_key
 * @property string $invite_code
 * @property string $feed_email_time
 * @property string $send_email_time
 * @property string $my_college
 * @property string $signup_college
 * @property string $study_phase
 * @property integer $my_study_level
 * @property integer $find_study_level
 * @property integer $mail_activate
 * @property integer $phone_activate
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, phone', 'required'),
			array('sex, is_audit, is_active, is_init, identity, province, is_del, my_study_level, find_study_level, mail_activate, phone_activate', 'numerical', 'integerOnly'=>true),
			array('login, location, search_key', 'length', 'max'=>64),
			array('password, uname, email, invite_code', 'length', 'max'=>32),
			array('login_salt, city, area', 'length', 'max'=>5),
			array('phone, ctime, last_login_time, last_feed_id, last_post_time, feed_email_time, send_email_time', 'length', 'max'=>11),
			array('api_key, domain, lang', 'length', 'max'=>16),
			array('reg_ip', 'length', 'max'=>15),
			array('timezone, my_college, signup_college, study_phase', 'length', 'max'=>10),
			array('first_letter', 'length', 'max'=>1),
			array('intro', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('uid, login, password, login_salt, uname, email, phone, sex, location, is_audit, is_active, is_init, ctime, identity, api_key, domain, province, city, area, reg_ip, lang, timezone, is_del, first_letter, intro, last_login_time, last_feed_id, last_post_time, search_key, invite_code, feed_email_time, send_email_time, my_college, signup_college, study_phase, my_study_level, find_study_level, mail_activate, phone_activate', 'safe', 'on'=>'search'),
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
			'uid' => '主键UID',
			'login' => '登录emial',
			'password' => '用户密码的md5摘要',
			'login_salt' => '10000 到 99999之间的随机数，加密密码时使用',
			'uname' => '用户名',
			'email' => '用户email',
			'phone' => '手机号',
			'sex' => '性别 1：男、2：女',
			'location' => '所在省市的字符串',
			'is_audit' => '是否通过审核：0-未通过，1-已通过',
			'is_active' => '是否已激活 1：激活、0：未激活',
			'is_init' => '是否初始化用户资料 1：初始化、0：未初始化',
			'ctime' => '注册时间',
			'identity' => '身份标识（1：用户，2：组织）',
			'api_key' => '用户的api_key用于移动端',
			'domain' => '保留字段，用于用户分表',
			'province' => '省ID、关联ts_area表',
			'city' => '城市ID，关联ts_area表',
			'area' => '地区ID，关联ts_area表',
			'reg_ip' => '册注IP',
			'lang' => '言语',
			'timezone' => '时区',
			'is_del' => '是否禁用，0不禁用，1：禁用',
			'first_letter' => '用户名称的首字母',
			'intro' => '户用简介',
			'last_login_time' => '户用最后一次登录时间',
			'last_feed_id' => '户用最后发表的微博ID',
			'last_post_time' => '户用最后发表微博的时间',
			'search_key' => '搜索字段',
			'invite_code' => '邀请注册码',
			'feed_email_time' => 'Feed Email Time',
			'send_email_time' => 'Send Email Time',
			'my_college' => '所属院校专业',
			'signup_college' => '报考院校专业',
			'study_phase' => '学习项目与阶段',
			'my_study_level' => '我的(0学生,1学神,2学霸,3学渣,4学弱)',
			'find_study_level' => '找(0学生,1学神,2学霸,3学渣,4学弱)',
			'mail_activate' => '邮箱激活状态',
			'phone_activate' => '手机激活状态',
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

		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('login_salt',$this->login_salt,true);
		$criteria->compare('uname',$this->uname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('is_audit',$this->is_audit);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_init',$this->is_init);
		$criteria->compare('ctime',$this->ctime,true);
		$criteria->compare('identity',$this->identity);
		$criteria->compare('api_key',$this->api_key,true);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('province',$this->province);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('reg_ip',$this->reg_ip,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('timezone',$this->timezone,true);
		$criteria->compare('is_del',$this->is_del);
		$criteria->compare('first_letter',$this->first_letter,true);
		$criteria->compare('intro',$this->intro,true);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('last_feed_id',$this->last_feed_id,true);
		$criteria->compare('last_post_time',$this->last_post_time,true);
		$criteria->compare('search_key',$this->search_key,true);
		$criteria->compare('invite_code',$this->invite_code,true);
		$criteria->compare('feed_email_time',$this->feed_email_time,true);
		$criteria->compare('send_email_time',$this->send_email_time,true);
		$criteria->compare('my_college',$this->my_college,true);
		$criteria->compare('signup_college',$this->signup_college,true);
		$criteria->compare('study_phase',$this->study_phase,true);
		$criteria->compare('my_study_level',$this->my_study_level);
		$criteria->compare('find_study_level',$this->find_study_level);
		$criteria->compare('mail_activate',$this->mail_activate);
		$criteria->compare('phone_activate',$this->phone_activate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

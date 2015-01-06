<?php

/**
 * This is the model class for table "{{zy_order}}".
 *
 * The followings are the available columns in table '{{zy_order}}':
 * @property string $id
 * @property string $uid
 * @property string $muid
 * @property string $video_id
 * @property string $old_price
 * @property string $discount
 * @property integer $discount_type
 * @property string $price
 * @property integer $order_album_id
 * @property integer $percent
 * @property string $user_num
 * @property string $master_num
 * @property integer $learn_status
 * @property string $ctime
 * @property integer $is_del
 * @property integer $type
 */
class ZyOrder extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{zy_order}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('discount_type, order_album_id, percent, learn_status, is_del, type', 'numerical', 'integerOnly'=>true),
			array('uid, muid, video_id, ctime', 'length', 'max'=>11),
			array('old_price, price, user_num, master_num', 'length', 'max'=>10),
			array('discount', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, muid, video_id, old_price, discount, discount_type, price, order_album_id, percent, user_num, master_num, learn_status, ctime, is_del, type', 'safe', 'on'=>'search'),
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
			'uid' => '下单用户ID',
			'muid' => '卖家用户UID',
			'video_id' => '课程ID',
			'old_price' => '原价',
			'discount' => '享受的折扣',
			'discount_type' => '折扣类型,(0:未享受,1:会员折扣,2:限时优惠)',
			'price' => '课程价格',
			'order_album_id' => '专辑ID,通过专辑支付时设置',
			'percent' => '分成比例',
			'user_num' => '用户获得数量',
			'master_num' => '网站获得数量',
			'learn_status' => '学习状态(0:未开始,1:学习中,2:已完成)',
			'ctime' => '购买创建时间',
			'is_del' => '是否已经删除[1:删除]',
			'type' => 'Type',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('muid',$this->muid,true);
		$criteria->compare('video_id',$this->video_id,true);
		$criteria->compare('old_price',$this->old_price,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('discount_type',$this->discount_type);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('order_album_id',$this->order_album_id);
		$criteria->compare('percent',$this->percent);
		$criteria->compare('user_num',$this->user_num,true);
		$criteria->compare('master_num',$this->master_num,true);
		$criteria->compare('learn_status',$this->learn_status);
		$criteria->compare('ctime',$this->ctime,true);
		$criteria->compare('is_del',$this->is_del);
		$criteria->compare('type',$this->type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ZyOrder the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

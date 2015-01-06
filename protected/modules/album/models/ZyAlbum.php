<?php

/**
 * This is the model class for table "{{zy_album}}".
 *
 * The followings are the available columns in table '{{zy_album}}':
 * @property integer $id
 * @property string $uid
 * @property string $album_title
 * @property integer $big_ids
 * @property integer $album_category
 * @property integer $is_del
 * @property string $album_video
 * @property integer $album_question_count
 * @property integer $album_note_count
 * @property integer $album_comment_count
 * @property integer $album_score
 * @property integer $album_collect_count
 * @property string $ctime
 * @property integer $middle_ids
 * @property integer $small_ids
 * @property string $album_intro
 * @property string $fullcategorypath
 * @property integer $original_recommend
 * @property integer $re_sort
 * @property integer $best_recommend
 * @property integer $be_sort
 * @property string $listingtime
 * @property string $uctime
 * @property string $str_tag
 * @property string $album_tag
 * @property integer $album_order_count
 * @property integer $is_share
 * @property integer $is_offical
 * @property string $teaching_ids
 * @property string $utime
 * @property integer $album_click_count
 * @property integer $school_category
 */
class ZyAlbum extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{zy_album}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uid, album_title, album_category, album_intro, fullcategorypath, str_tag, album_tag, teaching_ids', 'required'),
			array('big_ids, album_category, is_del, album_question_count, album_note_count, album_comment_count, album_score, album_collect_count, middle_ids, small_ids, original_recommend, re_sort, best_recommend, be_sort, album_order_count, is_share, is_offical, album_click_count, school_category', 'numerical', 'integerOnly'=>true),
			array('uid, ctime, listingtime, uctime, utime', 'length', 'max'=>11),
			array('album_title, album_video, str_tag', 'length', 'max'=>64),
			array('fullcategorypath, teaching_ids', 'length', 'max'=>32),
			array('album_tag', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, uid, album_title, big_ids, album_category, is_del, album_video, album_question_count, album_note_count, album_comment_count, album_score, album_collect_count, ctime, middle_ids, small_ids, album_intro, fullcategorypath, original_recommend, re_sort, best_recommend, be_sort, listingtime, uctime, str_tag, album_tag, album_order_count, is_share, is_offical, teaching_ids, utime, album_click_count, school_category', 'safe', 'on'=>'search'),
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
			'id' => '辑专id',
			'uid' => '建者创id',
			'album_title' => '专辑名称',
			'big_ids' => '大封面id',
			'album_category' => '辑专分类',
			'is_del' => '否是删除(隐藏) 0:不删除，1:删除',
			'album_video' => '辑专中的课程id',
			'album_question_count' => '专辑提问数',
			'album_note_count' => '辑专笔记数',
			'album_comment_count' => '记笔评价数',
			'album_score' => '专辑评分',
			'album_collect_count' => '专辑收藏个数',
			'ctime' => '创建时间',
			'middle_ids' => '中封面',
			'small_ids' => '小封面id',
			'album_intro' => '专辑简介',
			'fullcategorypath' => '专辑分类全路径',
			'original_recommend' => '最佳原创',
			're_sort' => '原创权重',
			'best_recommend' => '编辑精选',
			'be_sort' => '精选权重',
			'listingtime' => '上架时间',
			'uctime' => '下架时间',
			'str_tag' => '字符串类型tag',
			'album_tag' => 'tagid',
			'album_order_count' => '订单数量',
			'is_share' => '是否分享，分享到点播(0,1分享)',
			'is_offical' => '是否管理员发布',
			'teaching_ids' => '授课背景图片id',
			'utime' => '更新时间',
			'album_click_count' => 'Album Click Count',
			'school_category' => 'School Category',
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
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('album_title',$this->album_title,true);
		$criteria->compare('big_ids',$this->big_ids);
		$criteria->compare('album_category',$this->album_category);
		$criteria->compare('is_del',$this->is_del);
		$criteria->compare('album_video',$this->album_video,true);
		$criteria->compare('album_question_count',$this->album_question_count);
		$criteria->compare('album_note_count',$this->album_note_count);
		$criteria->compare('album_comment_count',$this->album_comment_count);
		$criteria->compare('album_score',$this->album_score);
		$criteria->compare('album_collect_count',$this->album_collect_count);
		$criteria->compare('ctime',$this->ctime,true);
		$criteria->compare('middle_ids',$this->middle_ids);
		$criteria->compare('small_ids',$this->small_ids);
		$criteria->compare('album_intro',$this->album_intro,true);
		$criteria->compare('fullcategorypath',$this->fullcategorypath,true);
		$criteria->compare('original_recommend',$this->original_recommend);
		$criteria->compare('re_sort',$this->re_sort);
		$criteria->compare('best_recommend',$this->best_recommend);
		$criteria->compare('be_sort',$this->be_sort);
		$criteria->compare('listingtime',$this->listingtime,true);
		$criteria->compare('uctime',$this->uctime,true);
		$criteria->compare('str_tag',$this->str_tag,true);
		$criteria->compare('album_tag',$this->album_tag,true);
		$criteria->compare('album_order_count',$this->album_order_count);
		$criteria->compare('is_share',$this->is_share);
		$criteria->compare('is_offical',$this->is_offical);
		$criteria->compare('teaching_ids',$this->teaching_ids,true);
		$criteria->compare('utime',$this->utime,true);
		$criteria->compare('album_click_count',$this->album_click_count);
		$criteria->compare('school_category',$this->school_category);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ZyAlbum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

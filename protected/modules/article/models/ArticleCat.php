<?php

/**
 * This is the model class for table "{{article_cat}}".
 *
 * The followings are the available columns in table '{{article_cat}}':
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $cat_type
 * @property string $keywords
 * @property string $cat_desc
 * @property integer $parent_id
 * @property string $path_type
 * @property integer $level
 */
class ArticleCat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article_cat}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cat_type, parent_id, level', 'numerical', 'integerOnly'=>true),
            array('cat_name','required','message'=>'分类名称不能为空'),
            array('parent_id','required','message'=>'上级分类不能为空'),
            array('cat_desc','required','message'=>'分类描述不能为空'),
            array('keywords','required','message'=>'分类关键字不能为空'),
			array('cat_name, keywords', 'length', 'max'=>32),
			array('cat_desc', 'length', 'max'=>64),
			array('path_type', 'length', 'max'=>16),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cat_id, cat_name, cat_type, keywords, cat_desc, parent_id, path_type, level', 'safe', 'on'=>'search'),
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
			'cat_id' => 'Cat',
			'cat_name' => '分类名称',
			'cat_type' => '分类类型(1普通分类2系统分类3网站信息4帮助分类)',
			'keywords' => '分类关键字',
			'cat_desc' => '分类描述',
			'parent_id' => '分类父ID',
			'path_type' => '路径类型',
			'level' => '级别',
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

		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('cat_name',$this->cat_name,true);
		$criteria->compare('cat_type',$this->cat_type);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('cat_desc',$this->cat_desc,true);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('path_type',$this->path_type,true);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticleCat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

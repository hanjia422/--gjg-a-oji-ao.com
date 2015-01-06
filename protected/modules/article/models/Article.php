<?php

/**
 * This is the model class for table "{{article}}".
 *
 * The followings are the available columns in table '{{article}}':
 * @property integer $article_id
 * @property integer $cat_id
 * @property string $title
 * @property string $content
 * @property string $author
 * @property integer $author_id
 * @property string $author_email
 * @property string $keywords
 * @property integer $article_type
 * @property integer $is_show
 * @property string $c_time
 * @property string $file_url
 * @property integer $open_type
 * @property string $description
 * @property string $link
 * @property string $u_time
 */
class Article extends CActiveRecord
{
    public $cat_name='';
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{article}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'required'),
            array('cat_id','required','message'=>'分类不能为空'),
			array(' cat_id,author_id, article_type, is_show, open_type', 'numerical','message'=>'不能为空', 'integerOnly'=>true),
			array('title', 'length', 'max'=>150),
            array('title','required','message'=>'资讯名称不能为空'),
            array('keywords','required','message'=>'关键字不能为空'),
            array('description','required','message'=>'资讯摘要不能为空'),
            array('link','required','message'=>'来源不能为空'),
            array('author','required','message'=>'作者不能为空'),
            array('author_email','required','message'=>'作者邮箱不能为空'),
			array('author, keywords', 'length', 'max'=>32),
			array('author_email', 'length', 'max'=>64),
			array('c_time, u_time', 'length', 'max'=>10),
			array('file_url, description, link', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('article_id, cat_id, title, content, author, author_id, author_email, keywords, article_type, is_show, c_time, file_url, open_type, description, link, u_time', 'safe', 'on'=>'search'),
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
			'article_id' => 'Article',
			'cat_id' => '上级分类',
			'title' => '文章标题',
			'content' => 'Content',
			'author' => '作者',
			'author_id' => '作者ID',
			'author_email' => '作者email',
			'keywords' => '文章的关键字',
			'article_type' => '文章类型',
			'is_show' => '是否显示1显示0不显示',
			'c_time' => '添加时间',
			'file_url' => '上传文件或外部文件的url',
			'open_type' => '打开类型0正常1会在文章最后显示file_url的相关下载连接',
			'description' => '资讯摘要',
			'link' => '资讯来源url',
			'u_time' => '添加时间',
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

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('author_email',$this->author_email,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('article_type',$this->article_type);
		$criteria->compare('is_show',$this->is_show);
		$criteria->compare('c_time',$this->c_time,true);
		$criteria->compare('file_url',$this->file_url,true);
		$criteria->compare('open_type',$this->open_type);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('u_time',$this->u_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

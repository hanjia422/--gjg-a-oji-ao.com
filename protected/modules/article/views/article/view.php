<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Article', 'url'=>array('index')),
	array('label'=>'Create Article', 'url'=>array('create')),
	array('label'=>'Update Article', 'url'=>array('update', 'id'=>$model->article_id)),
	array('label'=>'Delete Article', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->article_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Article', 'url'=>array('admin')),
);
?>

<h1>View Article #<?php echo $model->article_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'article_id',
		'cat_id',
		'title',
		'content',
		'author',
		'author_id',
		'author_email',
		'keywords',
		'article_type',
		'is_show',
		'c_time',
		'file_url',
		'open_type',
		'description',
	),
)); ?>

<?php
/* @var $this ArticleCatController */
/* @var $model ArticleCat */

$this->breadcrumbs=array(
	'Article Cats'=>array('index'),
	$model->cat_id,
);

$this->menu=array(
	array('label'=>'List ArticleCat', 'url'=>array('index')),
	array('label'=>'Create ArticleCat', 'url'=>array('create')),
	array('label'=>'Update ArticleCat', 'url'=>array('update', 'id'=>$model->cat_id)),
	array('label'=>'Delete ArticleCat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticleCat', 'url'=>array('admin')),
);
?>

<h1>View ArticleCat #<?php echo $model->cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cat_id',
		'cat_name',
		'cat_type',
		'keywords',
		'cat_desc',
		'parent_id',
	),
)); ?>

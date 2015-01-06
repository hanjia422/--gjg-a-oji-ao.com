<?php
/* @var $this ArticleCatController */
/* @var $model ArticleCat */

$this->breadcrumbs=array(
	'Article Cats'=>array('index'),
	$model->cat_id=>array('view','id'=>$model->cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticleCat', 'url'=>array('index')),
	array('label'=>'Create ArticleCat', 'url'=>array('create')),
	array('label'=>'View ArticleCat', 'url'=>array('view', 'id'=>$model->cat_id)),
	array('label'=>'Manage ArticleCat', 'url'=>array('admin')),
);
?>

<h1>Update ArticleCat <?php echo $model->cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
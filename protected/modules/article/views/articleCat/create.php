<?php
/* @var $this ArticleCatController */
/* @var $model ArticleCat */

$this->breadcrumbs=array(
	'Article Cats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticleCat', 'url'=>array('index')),
	array('label'=>'Manage ArticleCat', 'url'=>array('admin')),
);
?>

<h1>Create ArticleCat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
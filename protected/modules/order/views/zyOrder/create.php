<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */

$this->breadcrumbs=array(
	'Zy Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ZyOrder', 'url'=>array('index')),
	array('label'=>'Manage ZyOrder', 'url'=>array('admin')),
);
?>

<h1>Create ZyOrder</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
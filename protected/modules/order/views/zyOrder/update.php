<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */

$this->breadcrumbs=array(
	'Zy Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ZyOrder', 'url'=>array('index')),
	array('label'=>'Create ZyOrder', 'url'=>array('create')),
	array('label'=>'View ZyOrder', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ZyOrder', 'url'=>array('admin')),
);
?>

<h1>Update ZyOrder <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
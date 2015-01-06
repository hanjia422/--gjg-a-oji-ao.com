<?php
/* @var $this GCourceTeacherController */
/* @var $model GCourceTeacher */

$this->breadcrumbs=array(
	'Gcource Teachers'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GCourceTeacher', 'url'=>array('index')),
	array('label'=>'Create GCourceTeacher', 'url'=>array('create')),
	array('label'=>'View GCourceTeacher', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GCourceTeacher', 'url'=>array('admin')),
);
?>

<h1>Update GCourceTeacher <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
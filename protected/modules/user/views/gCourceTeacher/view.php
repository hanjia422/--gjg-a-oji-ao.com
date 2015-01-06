<?php
/* @var $this GCourceTeacherController */
/* @var $model GCourceTeacher */

$this->breadcrumbs=array(
	'Gcource Teachers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GCourceTeacher', 'url'=>array('index')),
	array('label'=>'Create GCourceTeacher', 'url'=>array('create')),
	array('label'=>'Update GCourceTeacher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GCourceTeacher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GCourceTeacher', 'url'=>array('admin')),
);
?>

<h1>View GCourceTeacher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jname',
		'avator',
		'jdes',
		'ename',
		'title',
		'ctime',
	),
)); ?>

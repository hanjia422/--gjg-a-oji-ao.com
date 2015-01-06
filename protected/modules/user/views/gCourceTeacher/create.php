<?php
/* @var $this GCourceTeacherController */
/* @var $model GCourceTeacher */

$this->breadcrumbs=array(
	'Gcource Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GCourceTeacher', 'url'=>array('index')),
	array('label'=>'Manage GCourceTeacher', 'url'=>array('admin')),
);
?>

<h1>Create GCourceTeacher</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
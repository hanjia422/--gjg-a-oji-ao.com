<?php
/* @var $this GCourceTeacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gcource Teachers',
);

$this->menu=array(
	array('label'=>'Create GCourceTeacher', 'url'=>array('create')),
	array('label'=>'Manage GCourceTeacher', 'url'=>array('admin')),
);
?>

<h1>Gcource Teachers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

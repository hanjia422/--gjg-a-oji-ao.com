<?php
/* @var $this ZyOrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zy Orders',
);

$this->menu=array(
	array('label'=>'Create ZyOrder', 'url'=>array('create')),
	array('label'=>'Manage ZyOrder', 'url'=>array('admin')),
);
?>

<h1>Zy Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

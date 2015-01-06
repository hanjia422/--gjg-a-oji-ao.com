<?php
/* @var $this ArticleCatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Article Cats',
);

$this->menu=array(
	array('label'=>'Create ArticleCat', 'url'=>array('create')),
	array('label'=>'Manage ArticleCat', 'url'=>array('admin')),
);
?>

<h1>Article Cats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this ZyAlbumController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zy Albums',
);

$this->menu=array(
	array('label'=>'Create ZyAlbum', 'url'=>array('create')),
	array('label'=>'Manage ZyAlbum', 'url'=>array('admin')),
);
?>

<h1>Zy Albums</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

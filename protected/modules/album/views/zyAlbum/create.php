<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */

$this->breadcrumbs=array(
	'Zy Albums'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ZyAlbum', 'url'=>array('index')),
	array('label'=>'Manage ZyAlbum', 'url'=>array('admin')),
);
?>

<h1>Create ZyAlbum</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
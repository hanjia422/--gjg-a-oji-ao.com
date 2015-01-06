<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */

$this->breadcrumbs=array(
	'Zy Albums'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ZyAlbum', 'url'=>array('index')),
	array('label'=>'Create ZyAlbum', 'url'=>array('create')),
	array('label'=>'View ZyAlbum', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ZyAlbum', 'url'=>array('admin')),
);
?>

<h1>Update ZyAlbum <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
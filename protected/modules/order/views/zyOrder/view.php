<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */

$this->breadcrumbs=array(
	'Zy Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ZyOrder', 'url'=>array('index')),
	array('label'=>'Create ZyOrder', 'url'=>array('create')),
	array('label'=>'Update ZyOrder', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ZyOrder', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ZyOrder', 'url'=>array('admin')),
);
?>

<h1>View ZyOrder #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'muid',
		'video_id',
		'old_price',
		'discount',
		'discount_type',
		'price',
		'order_album_id',
		'percent',
		'user_num',
		'master_num',
		'learn_status',
		'ctime',
		'is_del',
		'type',
	),
)); ?>

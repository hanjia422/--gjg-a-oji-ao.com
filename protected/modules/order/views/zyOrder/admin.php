<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */

$this->breadcrumbs=array(
	'Zy Orders'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ZyOrder', 'url'=>array('index')),
	array('label'=>'Create ZyOrder', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zy-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Zy Orders</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'zy-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'uid',
		'muid',
		'video_id',
		'old_price',
		'discount',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

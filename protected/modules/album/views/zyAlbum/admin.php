<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */

$this->breadcrumbs=array(
	'Zy Albums'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ZyAlbum', 'url'=>array('index')),
	array('label'=>'Create ZyAlbum', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zy-album-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Zy Albums</h1>

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
	'id'=>'zy-album-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'uid',
		'album_title',
		'big_ids',
		'album_category',
		'is_del',
		/*
		'album_video',
		'album_question_count',
		'album_note_count',
		'album_comment_count',
		'album_score',
		'album_collect_count',
		'ctime',
		'middle_ids',
		'small_ids',
		'album_intro',
		'fullcategorypath',
		'original_recommend',
		're_sort',
		'best_recommend',
		'be_sort',
		'listingtime',
		'uctime',
		'str_tag',
		'album_tag',
		'album_order_count',
		'is_share',
		'is_offical',
		'teaching_ids',
		'utime',
		'album_click_count',
		'school_category',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

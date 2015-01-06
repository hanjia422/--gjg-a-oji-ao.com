<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */

$this->breadcrumbs=array(
	'Zy Albums'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ZyAlbum', 'url'=>array('index')),
	array('label'=>'Create ZyAlbum', 'url'=>array('create')),
	array('label'=>'Update ZyAlbum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ZyAlbum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ZyAlbum', 'url'=>array('admin')),
);
?>

<h1>View ZyAlbum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'album_title',
		'big_ids',
		'album_category',
		'is_del',
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
	),
)); ?>

<?php
/* @var $this ZyAlbumController */
/* @var $data ZyAlbum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_title')); ?>:</b>
	<?php echo CHtml::encode($data->album_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('big_ids')); ?>:</b>
	<?php echo CHtml::encode($data->big_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_category')); ?>:</b>
	<?php echo CHtml::encode($data->album_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_del')); ?>:</b>
	<?php echo CHtml::encode($data->is_del); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_video')); ?>:</b>
	<?php echo CHtml::encode($data->album_video); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('album_question_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_question_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_note_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_note_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_comment_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_comment_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_score')); ?>:</b>
	<?php echo CHtml::encode($data->album_score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_collect_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_collect_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_ids')); ?>:</b>
	<?php echo CHtml::encode($data->middle_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('small_ids')); ?>:</b>
	<?php echo CHtml::encode($data->small_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_intro')); ?>:</b>
	<?php echo CHtml::encode($data->album_intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullcategorypath')); ?>:</b>
	<?php echo CHtml::encode($data->fullcategorypath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('original_recommend')); ?>:</b>
	<?php echo CHtml::encode($data->original_recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('re_sort')); ?>:</b>
	<?php echo CHtml::encode($data->re_sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('best_recommend')); ?>:</b>
	<?php echo CHtml::encode($data->best_recommend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('be_sort')); ?>:</b>
	<?php echo CHtml::encode($data->be_sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('listingtime')); ?>:</b>
	<?php echo CHtml::encode($data->listingtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uctime')); ?>:</b>
	<?php echo CHtml::encode($data->uctime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('str_tag')); ?>:</b>
	<?php echo CHtml::encode($data->str_tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_tag')); ?>:</b>
	<?php echo CHtml::encode($data->album_tag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_order_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_order_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_share')); ?>:</b>
	<?php echo CHtml::encode($data->is_share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_offical')); ?>:</b>
	<?php echo CHtml::encode($data->is_offical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teaching_ids')); ?>:</b>
	<?php echo CHtml::encode($data->teaching_ids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utime')); ?>:</b>
	<?php echo CHtml::encode($data->utime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_click_count')); ?>:</b>
	<?php echo CHtml::encode($data->album_click_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_category')); ?>:</b>
	<?php echo CHtml::encode($data->school_category); ?>
	<br />

	*/ ?>

</div>
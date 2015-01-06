<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_title'); ?>
		<?php echo $form->textField($model,'album_title',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'big_ids'); ?>
		<?php echo $form->textField($model,'big_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_category'); ?>
		<?php echo $form->textField($model,'album_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_video'); ?>
		<?php echo $form->textField($model,'album_video',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_question_count'); ?>
		<?php echo $form->textField($model,'album_question_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_note_count'); ?>
		<?php echo $form->textField($model,'album_note_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_comment_count'); ?>
		<?php echo $form->textField($model,'album_comment_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_score'); ?>
		<?php echo $form->textField($model,'album_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_collect_count'); ?>
		<?php echo $form->textField($model,'album_collect_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middle_ids'); ?>
		<?php echo $form->textField($model,'middle_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'small_ids'); ?>
		<?php echo $form->textField($model,'small_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_intro'); ?>
		<?php echo $form->textArea($model,'album_intro',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullcategorypath'); ?>
		<?php echo $form->textField($model,'fullcategorypath',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'original_recommend'); ?>
		<?php echo $form->textField($model,'original_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'re_sort'); ?>
		<?php echo $form->textField($model,'re_sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'best_recommend'); ?>
		<?php echo $form->textField($model,'best_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'be_sort'); ?>
		<?php echo $form->textField($model,'be_sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'listingtime'); ?>
		<?php echo $form->textField($model,'listingtime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uctime'); ?>
		<?php echo $form->textField($model,'uctime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'str_tag'); ?>
		<?php echo $form->textField($model,'str_tag',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_tag'); ?>
		<?php echo $form->textField($model,'album_tag',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_order_count'); ?>
		<?php echo $form->textField($model,'album_order_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_share'); ?>
		<?php echo $form->textField($model,'is_share'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_offical'); ?>
		<?php echo $form->textField($model,'is_offical'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teaching_ids'); ?>
		<?php echo $form->textField($model,'teaching_ids',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utime'); ?>
		<?php echo $form->textField($model,'utime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'album_click_count'); ?>
		<?php echo $form->textField($model,'album_click_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_category'); ?>
		<?php echo $form->textField($model,'school_category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
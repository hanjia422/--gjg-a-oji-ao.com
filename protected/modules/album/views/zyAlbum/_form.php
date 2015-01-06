<?php
/* @var $this ZyAlbumController */
/* @var $model ZyAlbum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zy-album-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_title'); ?>
		<?php echo $form->textField($model,'album_title',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'album_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'big_ids'); ?>
		<?php echo $form->textField($model,'big_ids'); ?>
		<?php echo $form->error($model,'big_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_category'); ?>
		<?php echo $form->textField($model,'album_category'); ?>
		<?php echo $form->error($model,'album_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
		<?php echo $form->error($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_video'); ?>
		<?php echo $form->textField($model,'album_video',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'album_video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_question_count'); ?>
		<?php echo $form->textField($model,'album_question_count'); ?>
		<?php echo $form->error($model,'album_question_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_note_count'); ?>
		<?php echo $form->textField($model,'album_note_count'); ?>
		<?php echo $form->error($model,'album_note_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_comment_count'); ?>
		<?php echo $form->textField($model,'album_comment_count'); ?>
		<?php echo $form->error($model,'album_comment_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_score'); ?>
		<?php echo $form->textField($model,'album_score'); ?>
		<?php echo $form->error($model,'album_score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_collect_count'); ?>
		<?php echo $form->textField($model,'album_collect_count'); ?>
		<?php echo $form->error($model,'album_collect_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_ids'); ?>
		<?php echo $form->textField($model,'middle_ids'); ?>
		<?php echo $form->error($model,'middle_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'small_ids'); ?>
		<?php echo $form->textField($model,'small_ids'); ?>
		<?php echo $form->error($model,'small_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_intro'); ?>
		<?php echo $form->textArea($model,'album_intro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'album_intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullcategorypath'); ?>
		<?php echo $form->textField($model,'fullcategorypath',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fullcategorypath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_recommend'); ?>
		<?php echo $form->textField($model,'original_recommend'); ?>
		<?php echo $form->error($model,'original_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'re_sort'); ?>
		<?php echo $form->textField($model,'re_sort'); ?>
		<?php echo $form->error($model,'re_sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'best_recommend'); ?>
		<?php echo $form->textField($model,'best_recommend'); ?>
		<?php echo $form->error($model,'best_recommend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'be_sort'); ?>
		<?php echo $form->textField($model,'be_sort'); ?>
		<?php echo $form->error($model,'be_sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'listingtime'); ?>
		<?php echo $form->textField($model,'listingtime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'listingtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uctime'); ?>
		<?php echo $form->textField($model,'uctime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'uctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'str_tag'); ?>
		<?php echo $form->textField($model,'str_tag',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'str_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_tag'); ?>
		<?php echo $form->textField($model,'album_tag',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'album_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_order_count'); ?>
		<?php echo $form->textField($model,'album_order_count'); ?>
		<?php echo $form->error($model,'album_order_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_share'); ?>
		<?php echo $form->textField($model,'is_share'); ?>
		<?php echo $form->error($model,'is_share'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_offical'); ?>
		<?php echo $form->textField($model,'is_offical'); ?>
		<?php echo $form->error($model,'is_offical'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teaching_ids'); ?>
		<?php echo $form->textField($model,'teaching_ids',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'teaching_ids'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utime'); ?>
		<?php echo $form->textField($model,'utime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'utime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'album_click_count'); ?>
		<?php echo $form->textField($model,'album_click_count'); ?>
		<?php echo $form->error($model,'album_click_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_category'); ?>
		<?php echo $form->textField($model,'school_category'); ?>
		<?php echo $form->error($model,'school_category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
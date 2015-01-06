<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zy-order-form',
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
		<?php echo $form->labelEx($model,'muid'); ?>
		<?php echo $form->textField($model,'muid',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'muid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'old_price'); ?>
		<?php echo $form->textField($model,'old_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'old_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount_type'); ?>
		<?php echo $form->textField($model,'discount_type'); ?>
		<?php echo $form->error($model,'discount_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_album_id'); ?>
		<?php echo $form->textField($model,'order_album_id'); ?>
		<?php echo $form->error($model,'order_album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percent'); ?>
		<?php echo $form->textField($model,'percent'); ?>
		<?php echo $form->error($model,'percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_num'); ?>
		<?php echo $form->textField($model,'user_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'master_num'); ?>
		<?php echo $form->textField($model,'master_num',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'master_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'learn_status'); ?>
		<?php echo $form->textField($model,'learn_status'); ?>
		<?php echo $form->error($model,'learn_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
		<?php echo $form->error($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
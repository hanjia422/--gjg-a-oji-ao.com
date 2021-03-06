<?php
/* @var $this ArticleCatController */
/* @var $model ArticleCat */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-cat-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_name'); ?>
		<?php echo $form->textField($model,'cat_name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'cat_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_type'); ?>
		<?php echo $form->textField($model,'cat_type'); ?>
		<?php echo $form->error($model,'cat_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_desc'); ?>
		<?php echo $form->textField($model,'cat_desc',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'cat_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
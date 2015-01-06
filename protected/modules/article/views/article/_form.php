<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_email'); ?>
		<?php echo $form->textField($model,'author_email',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'author_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'article_type'); ?>
		<?php echo $form->textField($model,'article_type'); ?>
		<?php echo $form->error($model,'article_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_show'); ?>
		<?php echo $form->textField($model,'is_show'); ?>
		<?php echo $form->error($model,'is_show'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c_time'); ?>
		<?php echo $form->textField($model,'c_time',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'c_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_url'); ?>
		<?php echo $form->textField($model,'file_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'open_type'); ?>
		<?php echo $form->textField($model,'open_type'); ?>
		<?php echo $form->error($model,'open_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this GCourceTeacherController */
/* @var $model GCourceTeacher */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gcource-teacher-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jname'); ?>
		<?php echo $form->textField($model,'jname',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'jname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avator'); ?>
		<?php echo $form->textField($model,'avator',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'avator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jdes'); ?>
		<?php echo $form->textArea($model,'jdes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'jdes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ename'); ?>
		<?php echo $form->textField($model,'ename',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'ename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
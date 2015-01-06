<?php
/* @var $this ArticleCatController */
/* @var $model ArticleCat */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_name'); ?>
		<?php echo $form->textField($model,'cat_name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_type'); ?>
		<?php echo $form->textField($model,'cat_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_desc'); ?>
		<?php echo $form->textField($model,'cat_desc',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
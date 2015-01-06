<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'article_id'); ?>
		<?php echo $form->textField($model,'article_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cat_id'); ?>
		<?php echo $form->textField($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author_email'); ?>
		<?php echo $form->textField($model,'author_email',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'article_type'); ?>
		<?php echo $form->textField($model,'article_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_show'); ?>
		<?php echo $form->textField($model,'is_show'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_time'); ?>
		<?php echo $form->textField($model,'c_time',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_url'); ?>
		<?php echo $form->textField($model,'file_url',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'open_type'); ?>
		<?php echo $form->textField($model,'open_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
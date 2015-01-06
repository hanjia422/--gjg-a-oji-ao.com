<?php
/* @var $this ZyOrderController */
/* @var $model ZyOrder */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'muid'); ?>
		<?php echo $form->textField($model,'muid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_id'); ?>
		<?php echo $form->textField($model,'video_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'old_price'); ?>
		<?php echo $form->textField($model,'old_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount'); ?>
		<?php echo $form->textField($model,'discount',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discount_type'); ?>
		<?php echo $form->textField($model,'discount_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_album_id'); ?>
		<?php echo $form->textField($model,'order_album_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'percent'); ?>
		<?php echo $form->textField($model,'percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_num'); ?>
		<?php echo $form->textField($model,'user_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'master_num'); ?>
		<?php echo $form->textField($model,'master_num',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'learn_status'); ?>
		<?php echo $form->textField($model,'learn_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
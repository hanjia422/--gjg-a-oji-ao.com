<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'uid'); ?>
		<?php echo $form->textField($model,'uid',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_salt'); ?>
		<?php echo $form->textField($model,'login_salt',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uname'); ?>
		<?php echo $form->textField($model,'uname',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_audit'); ?>
		<?php echo $form->textField($model,'is_audit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_init'); ?>
		<?php echo $form->textField($model,'is_init'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'identity'); ?>
		<?php echo $form->textField($model,'identity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'api_key'); ?>
		<?php echo $form->textField($model,'api_key',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'domain'); ?>
		<?php echo $form->textField($model,'domain',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'province'); ?>
		<?php echo $form->textField($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reg_ip'); ?>
		<?php echo $form->textField($model,'reg_ip',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timezone'); ?>
		<?php echo $form->textField($model,'timezone',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_letter'); ?>
		<?php echo $form->textField($model,'first_letter',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intro'); ?>
		<?php echo $form->textField($model,'intro',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_login_time'); ?>
		<?php echo $form->textField($model,'last_login_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_feed_id'); ?>
		<?php echo $form->textField($model,'last_feed_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_post_time'); ?>
		<?php echo $form->textField($model,'last_post_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_key'); ?>
		<?php echo $form->textField($model,'search_key',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invite_code'); ?>
		<?php echo $form->textField($model,'invite_code',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feed_email_time'); ?>
		<?php echo $form->textField($model,'feed_email_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_email_time'); ?>
		<?php echo $form->textField($model,'send_email_time',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'my_college'); ?>
		<?php echo $form->textField($model,'my_college',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'signup_college'); ?>
		<?php echo $form->textField($model,'signup_college',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'study_phase'); ?>
		<?php echo $form->textField($model,'study_phase',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'my_study_level'); ?>
		<?php echo $form->textField($model,'my_study_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'find_study_level'); ?>
		<?php echo $form->textField($model,'find_study_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail_activate'); ?>
		<?php echo $form->textField($model,'mail_activate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_activate'); ?>
		<?php echo $form->textField($model,'phone_activate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
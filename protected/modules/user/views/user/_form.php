<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_salt'); ?>
		<?php echo $form->textField($model,'login_salt',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'login_salt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uname'); ?>
		<?php echo $form->textField($model,'uname',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'uname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex'); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_audit'); ?>
		<?php echo $form->textField($model,'is_audit'); ?>
		<?php echo $form->error($model,'is_audit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_init'); ?>
		<?php echo $form->textField($model,'is_init'); ?>
		<?php echo $form->error($model,'is_init'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identity'); ?>
		<?php echo $form->textField($model,'identity'); ?>
		<?php echo $form->error($model,'identity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'api_key'); ?>
		<?php echo $form->textField($model,'api_key',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'api_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domain'); ?>
		<?php echo $form->textField($model,'domain',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'domain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province'); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reg_ip'); ?>
		<?php echo $form->textField($model,'reg_ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'reg_ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timezone'); ?>
		<?php echo $form->textField($model,'timezone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'timezone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_del'); ?>
		<?php echo $form->textField($model,'is_del'); ?>
		<?php echo $form->error($model,'is_del'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_letter'); ?>
		<?php echo $form->textField($model,'first_letter',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'first_letter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intro'); ?>
		<?php echo $form->textField($model,'intro',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_time'); ?>
		<?php echo $form->textField($model,'last_login_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'last_login_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_feed_id'); ?>
		<?php echo $form->textField($model,'last_feed_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'last_feed_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_post_time'); ?>
		<?php echo $form->textField($model,'last_post_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'last_post_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_key'); ?>
		<?php echo $form->textField($model,'search_key',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'search_key'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invite_code'); ?>
		<?php echo $form->textField($model,'invite_code',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'invite_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'feed_email_time'); ?>
		<?php echo $form->textField($model,'feed_email_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'feed_email_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'send_email_time'); ?>
		<?php echo $form->textField($model,'send_email_time',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'send_email_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'my_college'); ?>
		<?php echo $form->textField($model,'my_college',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'my_college'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'signup_college'); ?>
		<?php echo $form->textField($model,'signup_college',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'signup_college'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'study_phase'); ?>
		<?php echo $form->textField($model,'study_phase',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'study_phase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'my_study_level'); ?>
		<?php echo $form->textField($model,'my_study_level'); ?>
		<?php echo $form->error($model,'my_study_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'find_study_level'); ?>
		<?php echo $form->textField($model,'find_study_level'); ?>
		<?php echo $form->error($model,'find_study_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail_activate'); ?>
		<?php echo $form->textField($model,'mail_activate'); ?>
		<?php echo $form->error($model,'mail_activate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_activate'); ?>
		<?php echo $form->textField($model,'phone_activate'); ?>
		<?php echo $form->error($model,'phone_activate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->uid), array('view', 'id'=>$data->uid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_salt')); ?>:</b>
	<?php echo CHtml::encode($data->login_salt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uname')); ?>:</b>
	<?php echo CHtml::encode($data->uname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_audit')); ?>:</b>
	<?php echo CHtml::encode($data->is_audit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
	<?php echo CHtml::encode($data->is_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_init')); ?>:</b>
	<?php echo CHtml::encode($data->is_init); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identity')); ?>:</b>
	<?php echo CHtml::encode($data->identity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('api_key')); ?>:</b>
	<?php echo CHtml::encode($data->api_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('domain')); ?>:</b>
	<?php echo CHtml::encode($data->domain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province')); ?>:</b>
	<?php echo CHtml::encode($data->province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_ip')); ?>:</b>
	<?php echo CHtml::encode($data->reg_ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timezone')); ?>:</b>
	<?php echo CHtml::encode($data->timezone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_del')); ?>:</b>
	<?php echo CHtml::encode($data->is_del); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_letter')); ?>:</b>
	<?php echo CHtml::encode($data->first_letter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intro')); ?>:</b>
	<?php echo CHtml::encode($data->intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_feed_id')); ?>:</b>
	<?php echo CHtml::encode($data->last_feed_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_post_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_post_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_key')); ?>:</b>
	<?php echo CHtml::encode($data->search_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invite_code')); ?>:</b>
	<?php echo CHtml::encode($data->invite_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feed_email_time')); ?>:</b>
	<?php echo CHtml::encode($data->feed_email_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_email_time')); ?>:</b>
	<?php echo CHtml::encode($data->send_email_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('my_college')); ?>:</b>
	<?php echo CHtml::encode($data->my_college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('signup_college')); ?>:</b>
	<?php echo CHtml::encode($data->signup_college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_phase')); ?>:</b>
	<?php echo CHtml::encode($data->study_phase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('my_study_level')); ?>:</b>
	<?php echo CHtml::encode($data->my_study_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('find_study_level')); ?>:</b>
	<?php echo CHtml::encode($data->find_study_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail_activate')); ?>:</b>
	<?php echo CHtml::encode($data->mail_activate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_activate')); ?>:</b>
	<?php echo CHtml::encode($data->phone_activate); ?>
	<br />

	*/ ?>

</div>
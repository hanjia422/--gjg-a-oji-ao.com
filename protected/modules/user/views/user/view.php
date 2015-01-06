<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->uid,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->uid)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->uid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'uid',
		'login',
		'password',
		'login_salt',
		'uname',
		'email',
		'phone',
		'sex',
		'location',
		'is_audit',
		'is_active',
		'is_init',
		'ctime',
		'identity',
		'api_key',
		'domain',
		'province',
		'city',
		'area',
		'reg_ip',
		'lang',
		'timezone',
		'is_del',
		'first_letter',
		'intro',
		'last_login_time',
		'last_feed_id',
		'last_post_time',
		'search_key',
		'invite_code',
		'feed_email_time',
		'send_email_time',
		'my_college',
		'signup_college',
		'study_phase',
		'my_study_level',
		'find_study_level',
		'mail_activate',
		'phone_activate',
	),
)); ?>

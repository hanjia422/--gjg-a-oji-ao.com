<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'uid',
		'login',
		'password',
		'login_salt',
		'uname',
		'email',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

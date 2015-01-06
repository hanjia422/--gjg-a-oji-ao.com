<?php
/* @var $this GCourceTeacherController */
/* @var $data GCourceTeacher */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jname')); ?>:</b>
	<?php echo CHtml::encode($data->jname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avator')); ?>:</b>
	<?php echo CHtml::encode($data->avator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jdes')); ?>:</b>
	<?php echo CHtml::encode($data->jdes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ename')); ?>:</b>
	<?php echo CHtml::encode($data->ename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />


</div>
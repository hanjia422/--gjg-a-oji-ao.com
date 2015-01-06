<?php
/* @var $this ZyOrderController */
/* @var $data ZyOrder */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muid')); ?>:</b>
	<?php echo CHtml::encode($data->muid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::encode($data->video_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_price')); ?>:</b>
	<?php echo CHtml::encode($data->old_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount_type')); ?>:</b>
	<?php echo CHtml::encode($data->discount_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_album_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_album_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percent')); ?>:</b>
	<?php echo CHtml::encode($data->percent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_num')); ?>:</b>
	<?php echo CHtml::encode($data->user_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('master_num')); ?>:</b>
	<?php echo CHtml::encode($data->master_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('learn_status')); ?>:</b>
	<?php echo CHtml::encode($data->learn_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_del')); ?>:</b>
	<?php echo CHtml::encode($data->is_del); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	*/ ?>

</div>
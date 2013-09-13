<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">
	<h2><?php echo CHtml::link($data->subject, array('view', 'id'=>$data->id)); ?></h2>
	<p>
		<?php echo CHtml::encode($data->content); ?>
	</p>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->email); ?>
	<br />

	<b>Comment <?php echo $data->commentCount; ?></b>
</div>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_id')); ?>:</b>
	<?php echo CHtml::encode($data->r_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_cg')); ?>:</b>
	<?php echo CHtml::encode($data->model_cg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_cg')); ?>:</b>
	<?php echo CHtml::encode($data->date_cg); ?>
	<br />


</div>
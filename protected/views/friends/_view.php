<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_cg')); ?>:</b>
	<?php echo CHtml::encode($data->from_cg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('to_cg')); ?>:</b>
	<?php echo CHtml::encode($data->to_cg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_cg')); ?>:</b>
	<?php echo CHtml::encode($data->date_cg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cg')); ?>:</b>
	<?php echo CHtml::encode($data->status_cg); ?>
	<br />


</div>
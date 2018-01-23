<div class="view"    style ="background:#e1f1f5;border:2px solid #bcd2d7; ">





	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo 'From'; ?>:</b>
	<?php $username = user::model()->findByPk($data->from_cg);if($username){echo $username->username ;}else{echo 'user not found';} ?>
	<br />


	<b><?php echo  'Date' ; ?>:</b>
	<?php echo CHtml::encode($data->date_cg); ?>
	<br />
 

</div>
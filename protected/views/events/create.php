<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Events', 'url'=>array('index')),
	array('label'=>'Manage Events', 'url'=>array('admin')),
);
?>

<h1>Create Events</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php

$this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'attribute'=>'from',
'options'=>array(
'dateFormat'=>'dd-mm-yy',
'showAnim'=>'fold',
),
'htmlOptions'=>array(
'style'=>'width:290px;'
),
));

$this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'attribute'=>'to',
'options'=>array(
'dateFormat'=>'dd-mm-yy',
'showAnim'=>'fold',
),
'htmlOptions'=>array(
'style'=>'width:290px;'
),
));

?>
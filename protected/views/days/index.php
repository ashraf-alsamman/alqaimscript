<?php
$this->breadcrumbs=array(
	'Days',
);

$this->menu=array(
	array('label'=>'Create Days', 'url'=>array('create')),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>Days</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

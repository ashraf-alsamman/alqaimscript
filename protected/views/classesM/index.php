<?php
$this->breadcrumbs=array(
	'Classes Ms',
);

$this->menu=array(
	array('label'=>'Create ClassesM', 'url'=>array('create')),
	array('label'=>'Manage ClassesM', 'url'=>array('admin')),
);
?>

<h1>Classes Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

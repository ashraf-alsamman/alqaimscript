<?php
$this->breadcrumbs=array(
	'Comments',
);

$this->menu=array(
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
echo adsf;
echo

?>

<h1>Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(()
	'dataProvider'=>$dataProvide;)
	'itemView'=>'_view',
)); ?>

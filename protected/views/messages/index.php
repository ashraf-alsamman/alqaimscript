<?php
$this->breadcrumbs=array(
	'Messages',
);


?>

<h1>Messages</h1>
<?php 
$my_id = Yii::app()->user->id ;
$dataProvider=new CActiveDataProvider('Messages', array(
    'criteria'=>array(
        'condition'=>"to_cg=$my_id",
        'order'=>'id DESC',
       // 'with'=>array('author'),
    ),
    'pagination'=>array(
        'pageSize'=>20,
    ),
));
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Time Tables'=>array('index'),
	$model->title,
);
/*
$this->menu=array(
	array('label'=>'List TimeTables', 'url'=>array('index')),
	array('label'=>'Create TimeTables', 'url'=>array('create')),
	array('label'=>'Update TimeTables', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TimeTables', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimeTables', 'url'=>array('admin')),
);
*/

?>

<h1>View Time Table <?php echo $model->title; ?></h1>

 



<div  id ="report"> <?php 	$TimeTable = TimeTable::model()->findAllBySql("select * from time_table where id = $model->id");
if (count($TimeTable) == 0){echo "not set"; }
else {echo "".count($TimeTable);}	 
	


echo CHtml::ajaxLink("",  array('report'), array( 'type'=>'POST',
		
	'update'=>'#report','live' =>'false'),array('id' =>'report' )); ?></div>
<?php
 
  Yii::app()->clientScript->registerCoreScript('jquery.ui');
 
$days =   Days::model()->findAllBySql("select * from days") ;
$lessons =   Lessons::model()->findAllBySql("select * from lessons") ;
 
foreach ($days as $day)
{
?><div class ="right_side"   style ="background:#e1f1f5;border:2px solid #bcd2d7; padding:0px 2px;   "><?php 
?><hr><div  style ="background:#a7d0dc ; padding:7px 2px;  "><?php echo $day->title .'<hr>';?> </div><hr><?php

	foreach ($lessons as $lesson)
	{
?><hr><div  style ="background:#f3f1c0 "><?php echo $lesson->title .'<hr>';?> </div><hr><?php

 $Grades =   Grades::model()->findAllBySql("select * from grades") ;
foreach ($Grades as $grade)
{
 
$classs =   ClassesM::model()->findAllByAttributes(array('grade_id'=>$grade->id)) ;
if (count($classs) > 0){
foreach ($classs as $class)
					{
					
 
				
$TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$model->id,'day_id'=>$day->id,'lesson_id'=>$lesson->id ,'class_id'=>$class->id)) ;
$id_r = 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;

if ($TimeTable_class)
{$style= "background:#d9eabe; border:2px solid #bcd2d7; padding:1px 1px; float:left; width: 112px ;-moz-opacity:0.2;color:#6f9e40";
 
?><div  id ="<?php echo 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;?>" style ="<?php echo $style;?>"><?php echo $class->title .'<hr>'; 
 
 echo Subjects::model()->findByPk($TimeTable_class->subject_id)->title;
 echo "<br>";
 echo Teachers::model()->findByPk($TimeTable_class->teacher_id)->name;
 


$teachers	= Teachers::model()->findAllBySql("select * from teachers") ;
 ?><div id ="school_id<?php echo $id_r;?>"><?php 
    
	?><div id ="_id<?php echo $id_r;?>"> </div>

	 </div> </div><?php
	
	
}














else {$style= "background:#f6ddcd; border:2px solid #bcd2d7; padding:1px 1px; float:left; width: 112px";


?><div  id ="<?php echo 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;?>" style ="<?php echo $style;?>">
					
					<?php echo $class->title .'<hr>'; 
echo "not set";
 ?><div id ="school_id<?php echo $id_r;?>"></div></div><!-- 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;--><?php
}

				


				 
					}//classs 
    }//if classs 
}//grades
    
	}//lessons
?> </div><?php
}//days  $(":selected").css("background-color","#c23bc0");


 




 




?>

<?php  include 'lang.php';  ?>
<?php
$data_not_in = ClassesM::model()->findAllBySql("
		select classes_m. * from classes_m   where  grade_id = $grade_id
		AND   classes_m.id   not IN (select class_id from teacher_class where    teacher_id  = $teacher_id)
		     ");
			$data_not_in_2 = ClassesM::model()->findBySql("
		select classes_m. * from classes_m   where  grade_id = $grade_id
		AND   classes_m.id   not IN (select class_id from teacher_class where    teacher_id  = $teacher_id)
		     ");

   if (count ($data_not_in) > 1)
 	{
?><div style="margin-top:7px"><?php
echo CHtml::dropdownList('ClassesM','id',CHtml::listData($data_not_in, 'id', 'title' ),   
array(
 'options' => array( //$model->grade=>array('selected'=>true)),                      
 'class'=>'green_select')  ) );
 ?>
</div>
<div class="da-button-row" style="background: #ffffff;padding-left: 0;float: left;"> 
<?php echo CHtml::ajaxLink(Yii::t($language,"Add Class"),  array('AddTeacherClass'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id,
 'class_id'=>'js:$(\'#ClassesM\').val()'),
	'update'=>"#ManageClasses",'live' =>'false'),array('id' => 'send-link-'.uniqid()
	,'class'=> "da-button green" ));  
    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {  
?><div class="da-button-row" style="background: #ffffff;padding-left: 0;float: left;"><?php
	    
 echo CHtml::ajaxLink(Yii::t($language,'Add') ."$data_not_in_2->title",  array('AddTeacherClass'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id,
 'class_id'=>$data_not_in_2->id),
	'update'=>"#ManageClasses",	  'live' =>'false'),array('id' => 'send-link-'.uniqid()
	, 'class'=> "da-button green" )); 
	   }

 	   else  
	   { ?><span class="null"><?php echo Yii::t($language,'no classes exist') ?></span> <?php }
 
   ?> <span style="margin-left:4px;" >
   <?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelTeacherClass'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id
 ,'student_id'=>'js:$(\'#Students\').val()'),
	'update'=>"#ManageClasses",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	,'class'=>"da-button red ")); 
    ?>
    </span>
	</div>
	</div>
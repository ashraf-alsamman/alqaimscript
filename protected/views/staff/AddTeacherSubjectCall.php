<?php  include 'lang.php';  ?>
	<div class="row">
    <?php 
		$data_not_in = Subjects::model()->findAllBySql("
		select subjects. * from subjects    
		  where  subjects.id   not IN (select subject_id from teacher_subject where    teacher_id  = $teacher_id)
		     ");
			$data_not_in_2 = Subjects::model()->findBySql("
		select subjects. * from subjects    
		  where  subjects.id   not IN (select subject_id from teacher_subject where    teacher_id  = $teacher_id)
		     ");

   if (count ($data_not_in) > 1)
 	{
 		
echo CHtml::dropdownList('Subjects','id',CHtml::listData($data_not_in, 'id', 'title' ),   
array(
 'options' => array( //$model->grade=>array('selected'=>true)),                      
'class'=>'green_select2335')  ) );
  ?><div class="da-button-row" style="background: #ffffff;padding-left: 0;float: left;"><?php

 echo CHtml::ajaxLink(Yii::t($language,'Add Subject'),  array('AddTeacherSubject'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id,
 'subject_id'=>'js:$(\'#Subjects\').val()'),
	'update'=>"#ManageSubjects",'live' =>'false'),array('id' => 'send-link-'.uniqid(),
	'class'=>'da-button green' ));  
	 

    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {
	    ?><div class="da-button-row" style="background: #ffffff;padding-left: 0;float: left;"><?php
		
 echo CHtml::ajaxLink(Yii::t($language,'Add')." $data_not_in_2->title",  array('AddTeacherSubject'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id,
 'subject_id'=>$data_not_in_2->id),
	'update'=>"#ManageSubjects",	  'live' =>'false'),array('id' => 'send-link-'.uniqid()
	,'class'=>'da-button green'  )); 
	   }

 	   else  
	   {?><span class="null"><?php echo Yii::t($language,'no subjects exist') ?></span><?php  }
 ?> <span style="margin-left:4px;" ><?php
    echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelSubjects'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id
 ,'student_id'=>'js:$(\'#Students\').val()'),
	'update'=>"#ManageSubjects",	  'live' =>'false'),array('id' => 'send-link-'.uniqid()
	, 'class'=> "da-button red" )); 
    ?>
    </span>
	</div>	</div>
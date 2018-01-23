<?php  include 'lang.php';  ?>
	<div class="row">
    <?php 
$data_not_in = Students::model()->findAllBySql("
		select students. * from students  where  grade =$grade_id  and class_m = $class_id
		AND   students.id   not IN (select student_id from parent_student where    parent_id  = $parent_id)
		     ");
$data_not_in_2 = Students::model()->findBySql("
		select students. * from students  where  grade =$grade_id  and class_m = $class_id
		AND   students.id   not IN (select student_id from parent_student where    parent_id  = $parent_id)
		     ");

 echo count($data_not_in);

   if (count ($data_not_in) > 1)
 	{
echo CHtml::dropdownList('Students','id',CHtml::listData($data_not_in, 'id', 'name' ),   
array(
 'options' => array( //$model->grade=>array('selected'=>true)),                      
 'style'=>'width:100px;','class'=>'green_select2335')  ) );
 
 echo CHtml::ajaxLink( Yii::t($language,"Add Student"),  array('AddParentStudent'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
 ,'student_id'=>'js:$(\'#Students\').val()'),
	'update'=>"#ChangeStudents",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() ));  
	 

    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {echo  
	   
	   $data_not_in_2->name; 
	    
 echo CHtml::ajaxLink(Yii::t($language,"Add another student"),  array('AddParentStudent'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
 ,'student_id'=>$data_not_in_2->id),
	'update'=>"#ChangeStudents",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() )); 
	   }

 	   else  
	   {echo  Yii::t($language,"No Students Exist");  }
 
    ?>
	
	</div>
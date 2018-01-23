<?php  include 'lang.php';  ?>
 <div  style="margin-top:7px">
    <?php 
				$data_not_in = Students::model()->findAllBySql("
		select students. * from students  where  grade =$grade_id  and class_m = $class_id
		AND   students.id   not IN (select student_id from parent_student where    parent_id  = $parent_id)
		     ");

			$data_not_in_2 = Students::model()->findBySql("
		select students. * from students  where  grade =$grade_id  and class_m = $class_id
		AND   students.id   not IN (select student_id from parent_student where    parent_id  = $parent_id)
		     ");

 // echo count($data_not_in);
 
   if (count ($data_not_in) > 1)
 	{
    
 echo CHtml::dropdownList('Students','id',CHtml::listData($data_not_in, 'id', 'name' ),   
array(
 'options' => array( //$model->grade=>array('selected'=>true)),                      
 'class'=>'green_select2335')  ) );
 ?><div style="float: left; padding-left: 0px;background-color: #ffffff;border:none;" class="da-button-row">
<?php 	
 echo CHtml::ajaxLink(Yii::t($language,"Add Student"),  array('AddParentStudent'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
 ,'student_id'=>'js:$(\'#Students\').val()'),
	'update'=>"#ManageMyStudents",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button green" ));  
	 
	?><span style="margin-left:4px;" ><?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('ManageMyStudents'), array( 'type'=>'POST','data'=>array(
 'parent_id'=>$parent_id),'update'=>"#ManageMyStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button red"  ));	
    ?></span></div><?php
 
 
 



    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {  
	   ?><br><?php
	 echo  $data_not_in_2->name; 
	    ?><br><?php
?><div style="float: left; padding-left: 0px;background-color: #ffffff;border:none;" class="da-button-row">
<?php echo CHtml::ajaxLink(Yii::t($language,"Add Student"),  array('AddParentStudent'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
,'student_id'=>$data_not_in_2->id),
'update'=>"#ManageMyStudents",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button green" )); 
	  
?><span style="margin-left:4px;" ><?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('ManageMyStudents'), array( 'type'=>'POST','data'=>array(
'parent_id'=>$parent_id),'update'=>"#ManageMyStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button red"  ));	
?></span></div><?php
		
 
	   
	   
	   
	   }

 	   else  
	   {echo Yii::t($language,"No Students Exist");  }
 
    ?>
	
	</div>
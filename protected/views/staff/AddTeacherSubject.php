	<div class="row">
    <?php 

	 $data_not_in = Subjects::model()->findAllBySql("
		select subjects. * from subjects    
		  where  subjects.id   not IN (select subject_id from teacher_subject where    teacher_id  = $teacher_id)
		     ");


			$data_not_in_2 = Students::model()->findBySql("
		select subjects. * from subjects    
		  where  subjects.id   not IN (select subject_id from teacher_subject where    teacher_id  = $teacher_id)
		     ");
 
   if (count ($data_not_in) > 1)
 	{
echo CHtml::dropdownList('Subjects','id',CHtml::listData($data_not_in, 'id', 'title' ),   
array(
 'options' => array( //$model->grade=>array('selected'=>true)),                      
'class'=>'green_select2335')  ) );
 
 echo CHtml::ajaxLink("Save Subjects",  array('AddTeacherSubject'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
 ,'student_id'=>'js:$(\'#Students\').val()'),
	'update'=>"#ManageData",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green' ));  
	 
    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {
	   
	   
	    
 echo CHtml::ajaxLink("Save $data_not_in_2->name",  array('AddTeacherSubject'), array( 'type'=>'POST','data'=>array(   'grade_id'=>$grade_id,'class_id'=>$class_id,'parent_id'=>$parent_id
 ,'student_id'=>$data_not_in_2->id),
	'update'=>"#ChangeStudents",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green' )); 
	   }

 	   else  
	   {echo "no Students";  }
 
    ?>
	
	</div>
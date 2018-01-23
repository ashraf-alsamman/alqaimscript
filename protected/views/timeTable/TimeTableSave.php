<div class="time_table_old">		
<?php   
					echo ClassesM::model()->findByPk($class_id)->title .'<hr>'; 
					
	$teachers	= Teachers::model()->findAllBySql("select * from staff where teacher = 1") ;
	 ?><select  class="teacher"><?php           
foreach($teachers as $teacher) 
{  ?> <option value="<?php echo $teacher->id;?>" <?php if ($teacher->id == $teacher_id){echo "selected";}?> ><?php echo $teacher->name; ?> </option><?php } 
	 ?></select><?php				

	 $subjects	= Subjects::model()->findAllBySql("select * from subjects") ;
	 ?><select  class="subject"><?php           
	 foreach($subjects as $subject) 
{  ?> <option value="<?php echo $subject->id; ?>" <?php if ($subject->id == $subject_id){echo "selected";}?>><?php echo $subject->title; ?> </option><?php } 
	 ?></select><?php		

			
echo CHtml::ajaxLink("save",  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'classe_id'=>$class_id
 ,'subject_id'=>'js:$(this).prev(\'.subject\').val()','teacher_id'=>'js:$(this).prev(\'.subject\').prev(\'.teacher\').val()' ),
	'update'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() ));  		
					
	?></div>
					
 
					
					
					

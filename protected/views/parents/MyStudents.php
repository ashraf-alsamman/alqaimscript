<?php
 include 'lang.php'; 
      
     $data = Students::model()->findAllBySql("SELECT t.* 
		FROM students AS t, parents AS s, parent_student AS ts
		WHERE 
		ts.parent_id = $parent_id
		AND ts.student_id  = t.id
		AND ts.parent_id  = s.id");
		
		foreach ($data as $key) {
				
			echo $key->name;
			
			
echo CHtml::ajaxLink(Yii::t($language,'Delete'),  array('DeleteStudent2'), array( 'type'=>'POST',

 'data'=>array( 'student_id'=>$key->id,
'parent_id'=>$parent_id),'update'=>"#ManageMyStudents",'live' =>'false'),array('id' => 'send-link-'.uniqid() ));
	echo "<br>";	
	 }
 
?>
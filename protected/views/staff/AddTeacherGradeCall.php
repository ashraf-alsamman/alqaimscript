	<?php  include 'lang.php';  ?>
	<div class="row">
    <?php 
	 		$data =	Grades::model()->findAll(array('order' => 'id'),'id','title');
	  if (count ($data) > 1)
	  {
	 echo CHtml::dropdownList('Grades[title]','id',CHtml::listData($data, 'id', 'title' ),   
array(
// 'options' => array($model->grade=>array('selected'=>true)),
'empty' => Yii::t($language,'Select Grade'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('AddTeacherClassCall'), 'type' => 'POST'
,'update'=>"#AddTeacherClass_call",                              
'data'=>array('grade_id'=>'js:$(this).val()','teacher_id'=>$teacher_id), )),                          
'class'=>'subject green_select')  ) ;
	 
	 }
	   elseif (count ($data) == 1)
	   {
	   echo  Grades::model()->find()->title;
	   }

 	   else  
	   {
	   	echo "no Grades";
	   }
    ?>
	
	</div>
	<div id="AddTeacherClass_call"></div>

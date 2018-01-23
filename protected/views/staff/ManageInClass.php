	<?php  include 'lang.php';  ?>
	<?php
 	$data =  Staff::model()->findByAttributes(array('id'=>$teacher_id)) ;    
	if ($data->teacher == 1)
	{
 ?><div class="da-message success">
<?php echo Yii::t($language,'Add From Classes And Subjects') ?></div><?php
  ?> <div style="padding: 14px 4px 7px 9px; float: left"><?php
  echo CHtml::ajaxLink(Yii::t($language,'Remove From Classes And Subjects'),  array('NotInClass_M'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id),
	'update'=>"#ManageInClass_S_C",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	,'class'=>"da-tooltip-se da-button pink",'confirm'=>"are you sure you want remove $data->name from teachers in classes")); 
  ?></div><?php  
}else{
	
 ?>
 <div style="padding: 14px 4px 7px 9px; float: left">
  	 
  	<?php
  echo CHtml::ajaxLink("Add Classes And Subjects",  array('InClass_M'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id),
	'update'=>"#ManageInClass_S_C",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	,'class'=>"da-tooltip-se da-button green",'confirm'=>"are you sure you want add $data->name to teachers in classes")); 
  ?></div><?php 
	}
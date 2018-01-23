<?php  include 'lang.php';  ?>
<div  class="row">
<?php	
  $Grades =	Grades::model()->findAll(array('order' => 'id'),'id','title');
	 echo CHtml::dropdownList('Students[grade]','id',CHtml::listData($Grades, 'id', 'title' ),   
array(
 // 'options' => array($model->grade=>array('selected'=>true)),
'empty' => Yii::t($language,'Select grade'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeClasses'), 'type' => 'POST','update'=>"#ChangeClasses",                              
'data'=>array('grade_id'=>'js:$(this).val()','parent_id'=>$parent_id) )),                          
 'class'=>'subject green_select')  ) ;
		 
   ?></div>
   
   <div id="ChangeClasses" style="margin-top:7px">

	<div  id="ChangeStudents">	
	   <div style="float: left; padding-left: 0px;background-color: #ffffff; border:none;" class="da-button-row">
		<span style="margin-left:4px;" >
		<?php  echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('ManageMyStudents'), array( 'type'=>'POST','data'=>array(
	 'parent_id'=>$parent_id),'update'=>"#ManageMyStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button red"  ));	
	    ?></span></div>
	</div>	

</div>


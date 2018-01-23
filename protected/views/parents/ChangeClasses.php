<?php  include 'lang.php';  ?>
<div class="row" style="border: none">
<?php 
$data = ClassesM::model()->findAllByAttributes(array('grade_id'=>$grade_id));
	 if (count ($data) > 1)
 	{
$Classes =	ClassesM::model()->findAll(array('order' => 'id'),'id','title');
	 echo CHtml::dropdownList('ClassesM[title]','id',CHtml::listData($Classes, 'id', 'title' ),   
array(
// 'options' => array($model->grade=>array('selected'=>true)),
'empty' => Yii::t($language,'Select Class'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeStudents'), 'type' => 'POST','update'=>"#ChangeStudents",                              
'data'=>array('class_id'=>'js:$(this).val()','grade_id'=>$grade_id,'parent_id'=>$parent_id), )),                          
 'class'=>'subject green_select')  ) ;
	 
	 
    }
	   elseif (count ($data) == 1)
	   {
	   echo  ClassesM::model()->findByAttributes(array('grade_id'=>$grade_id))->title;
	   }

 	   else  
	   {
	   	echo Yii::t($language,"no classes exist");
	   }
 

    ?>
		
			<div  id="ChangeStudents">	
	 <div style="float: left; padding-left: 0px;background-color: #ffffff;border:none;" class="da-button-row">
<span style="margin-left:4px;" ><?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('ManageMyStudents'), array( 'type'=>'POST','data'=>array(
 'parent_id'=>$parent_id),'update'=>"#ManageMyStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid(), 'class'=> "da-button red"  ));	
    ?></span></div>
	</div>
	
	</div>

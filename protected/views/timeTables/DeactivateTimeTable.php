
<?php  include 'lang.php';
 	 echo CHtml::ajaxLink("",  array('ActivateTimeTable'), array( 'type'=>'POST',
'data'=>array('TimeTable_id'=>$TimeTable_id),
'update'=>"#All_TimeTables",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want activate')." $TimeTable_title"
));

?>  
<?php  include 'lang.php';  ?>
<?php
 echo CHtml::ajaxLink(Yii::t($language,"New Week"),  array('NewTMCall'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet),
'update'=>"#NewTM",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'da-button blue',
));


?>
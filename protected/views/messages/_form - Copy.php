<?php 

$to_cg_new = Yii::app()->user->id;
$Mysqls =  Messages::model()->findAllBySql("select * from messages where to_cg = $to_cg_new  AND read_cg = 'no'") ; 
  ?><div style="color:#ffffff;background:#e80000"> <?php echo count($Mysqls);?> new messages </div><?php 

//   $MyGames =  MyGames::model()->findByAttributes(array('user_id'=>Yii::app()->user->id ,'game_id'=>$data->id)) ;  

// ajax link start 
  ?><div id= "Nmessages" style="color:#545c21;background:#e2ec9b;"></div> <?php 
echo CHtml::ajaxLink('Nmessages',  array('Nmessages'), array(
        'type'=>'POST',

'data'=>array(
            'crAction'=>'updateShareFlag',
        ),
'update'=>"#Nmessages",
        ));    			
// ajax link end 
  
  echo "<br>";echo "<br>";
  
  
  
   foreach($Mysqls as $Mysql) 
{
	if ($Mysql->id)
	{echo $Mysql->date_cg;echo "<br>";echo $Mysql->message;}
	 else { echo "no new messages"; }
}
?>




<div id="AjaxSend">
<?php 

  $from_cg = Yii::app()->user->id;
  $to_cg = $_GET['id'];
           $Mysqls =  Messages::model()->findAllBySql("select * from messages where from_cg = $from_cg AND to_cg = $to_cg
           OR from_cg = $to_cg AND to_cg = $from_cg
           ") ;  
 
           foreach($Mysqls as $Mysql) 
			   	 {             

 	if ($Mysql->from_cg == $from_cg && $Mysql->to_cg == $to_cg)
   {	   	 
?> <div style="color:#4ea6f1"><?php  
echo "<hr>"; echo "me"; echo 'at'.$Mysql->date_cg; echo $Mysql->title;  echo "<br>";echo $Mysql->message;  echo "<br>";
?> </div><?php 
  }	
  elseif($Mysql->from_cg ==$to_cg  && $Mysql->to_cg == $from_cg)
  {
  ?> <div style="color:#6eaf34"><?php  
echo "<hr>"; echo "he"; echo 'at'.$Mysql->date_cg; echo $Mysql->title;  echo "<br>";echo $Mysql->message;  echo "<br>";
?> </div><?php 
  }
			   	 
			   	 } 

?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true, ),

)); ?>

	<?php echo $form->errorSummary($model); ?>
<br><br>
Message
	<div class="row">
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>
<?php  $to_id = $_GET['id']; $my_id = Yii::app()->user->id; ?>
		<?php echo $form->hiddenField($model,'from_cg',array('size'=>10,'maxlength'=>10 , 'value'=>"$my_id")); ?>
		<?php echo $form->hiddenField($model,'to_cg',array('size'=>10,'maxlength'=>10, 'value'=>"$to_id")); ?>
		<?php // echo $form->hiddenField($model,'date_cg',array('size'=>10,'maxlength'=>10 , 'value'=>"$model_id")); ?>
		<?php echo $form->hiddenField($model,'read_cg',array('rows'=>6, 'cols'=>50, 'value'=>"no")); ?>
		<?php echo $form->hiddenField($model,'answered',array('size'=>10,'maxlength'=>10, 'value'=>"no")); ?>


	<div class="row buttons">
		 <?php echo CHtml::ajaxSubmitButton('S E N D',array('AjaxSend'),array('update'=>'#AjaxSend','type'=>'post'), array('id' => 'messages-form'));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div><!-- AjaxSend -->
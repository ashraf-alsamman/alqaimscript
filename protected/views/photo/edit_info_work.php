<div class="form">


<?php 


 echo CHtml::link('delete',"#",array("submit"=>array('delete','id'=>$image_id),'confirm'=>'Are you sure ?'));
echo "<br>";
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	       'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true,
     ),

)); ?>



	<?php // echo $form->errorSummary('Photo'); ?>
 
	<div class="row">
		<?php echo  "photo information.<br>"; ?>
		
				<textarea rows="6" cols="50" name="Photo[info_cg]"><?php echo Photo::model()->findByPk($image_id)->info_cg ?></textarea>
		<INPUT TYPE=hidden NAME="Photo[id]" VALUE="<?php echo $image_id ;?>" >
		
		
		<?php //  echo $form->error('Photo','info_cg'); ?>
	</div>

 

	<div class="row buttons" >


<?php 
  			
		 
 echo CHtml::ajaxSubmitButton(
'edit',
array('EditInfoWork'),
array(
'update'=>'#info','live' =>'false',
),
array(
'type'=>'submit',
)
, array('id' => uniqid())
);
?>      
		        
		      
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
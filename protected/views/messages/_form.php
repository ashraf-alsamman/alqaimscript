<div class="form"   id="form">


<?php	
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
	));
	
?> 
	<?php echo EHtml::errorSummary($model);?>
	<div class="errorSummary" style="
	display:none;
	   position:fixed;
   left:0px;
   bottom:122px;
   height:35px;
   width:100%;
	
	">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>


		<div class="row">
 
  <input name="Messages[from_cg]" id="Messages_from_cg" type="hidden" value ="<?php echo Yii::app()->user->id ;?>"/>
		<?php echo EHtml::activeTextArea($model,'message' ,array('rows'=>3, 'cols'=>85 ,'value'=>'this is the default value')); ?>
	</div>
	
	
	<div class="action">
		<?php 
		echo EHtml::ajaxSubmitButton('send','NewMessage',
			array('replace'=> '#Messages' ,'live' =>'false','data'=>array('from_cg'=>Yii::app()->user->id ,'message'=>'js:$(\'#Messages_message\').val()' ,'to_cg'=>$get_id)   )
		, array('id' => uniqid()));  
		?> 
	</div>

	<?php  echo EHtml::endForm();
	 
	?>
		
</div><!-- form -->
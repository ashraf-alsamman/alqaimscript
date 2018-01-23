<h1>List elements</h1>
<div class="form">
	<p>Checkboxes ,radio buttons and select lists demo : all are required except the password field.</p>
	<?php
		echo EHtml::beginForm(); 
		EHtml::setOptions(array(
			'errorContainer'		=> 'div.errorSummary',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div.errorSummary ul',
			'errorClass' 			=> 'invalid'
		));	
	?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	<div class="row">
		<label>your name is ? </label>
	</div>
	<div class="row list">	
		<?php 
			echo EHtml::activeRadioButtonList($model,'username',array(
						'id_bob' => 'Bob', 
						'id_Raoul' => 'Raoul', 
						'id_ted' => 'Ted',
						'id_henry' => 'Henry',
						'id_guest' => 'anonymous')) 
						?>
	</div>
	<div class="row">
		<label>do you approve this policy ?</label>
		<?php 
				echo EHtml::activeDropDownList($model,'approvePolicy',array(
						'' => 'Choose an option ...', 
						'yes' => 'Yes', 
						'indeed' => 'Indeed I do', 
						'absolutly' => 'Absolutly',
						'of_course' => 'Of Course',
						'sure' => 'Sure I do'));
		?>
	</div>
	<div class="row">
		<label> favorite color ? </label>
	</div>
	<div class="row list">
		<?php 	
		 		echo EHtml::activeCheckBoxList($model,'favcolor',array(
						'green' => 'Green', 
						'red' => 'Red', 
						'blue' => 'Blue',
						'burple' => 'Purple'));
		?>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php echo EHtml::endForm(); ?>
</div>



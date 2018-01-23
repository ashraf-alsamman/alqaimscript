<h1>Ajax validation</h1>
<div class="form">
<p>The <strong>email</strong> field is required, must be well formated and must be unique. This case demontrate how to use
an ajax callback to check email uniqueness.<br/>
When user press 'submit', a javascript first validate that a well formed email address has been entered. If it's the case,
 a remote validation rule is invoqued to validate the EMail attribute uniqueness, and if it returns <b>true</b> the form 
 is submitted again.
<br/><b>Enter email <em><u>user@yii.com</u></em> to validate.</b></p>
	<?php	
		echo EHtml::beginForm(); 
		EHtml::setOptions(array(
			'errorContainer'		=> 'div.errorSummary',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div.errorSummary ul',
			'errorClass' 			=> 'invalid',
			'onkeyup' 				=> false,
			'onfocusout' 			=> false,
			'submitHandler' 		=> 'function(form){$.fn.EJFValidate.submitHandler(form);
				alert("submiting the form");}'
		));
	?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'email'); ?>
		<?php echo EHtml::activeTextField($model,'email') ?>
	</div>
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>

<?php echo EHtml::endForm(); ?>




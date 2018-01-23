<h1>Inline error message</h1>
<div class="form">
<p>Validation occurs first on submit and then onkeyUp event. The error message is displayed inside SPAN element in the same line than the input text element.</p>
<?php
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorElement'=> 'span',
		'errorClass' => 'invalid',
		)
	);		
?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model);?>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'username'); ?>
		<?php echo EHtml::activeTextField($model,'username') ?><br/>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	<div class="row rememberMe">
		<?php echo EHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo EHtml::activeLabel($model,'rememberMe'); ?>
	</div>	
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php echo EHtml::endForm(); ?>
</div>


<h1>Match Validator</h1>
<div class="form">
<h3>Match validator</h3>
<p>This form demonstrate how to use the Match validator which is part of the Yii framework (see <a href="http://www.yiiframework.com/doc/api/CRegularExpressionValidator">CRegularExpressionValidator</a>.
As javascript and PHP regular expression differs, note that the only modified supported is <strong>/i</strong> .. it used for the username field below.<br/>
You'll also note that validation occurs <em>onfocusout</em>, that is <strong>before</strong> the user presses the submit button.
</p>

<?php
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
		'onkeyup' 				=> false,
		'onfocusout' 			=>  'function(element) { this.element(element);}'
	));	
?>
<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
<div class="row">
	<?php echo EHtml::activeLabelEx($model,'username'); ?>
	<?php echo EHtml::activeTextField($model,'username') ?>
	<em>(letters only - case insensitive)</em>
</div>
<div class="row">
	<?php echo EHtml::activeLabelEx($model,'password'); ?>
	<?php echo EHtml::activeTextField($model,'password') ?>
	<em>(lower case letters, number and space)</em>
</div>
<div class="row">
	<label for="TestForm_custom1">Phone number</label>
	<?php echo EHtml::activeTextField($model,'custom1') ?>
	<em>(french phone number format : nn nn nn nn)</em>
</div>
<div class="row button">
	<?php echo EHtml::submitButton('Submit'); ?>
</div>

<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->
<h1>Checkbox</h1>
<div class="form">
<p>Note the single checkbox element which must be checked in order to post the form. In this scneario, the USERNAME is not required.<br/>
The <strong>custom field</strong> must be numerical and higher than 4. It is validated by a client-side-only rule (see model definition).</p>
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
		<?php echo EHtml::activeLabelEx($model,'username'); ?>
		<?php echo EHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'custom1'); ?>
		<?php echo EHtml::activeTextField($model,'custom1') ?>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	<div class="row rememberMe">
		<?php echo EHtml::activeCheckBox($model,'approvePolicy'); ?>
		<?php echo EHtml::activeLabel($model,'approvePolicy'); ?>
	</div>	
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>		
	<?php echo EHtml::endForm(); ?>
</div>



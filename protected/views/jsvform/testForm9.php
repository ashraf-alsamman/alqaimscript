<div class="form">
<p>This form uses the <b>numerical</b> built-in validator. <br/>
<b>Custom</b> field must be an integer lower than 12.3 (!) and <b>numerical</b> has only ot be an integer</p>

<?php	
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
		'onkeyup' 				=> false,
		'onfocusout' 			=>  false
	));
?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'custom1'); ?>
		<?php echo EHtml::activeTextField($model,'custom1') ?>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'numerical'); ?>
		<?php echo EHtml::activeTextField($model,'verifyCode') ?>
	</div>
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->
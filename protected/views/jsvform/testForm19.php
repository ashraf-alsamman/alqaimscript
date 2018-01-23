<h1>Required Validator</h1>
<div class="form">
<h3>Required Validator</h3>
<p>Since Yii 1.0.10 the <b>requireValue</b> rule parameter can be used together with the <b>required</b> validator.
Let's test that now !.
</p>
<?php	
		echo EHtml::beginForm(); 
		EHtml::setOptions(array(
			'errorContainer'		=> 'div.errorSummary',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div.errorSummary ul',
			'errorClass' 			=> 'invalid',
			'onkeyup' 				=> false,
			'onfocusout' 			=> false
	));
?>
<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
<?php echo EHtml::errorSummary($model); ?>
<div class="errorSummary" style="display:none">
	<p>Please fix the following input errors:</p>
	<ul/>
</div>

<div class="simple">
	<?php echo EHtml::activeLabelEx($model,'username'); ?>
	<?php echo EHtml::activeTextField($model,'username') ?>
</div>
<div class="simple">
	<?php echo EHtml::activeLabelEx($model,'email'); ?>
	<?php echo EHtml::activeTextField($model,'email') ?>
</div>
<div class="simple">
	<?php echo EHtml::activeLabelEx($model,'custom1'); ?>
	<?php echo EHtml::activeTextField($model,'custom1') ?>
</div>
<div class="action">
	<?php echo EHtml::submitButton('Submit'); ?>
</div>

<?php echo EHtml::endForm(); ?>

</div><!-- yiiForm -->

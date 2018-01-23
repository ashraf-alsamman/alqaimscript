<h1>Custom validator</h1>
<div class="form">
<p>This form demonstrates how to create a new validator both on server and client.<br/>
In this example, the JS validator <strong>myCustomValidator</strong> defined in <em>extensions/jformvalidate/js/additional-methods.js</em> 
displays a confirm dialog. 
You may choose to pass or fail to this validation. If you pass, then the server-side version of the
validator is called on the server ... and unfortunatly, it always fails ! (but that just for this test)
</p>
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
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->
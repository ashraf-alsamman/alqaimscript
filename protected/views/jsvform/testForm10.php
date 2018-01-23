<h1>Optional fields</h1>
<div class="form">
<p>Fields with <u>no validation rules</u> or with validation rule initialized with the <b>allowEmpty</b> parameter set to TRUE
are OPTIONALS.<br/>
Fields with the <em>required</em> rule or having other validation rule initialized with <b>allowEmpty</b> set to FALSE are MANDATORY.</p>
<?php	
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
		'onkeyup' 				=> false,
		'onfocusout' 			=> 'function(element) { this.element(element);}'
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
		<?php echo EHtml::activeTextField($model,'password') ?>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'email'); ?>
		<?php echo EHtml::activeTextField($model,'email') ?>
	</div>
	
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->
<h1>Login Form</h1>
<div class="form">

<p>All errors are displayed at the top of this form, within the <b>errorSummary</b> frame in order to preserve Yii 'error summary' look</p>
<?php	
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
	));
	
?>

	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model);?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'username0'); ?>
		<?php echo EHtml::activeTextField($model,'username0'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo EHtml::activeLabelEx($model,'password0'); ?>
		<?php echo EHtml::activePasswordField($model,'password0') ?>
	</div>
	
	<div class="action">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php  echo EHtml::endForm(); ?>
</div><!-- yiiForm -->

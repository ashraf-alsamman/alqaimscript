<h1>Custom Submit Handler</h1>
<div class="form">
<p>Once validation is successful, the form is not automatically submitted, but a submitHandler
Javascript function is called to do the job. In the submit handler you can do what you want like
for instance set additional GET parameters (like 'my_var' ... check the GET data)</p>
<?php	
$submitHandler=<<<END
function(form){
	// this function will submit the form
	alert('here, the form is valid, and you can do whatever you want before submiting it.');
	form.action+='&my_var=my_value';
	form.submit();
}
END;
	echo EHtml::beginForm(); 
	EHtml::setOptions(array(
		'errorContainer'		=> 'div.errorSummary',
		'wrapper' 				=> 'li',
		'errorLabelContainer' 	=> 'div.errorSummary ul',
		'errorClass' 			=> 'invalid',
		'submitHandler' 		=> $submitHandler
	));
?>
<pre>
<?php if($postedData != null) echo 'POST[] : '.CVarDumper::dumpAsString($postedData); ?>

<?php if($getData != null) echo 'GET[] : '.CVarDumper::dumpAsString($getData); ?>
</pre>
<?php echo EHtml::errorSummary($model); ?>
<div class="errorSummary" style="display:none">
	<p>Please fix the following input errors:</p>
	<ul/>
</div>
<div class="row">
	<?php echo EHtml::activeLabel($model,'username'); ?>
	<?php echo EHtml::activeTextField($model,'username') ?>
</div>

<div class="row">
	<?php echo EHtml::activeLabel($model,'password'); ?>
	<?php echo EHtml::activePasswordField($model,'password') ?>
</div>

<div class="row button">
	<?php echo EHtml::submitButton('Submit'); ?>
</div>

<?php  echo EHtml::endForm(); ?>
</div><!-- yiiForm -->

<style type="text/css">
	div.yiiForm textarea.invalid,
	div.yiiForm select.invalid
	{
		background: #FEE;
		border-color: #C00;
	}
	div.yiiForm label.invalid,
	div.yiiForm span.invalid
	{
		color: #C00;
	}
</style>
<h1>Multi-form</h1>
<div class="form">
	<p>In this form, only <b>username</b> is required and in the next form, only <b>password</b> is required. So, the same model
	is used twice with same attributes, but with different scenario. The hidden input field <i>clientScenario</i> is needed in order to 
	inform the server of which form has been sumbitted and so, which scenario applies.</p>
	<?php	
			echo EHtml::beginForm(); 
			$model->setScenario('form6');
			EHtml::setOptions(array(
				'errorContainer'		=> 'div#scenario6',
				'wrapper' 				=> 'li',
				'errorLabelContainer' 	=> 'div.errorSummary ul',
				'errorClass' 			=> 'invalid'
		));
	?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($_POST); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none" id="scenario6">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'username'); ?>
		<?php echo EHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row button">
		<?php echo EHtml::hiddenField('clientScenario',$model->getScenario()); ?>
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>
	
	<?php echo EHtml::endForm(); ?>

</div><!-- yiiForm -->


<br/>&nbsp;<br/>
<div class="form">
<p>In this form, only <b>password</b> is required. In the view, we force scenario <b>form6b</b> to be used
for client side validation for this form only.</p>
<?php
	echo EHtml::beginForm();	
	$model->setScenario('form6b');
	EHtml::setOptions(array(
			'errorElement' => 'span',
			'errorClass'   => 'invalid'
		)
	);		
?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($_POST); ?></pre>
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
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	
	<div class="row button">
		<?php echo EHtml::activeCheckBox($model,'rememberMe'); ?> Remember me next time<br/>
		<?php echo EHtml::submitButton('Submit'); ?>
		<?php echo EHtml::hiddenField('clientScenario',$model->getScenario()); ?>
	</div>
	
	<?php echo EHtml::endForm(); ?>
</div>



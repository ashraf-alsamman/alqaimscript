<h1>Ajax Submit (reloaded)</h1>
<div class="form">
<h3>form 1</h3>
<p>Here we have two forms, each one with specific validation rules and each one with an ajax submit button.
</p>
	<?php		
		echo EHtml::beginForm(); 
		$model->setScenario('form14a');
		EHtml::setOptions(array(
			'errorContainer'		=> 'div#14a',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div#14a ul',
			'errorClass' 			=> 'invalid',
			'onkeyup' 				=> false,
			'onfocusout' 			=> false
		));
	?>
	<div id="response14a" style="margin:2em;"></div>
<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	
	<?php echo EHtml::errorSummary($model);?>
	<div id="14a" class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul></ul>
	</div>
	<div class="row list">
		<label> favorite color ? </label><br/>
		<?php 	
		 		echo EHtml::activeCheckBoxList($model,'favcolor',array(
						'green' => 'Green', 
						'red' => 'Red', 
						'blue' => 'Blue',
						'purple' => 'Purple'));
		?>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'username'); ?>
		<?php echo EHtml::activeTextField($model,'username') ?>
	</div>
	<div class="row button">
		
		<?php 
		echo EHtml::ajaxSubmitButton('Ajax Submit','?r=jsvform/TestForm&id=14a',
			array(
				'beforeSend' => 'myBeforeSend',
				// uncomment to enable onComplete handler
				//'complete' => 'myComplete',
				'update'=> '#response14a')
		);  
		?>
		<?php echo CHtml::submitButton('Normal Submit'); ?>
	</div>
<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->

<script type="text/javascript">
/*<![CDATA[*/
	function myBeforeSend(){
		alert('look ! My own hanlder is called before \nthe form is actually sent to the server. At this point\n the form is valid.');
	}
	function myComplete(){
		alert('my own ajaxComplete event handler');
		return false;
	}
/*]]>*/
</script>

<br/>
<div class="form">
<h3>form 2</h3>
	<?php		
		echo EHtml::beginForm();
		$model->setScenario('form14b');
		EHtml::setOptions(array(
			'errorContainer'		=> 'div#14b',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div#14b ul',
			'errorClass' 			=> 'invalid',
			'onkeyup' 				=> false,
			'onfocusout' 			=> false
		));
	?>
	<div id="response14b" style="margin:2em;"></div>
<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	
	<?php echo EHtml::errorSummary($model);?>
	<div id="14b" class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul></ul>
	</div>
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'username'); ?>
		<?php echo EHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="row">
		<?php echo EHtml::activeLabelEx($model,'password'); ?>
		<?php echo EHtml::activePasswordField($model,'password') ?>
	</div>
	<div class="row">
		<?php echo EHtml::activeCheckBox($model,'approvePolicy'); ?> I approve your policy <br/>
	</div>	
	<div class="row button">
		
		<?php 
		echo EHtml::ajaxSubmitButton('Ajax Submit','?r=jsvform/TestForm&id=14',
			array('update'=> '#response14b')
		);  
		?>
		<?php echo CHtml::submitButton('Normal Submit'); ?>
	</div>
<?php  echo EHtml::endForm(); ?>

</div><!-- yiiForm -->

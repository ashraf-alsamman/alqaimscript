<h1>Ajax Submit</h1>
<div class="form">
<p>This form is to illustrate ajax submition. Note that is can also be submited with the standard
method. If ajax submition is used, the response returned by the server is displayed below in a nice green box.<br/>
To validate this form, select a <strong>color</strong> and enter your <strong>username</strong>.
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
	<div id="response" style="margin:2em;"></div>
	
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>
	<div class="row list">
		<label> favorite color ? </label>
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
	<div class="row">
		<?php echo EHtml::activeCheckBox($model,'approvePolicy'); ?> I approve your policy <br/>
	</div>
	<div class="row button">
		
		<?php 
		echo EHtml::ajaxSubmitButton('Ajax Submit','?r=jsvform/TestForm&id=13',
			array(
				'beforeSend' => 'myBeforeSend',
				// uncomment to enable onComplete handler
				//'complete' => 'myComplete',
				'update'=> '#response'),
			array('id'=> 'nicestuff')
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

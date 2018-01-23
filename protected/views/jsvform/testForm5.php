<h1>Another select box</h1>
<div class="form">
	<?php	
		echo EHtml::beginForm(); 
		EHtml::setOptions(array(
			'errorContainer'		=> 'div.errorSummary',
			'wrapper' 				=> 'li',
			'errorLabelContainer' 	=> 'div.errorSummary ul',
		));
	?>
	<pre>submitted data : <?php if($postedData != null) echo CVarDumper::dumpAsString($postedData); ?></pre>
	<?php echo EHtml::errorSummary($model); ?>
	<div class="errorSummary" style="display:none">
		<p>Please fix the following input errors:</p>
		<ul/>
	</div>

	<div class="row list">
		<label> favorite color ? </label><br/>
		<?php 	
		 		echo EHtml::activeListBox($model,'favcolor',array(					
						'green' 	=>   'green',
						'red' 		=> 'red',
						'blue' 		=>  'blue',
						'purple' 	=> 'purple',
						'other'		=> array(
								'yello' => 'yellow',
								'orange'=> 'orange',
								'pink'  => 'pink'
							)
					),
					array(
						'options' => array(
							'green'  => array('label'=>'vert'),
							'purple' => array('disabled' => true, 'label'=>'too ugly color !')
						),
						'prompt' =>  'please select a color ...'
					)
				);
		?>
	</div>
	<div class="row button">
		<?php echo EHtml::submitButton('Submit'); ?>
	</div>

	<?php echo EHtml::endForm(); ?>

</div><!-- yiiForm -->

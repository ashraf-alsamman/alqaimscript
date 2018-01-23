<div style="background-color:lightgreen; padding:1em">
<h2>Ajax Response</h2>
<?php if($postedData != null) : ?>
	<pre>
		<?php echo CVarDumper::dumpAsString($postedData); ?>
	</pre>
<?php else : ?>
	<?php echo CHtml::errorSummary($model);?>
<?php endif; ?>

</div>

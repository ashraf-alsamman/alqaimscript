<?php if($uploaded):?>
<p>File was uploaded. Check <?php echo $dir?>.</p>
<?php endif ?>
<?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data'))?>




<?php echo CHtml::error($model, 'file')?>
<?php echo CHtml::activeFileField($model, "[0]file")?>
<?php echo CHtml::activeFileField($model, "[1]file")?>
<?php echo CHtml::activeFileField($model, "[2]file")?>

<?php echo CHtml::submitButton('Upload')?>
<?php echo CHtml::endForm()?>
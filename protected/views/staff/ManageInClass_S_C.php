<?php  include 'lang.php';  ?>
<div class="da-panel collapsible"><!--ManageInClass start-->
<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png">
<?php echo Yii::t($language,'Classes And Subjects') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageInClass" class="da-panel-content"><?php
$this->renderPartial('ManageInClass',array('model'=>'Stuff','teacher_id'=>$teacher_id));
?></div><!--ManageInClass-->
</form>
</div>
</div><!--InClass end-->

<?php  
 	$data =  Staff::model()->findByAttributes(array('id'=>$teacher_id)) ;    
	
	if ($data->teacher == 1){?>
	
		



<div class="da-panel collapsible"><!--Subjects start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo Yii::t($language,'Subjects') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageSubjects"><?php
 $this->renderPartial('ManageSubjects',array('teacher_id'=>$teacher_id));
?></div><!--ManageSubjects-->
</form>
</div>

</div><!--Subjects end-->
 

<br>

<div class="da-panel collapsible"><!--Classes start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo Yii::t($language,'Classes') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageClasses"><?php
  $this->renderPartial('ManageClasses',array('teacher_id'=>$teacher_id));
?></div><!--ManageClasses-->
</form>
</div>

</div><!--Classes end-->
<?php 	} ?>
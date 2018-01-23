<?php  include 'lang.php';  ?>
<div class="da-form-row" style ="margin: 0;padding: 0;"> <div id="DeleteClasses">
<?php
$data = ClassesM::model()->findAllBySql("SELECT t.* FROM classes_m AS t, staff AS s, teacher_class AS ts WHERE
		ts.teacher_id = $teacher_id AND ts.class_id  = t.id AND ts.teacher_id  = s.id");
if (count($data)>0){
?>
<div class="da-form-item large" style=" margin-left: 0px;">
<span class="formNote"><?php echo Yii::t($language,'Add classes to teacher') ?></span>              	 	 
<div class="da-panel collapsible"><div class="da-panel-header">                       	                                                         
<span class="da-panel-toggler"></span></div><div class="da-panel-content"><table class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th><?php echo Yii::t($language,'Grade') ?></th><th style=" text-align:center;"><?php echo Yii::t($language,'Delete') ?></th></tr></thead>
<tbody>
	
	<tr class="even">
                     
 <?php            
foreach ($data as $key) {  ?>
     <td><?php echo $key->title; ?></td>                  
     <td><?php echo Grades::model()->findByPk($key->grade_id)->title ;  ?></td>
            <td class="da-icon-column">
            	<?php echo CHtml::ajaxLink("",  array('DeleteClasses2'), array( 'type'=>'POST',
 'data'=>array('class_id'=>$key->id,
'teacher_id'=>$teacher_id),'update'=>"#ManageClasses",'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m',
'confirm'=>Yii::t($language,'are you sure you want delete')." $key->title"
));	
 ?>
            </td>
        </tr>
        
		
		<?php
		
} ?>       
  </tbody></table></div></div>
</div><!---da-form-row---->
</div><!--DeleteClasses-->    <?php } else {
	 ?>
	 <div class="da-message warning"> <?php echo Yii::t($language,'no classes exist') ?> </div></div>
	 <?php
} ?>
                                        
 <div id="AddTeacherClass" style="text-align:left; padding:7px 1px 12px 11px"><?php
 echo CHtml::ajaxLink(Yii::t($language,"Add class"),  array('AddTeacherGradeCall'), array( 'type'=>'POST','data'=>array(
	 'teacher_id'=>$teacher_id),'update'=>"#AddTeacherClass", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue' )); 
?></div><!--AddTeacherSubject-->
                                        </div>
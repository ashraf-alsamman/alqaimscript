<?php  include 'lang.php';  ?>
<div class="da-form-row" style ="margin: 0;padding: 0;"> <div id="DeleteSubjects">
<?php
     $data = Subjects::model()->findAllBySql("SELECT t.* 
		FROM subjects AS t, staff AS s, teacher_subject AS ts
		WHERE 
		ts.teacher_id = $teacher_id
 		AND ts.subject_id  = t.id
		AND ts.teacher_id  = s.id");
if (count($data)>0){
?>
<div class="da-form-item large" style=" margin-left: 0px;">
<span class="formNote"><?php echo Yii::t($language,'Add subjects to teacher') ?></span>              	 	 
<div class="da-panel collapsible"><div class="da-panel-header">                       	                                                          
<span class="da-panel-toggler"></span></div><div class="da-panel-content"><table class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Subject title') ?></th><th style=" text-align:center;"><?php echo Yii::t($language,'Delete') ?></th></tr></thead>
<tbody>
	
	<tr class="even">
                     
 <?php            
foreach ($data as $key) {  ?>
     <td><?php echo $key->title;	?></td>                  
            <td class="da-icon-column">
            	<?php 
            	
echo CHtml::ajaxLink("",  array('DeleteSubjects'), array( 'type'=>'POST',

 'data'=>array('subject_id'=>$key->id,
'teacher_id'=>$teacher_id),'update'=>"#ManageSubjects",'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m',
'confirm'=>Yii::t($language,'are you sure you want delete')." $key->title"));


 ?>

  </td>
        </tr>
        
		
		<?php
		
} ?>       
  </tbody></table></div></div>
</div><!---da-form-row---->
</div><!--DeleteClasses-->    <?php } else {
	 ?>
	 <div class="da-message warning"><?php echo Yii::t($language,'no subjects exist') ?></div></div>
	 <?php
} ?>
                                        
 <div id="AddTeacherSubject" style="text-align:left; padding:7px 1px 12px 11px"><?php
 echo CHtml::ajaxLink(Yii::t($language,'Add Subject'),  array('AddTeacherSubjectCall'), array( 'type'=>'POST','data'=>array(
	 'teacher_id'=>$teacher_id),'update'=>"#AddTeacherSubject", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue' )); 
?></div><!--AddTeacherSubject-->
</div>
 

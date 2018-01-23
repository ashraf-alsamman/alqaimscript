	<?php  include 'lang.php';  ?>
	 <?php    $data = Students::model()->findAllBySql("SELECT t.* 
		FROM students AS t, parents AS s, parent_student AS ts
		WHERE ts.parent_id = $parent_id AND ts.student_id  = t.id AND ts.parent_id  = s.id");
if (count($data)>0){  ?> 
	  
	<div class="da-form-row" style ="margin: 0;padding: 0;">
    <div  id="MyStudents2">
<div class="da-form-item large" style=" margin-left: 0px;">
<span class="formNote"><?php echo Yii::t($language,'Management students belonging to the parent') ?></span>              	 	 
<div class="da-panel collapsible"><div class="da-panel-header">                       	                                                          
<span class="da-panel-toggler"></span></div><div class="da-panel-content"><table class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Name') ?></th><th><?php echo Yii::t($language,'Grade') ?></th><th><?php echo Yii::t($language,'Class') ?></th><th style=" text-align:center;"></th></tr></thead>
<tbody>

	<tr class="even">
 <?php foreach ($data as $key) { ?>
 <td><?php echo $key->name;	?></td>                  
<td><?php echo $key->grade;	?></td>
<td><?php if ($key->class_m){echo Classes::model()->findByPk($key->class_m)->title;} ;	?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="<?php echo $key->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="Update/<?php echo $key->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php 

 echo CHtml::ajaxLink("",  array('DeleteStudent2'), array( 'type'=>'POST',
'data'=>array( 'student_id'=>$key->id,'parent_id'=>$parent_id),
'update'=>"#ManageMyStudents",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want delete')." $key->name"
));	
 ?>
    </td>


	
	</tr><?php
        	
	 }?>
   </tbody></table></div></div>
</div><!---da-form-row---->
</div><!--MyStudents2--> 


<?php } else {?>
	
	<div class="da-message warning"> <?php echo Yii::t($language,'No Students Exist') ?> </div>
	
<?php } ?>







<div  id="AddStudents" style="text-align:left; padding:0px 1px 12px 11px">
	<?php
	echo CHtml::ajaxLink(Yii::t($language,'Add Students'),  array('AddStudents'), array( 'type'=>'POST','data'=>array(
	'parent_id'=>$parent_id),'update'=>"#AddStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue' )); 
	?>
	<div style ="background-color:#cadee2" id="ChangeClasses"></div><div id="ChangeStudents"></div>
</div>



</div><!--da-form-row--> 
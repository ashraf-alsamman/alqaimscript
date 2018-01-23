<?php if ($grade_id==''){}else{ ?>
	<div class="da-form-row" id ="ChangeClasses" style="padding-left: 1px"><label >Class</label>
 <div class="da-form-item large">
<span class="formNote">Choose class</span>
    <?php 
    

 $data = ClassesM::model()->findAllByAttributes(array('grade_id'=>$grade_id));
 
	   if (count ($data) > 1)
 	{
   

     echo CHtml::dropdownList('Students[class_m]','id',CHtml::listData($data, 'id', 'title' ),array(
'empty' => 'Select class',
                          
'class'=>'subject green_select')  ) ;
    }
	   elseif (count ($data) == 1)
	   {
	   echo  ClassesM::model()->findByAttributes(array('grade_id'=>$grade_id))->title;
	     ?><span style="display: none" ><?php
	     echo CHtml::dropdownList('Students[class_m]','id',CHtml::listData($data, 'id', 'title' ),array('type'=>"hidden")); 
?> </span><?php
  }

 	   else  
	   {
	   	echo "no classes";
	   }
 

    ?>
		
		
	
	</div></div> <?php }  ?>
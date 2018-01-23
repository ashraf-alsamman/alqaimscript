<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Student') ?><?php echo $model->name; ?></h1>
<?php 
// $this->renderPartial('photo',array('user_id'=>$model->id,'controller_title_ex'=>Yii::app()->controller->id),false,true);
 $NewPhoto = new Photo;
$this->widget('ext.uploadify.MUploadify',array(
      'name'=>'PhotoB',
 'scriptData' => array('r_id' =>$model->id,'uploader_id' =>Yii::app()->user->id),
'model'=>$NewPhoto,
     //   'debug' => true,
'attribute'=>'title',
'script'=>$this->createUrl('PhotoEdit'),
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#displayPhotos").load(\''.$this->createUrl("ShowPhoto", array('r_id'=>$model->id,'controller_title_ex'=>Yii::app()->controller->id )).'\'); }', 
// 'multi'=>true,
//'folder'=>Yii::getPathOfAlias('application.uploads'),
//'uploadButton'=>true,
)); ?>
<div id="displayPhotos"><?php 
$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>Yii::app()->controller->id,'r_id'=> $model->id ) ,array('order'=>'id DESC')) ;    
if ($photo ){
echo CHtml::link('<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
}
else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
?></div>

   

<br>
 <div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                        <?php echo Yii::t($language,'Details') ?>
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>
<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,'Delete'),  array('DeleteM'), array( 'type'=>'POST',
'data'=>array('id'=>$model->id),
 'beforeSend' => 'function(){ Loading.show();}','complete' =>'js:function(){window.location="../Students"}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want delete')." $model->name"
));	 
 ?></li>  
    <li><a href="Update/<?php echo $model->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>                                   
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr >
                                            	<th><?php echo Yii::t($language,'Name') ?></th>
                                                <td><?php echo  $model->name;  ?></td>
                                            </tr>
    	                                    
                                            <tr >
                                            <th><?php echo Yii::t($language,'Grade') ?></th>
                                                <td><?php if($model->grade){echo Grades::model()->findByPk($model->grade)->title ;}    ?></td>
                                            </tr>
    	                                            	                              
                                            <tr >
                                            <th><?php echo Yii::t($language,'Class') ?></th>
                                                <td><?php if($model->class_m){echo ClassesM::model()->findByPk($model->class_m)->title ;}   ?></td>
                                            </tr>
    	                                   <tr >
                                            	<th><?php echo Yii::t($language,'Nationality') ?></th>
                                                <td><?php if ($model->nationality){echo Countries::model()->findByPk($model->nationality)->title; } ;  ?></td>
                                            </tr>      	                                 
                                            <tr >
                                        <th><?php echo Yii::t($language,'Parents') ?></th> <td>
  <?php 
$data = ParentStudent::model()->findAllBySql("SELECT parent_id from parent_student where student_id = $model->id"); 
if($data)
{
	foreach($data as $key )
	{
		if(Parents::model()->findByPk($key->parent_id))	{echo Parents::model()->findByPk($key->parent_id)->name .'  ';}
		else {echo "parent name deleted ".'   '.'   ';}
	} 
} 	 
else {echo "Not Set";}	?></td>		 
		
		
    	                                   
    	                                   
    	                                    <tr>
                                            	<th><?php echo Yii::t($language,'Email') ?></th>
                                            	<td>john@doe.org</td>
                                            </tr>

        	                                <tr>
                                            	<th><?php echo Yii::t($language,'Start Date') ?></th>
                                                <td><?php echo $model->start_date  ;  ?></td>
                                            </tr>
                                            <tr>
                                            	<th><?php echo Yii::t($language,'Birth Date') ?></th>
                                                <td><?php echo $model->birth_date  ;  ?></td>
                                            </tr>
                	                        <tr>
                                            	<th><?php echo Yii::t($language,'Last Update') ?></th>
                                                <td><?php echo $model->update_time  ;  ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->


<?php
 if($model->class_m)
 {
$student_id = $model->id ;
 if($language =='ar'){
//$this->renderPartial('TimeTable_ar',array('student_id'=>$student_id));
}
else
{$this->renderPartial('TimeTable',array('student_id'=>$student_id));}
 
 
 
 
 
 
 }
 ?>




<div class="da-panel collapsible"><!--ACCESS start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo Yii::t($language,'Account') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageAccess" class="da-panel-content""><?php
 $this->renderPartial('ManageAccess',array('model'=>'Stuff','parent_id'=>$model->id));
?></div><!--ManageAccess-->
</form>
</div>

</div><!--ACCESS end-->








 

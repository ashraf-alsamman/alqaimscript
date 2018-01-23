<?php  include 'lang.php';  ?>

<h1> <?php echo Yii::t($language,'Parent') ?> <?php echo $model->name; ?></h1>



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
<div id="displayPhotos">
<?php 

$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>Yii::app()->controller->id,'r_id'=> $model->id ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
}

else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
?></div><br>



<div class="da-panel collapsible"><!--ManageMyStudents start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo Yii::t($language,'Students') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageMyStudents">
<?php  $this->renderPartial('ManageMyStudents',  array('parent_id'=>$model->id));	?>
 </div><!--ManageSubjects-->
</form>
</div>

</div><!--ManageMyStudents end-->



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
 'beforeSend' => 'function(){ Loading.show();}','complete' =>'js:function(){window.location="../Parents"}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want delete $model->name"
));	 
 ?></li>  
    <li><a href="Update/<?php echo $model->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>                                   
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="odd">
                                            	<th><?php echo Yii::t($language,'Name') ?></th>
                                                <td><?php echo  $model->name;  ?></td>
                                            </tr>
    	                                    <tr class="odd">
                                            	<th><?php echo Yii::t($language,'Email') ?></th>
                                            	<td>john@doe.org</td>
                                            </tr>
        	                                <tr class="even">
                                            	<th><?php echo Yii::t($language,'Nationality') ?></th>
                                                <td><?php if($model->nationality){echo Countries::model()->findByPk($model->nationality)->title ;} else {echo "Not Set";}  ?></td>
                                            </tr>
                                            <tr class="odd">
                                            	<th><?php echo Yii::t($language,'Birth Date') ?></th>
                                                <td><?php echo $model->birth_date  ;  ?></td>
                                            </tr>
                	                        <tr class="even">
                                            	<th><?php echo Yii::t($language,'Last Update') ?></th>
                                                <td><?php echo $model->update_time  ;  ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->
                            

<div class="da-panel collapsible"><!--ACCESS start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo Yii::t($language,'Account') ?></span></div><div class="da-panel-content"><form class="da-form">
<div id ="ManageAccess" class="da-panel-content""><?php
 $this->renderPartial('ManageAccess',array('model'=>'Stuff','parent_id'=>$model->id));
?></div><!--ManageAccess-->
</form>
</div>

</div><!--ACCESS end-->

 
 
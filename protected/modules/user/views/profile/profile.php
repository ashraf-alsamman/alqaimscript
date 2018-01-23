<h2><?php echo UserModule::t('Your profile'); ?></h2>
<div id="displayPhotos">
<?php 
$my_id = Yii::app()->user->id ;
$photo = Photo::model()->findByAttributes(array('r_id'=>$my_id,'type_cg'=>'user_profile'));    
if ($photo)
{
	echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/user/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photo/$photo->id"));
}

else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
?>
</div>
<?php 
$dir =dirname(Yii::app()->request->scriptFile).'\uploads\photos\user'; 
   $my_id = Yii::app()->user->id ;
 $Photo = new Photo;
$this->widget('ext.uploadify.MUploadify',array(
      'name'=>'PhotoB1254',
 'scriptData' => array('user_id' =>$my_id),
'model'=>$Photo,
  'attribute'=>'title',
  'script'=>$this->createUrl('PhotoEdit'),
  //'auto'=>true,
  //'someOption'=>'someValue',
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#displayPhotos").load(\''.$this->createUrl("ShowPhoto", array()).'\'); }',
// 'multi'=>true,
//'folder'=>Yii::getPathOfAlias('application.uploads'),
//'uploadButton'=>true,
));
?>

<br>
 <div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                        Detail
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul> 
    <li><a href="profile/edit"><img alt="" src="/dashboard/images/icons/color/pencil.png">Edit</a></li>                                   
    <li><a href="profile/changepassword"><img alt="" src="/dashboard/images/icons/color/arrow_redo.png">Change Password</a></li>
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="odd">
                                            	<th>username</th>
                                                <td><?php echo CHtml::encode($model->username); ?></td>
                                            </tr>
<?php $profileFields=ProfileField::model()->forOwner()->sort()->findAll();
                if ($profileFields) {
                        foreach($profileFields as $field) {
                                //echo "<pre>"; print_r($profile); die();
                        ?>
        <tr>
                <th class="label"><?php echo CHtml::encode(UserModule::t($field->title)); ?></th>
        <td><?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?></td>

      
        </tr>
                      
                        <?php
                        }//$profile->getAttribute($field->varname)
                }
        ?>
        <tr>
                <th class="label"><?php echo CHtml::encode($model->getAttributeLabel('email')); ?></th>
        <td><?php echo CHtml::encode($model->email); ?></td>
        </tr>
        <tr>
                <th class="label"><?php echo CHtml::encode($model->getAttributeLabel('createtime')); ?></th>
        <td><?php echo date("d.m.Y H:i:s",$model->createtime); ?></td>
        </tr>
        <tr>
                <th class="label"><?php echo CHtml::encode($model->getAttributeLabel('lastvisit')); ?></th>
        <td><?php echo date("d.m.Y H:i:s",$model->lastvisit); ?></td>
        </tr>
        <tr>
                <th class="label"><?php echo CHtml::encode($model->getAttributeLabel('status')); ?></th>
        <td><?php echo CHtml::encode(User::itemAlias("UserStatus",$model->status)); ?></td>
        </tr>
 
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->


<?php
        

if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
        <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>

  


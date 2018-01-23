<?php
/* @var $this StaffController */
/* @		
*/


		
$this->breadcrumbs=array(
	'Staffs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);


?>

<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Update Staff Member Data') ?></h1>
 

<?php 


// $this->renderPartial('photo',array('user_id'=>$model->id,'controller_title_ex'=>Yii::app()->controller->id),false,true);
 $NewPhoto = new Photo;
$this->widget('ext.uploadify.MUploadify',array(
      'name'=>'PhotoB_98447',
 'scriptData' => array('r_id' =>$model->id,'uploader_id' =>Yii::app()->user->id),
'model'=>$NewPhoto,
    //    'debug' => true,
'attribute'=>'title',
'script'=>$this->createUrl('PhotoEdit_98447'),
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#displayPhotos").load(\''.$this->createUrl("ShowPhoto_98447", array('r_id'=>$model->id,'controller_title_ex'=>Yii::app()->controller->id )).'\'); }', 
// 'multi'=>true,
//'folder'=>Yii::getPathOfAlias('application.uploads'),
//'uploadButton'=>true,
));



?>
<div id="displayPhotos">
<?php 

$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>Yii::app()->controller->id,'r_id'=> $model->id ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
}

else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
?></div><?php 


echo $this->renderPartial('_form', array('model'=>$model)); ?>
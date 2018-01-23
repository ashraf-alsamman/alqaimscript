<?php 
  echo "<hr>";
  echo $controller_title_ex;
  echo $user_id;
  echo "<hr>";
 // $user_id = Yii::app()->user->id ;




 $model = new Photo;
$this->widget('ext.uploadify.MUploadify',array(
      'name'=>'PhotoB',
 'scriptData' => array('user_id' =>$user_id),
'model'=>$model,
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
<div id="displayPhotos">
<?php 
$my_id = Yii::app()->user->id ;
$photo = Photo::model()->findByAttributes(array('r_id'=>$my_id,'type_cg'=>'user_profile'));    
if ($photo)
{
	echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photo/$photo->id"));
}

else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
?>
<?php
/* @var $this CountriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create Countries', 'url'=>array('create')),
	array('label'=>'Manage Countries', 'url'=>array('admin')),
);
?>

<h1>Countries</h1>

<?php 


echo  dirname(Yii::app()->request->scriptFile).'\uploads\photos\games' ; echo '<br>';
 echo Yii::app()->basePath.'\uploads' ;
$mod_id2 = "32";
// $this->renderPartial('photo',array('user_id'=>$model->id,'controller_title_ex'=>Yii::app()->controller->id),false,true);
 $modelzxc = new Photo;

  $uploader_id = "24" ;
$NewPhoto = new Photo;
$this->widget('ext.uploadify.MUploadify',array(
 'name'=>'PhotoB',
   'method'=>'post',
  'model'=>$NewPhoto,
  'scriptData' => array('uploader_id' =>$uploader_id),
  'attribute'=>'title',
  'script'=>$this->createUrl('PhotoEdit'),
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,


'onAllComplete' => 'js:function (event, queueID, fileObj, reposnse, data) {

$("#displayPhotos").load(\''.$this->createUrl("ShowPhoto", array('data'=>$uploader_id)).'\'); }', 

));





?>
<div id="displayPhotos">

</div>
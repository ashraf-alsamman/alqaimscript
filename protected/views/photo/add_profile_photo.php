<?php
/*
$this->breadcrumbs=array(
	'Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Photo', 'url'=>array('index')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
*/
?>

<h1>Create Photo</h1>
 
<?php // echo $this->renderPartial('_form', array('model'=>$model)); ?>


<?php
$this->widget('ext.uploadify.MUploadify',array(
  'model'=>$model,
  'attribute'=>'title',
  'script'=>$this->createUrl('Upload'),
  //'auto'=>true,
  //'someOption'=>'someValue',
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,

'onAllComplete' => "js:function (event, queueID, fileObj, reposnse, data) {
       location.href='../user/login'
      }", 

  // 'multi'=>true,
//'folder'=>Yii::getPathOfAlias('application.uploads'),
//'uploadButton'=>true,



));





?>
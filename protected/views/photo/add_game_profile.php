

<h1>Add Game Photo profile to <?php  if ($Games_title = Games::model()->findByPk($game_id)) { echo $Games_title->title; } ?> </h1>

<?php
$this->widget('ext.uploadify.MUploadify',array(
  'model'=>$model,
  'attribute'=>'title',
  'script'=>$this->createUrl('GameProfile'),
  //'auto'=>true,
  //'someOption'=>'someValue',
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Upload photo'),
'auto'=>true,
// location.href='../MyTeams'

'onAllComplete' => "js:function (event, queueID, fileObj, reposnse, data) {

location.href='../games/$game_id';

      }", 



 // 
  // 'multi'=>true,
//'folder'=>Yii::getPathOfAlias('application.uploads'),
//'uploadButton'=>true,



));


 

?>




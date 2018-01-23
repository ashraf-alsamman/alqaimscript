 
 



 <?php 
if ($_GET['id'] == Yii::app()->user->id )
{echo "this is me";}
else 
{
$username =  user::model()->findByPk($_GET['id']);
 if ($username){ echo  'Messages from '. $username->username ;} else{  echo $model->username .'user was deleted' ;}
 

$my_id = Yii::app()->user->id ;
$get_id = $_GET['id'];
echo $this->renderPartial('_view2', array('my_id'=>$my_id,'get_id'=>$get_id)); 
}
 



?>






<?php
  define("games_dir",  dirname(Yii::app()->request->scriptFile).'\uploads\photos\games' );
class GamesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','ajaxReq','AjaxRequest','AjaxRemove','AjaxNFriends','PhotoEdit','ShowPhoto'
			,'AddPhotos','AddPhoto','NewPhoto','AddPhotoInfo','del','RemoveGame','AddGame','delete','CallAddGame_T',
			'RemoveGameFromMyTeam','AddGameToMyTeam','GameProfilePhoto','NewGame','Droppable'
			
			
			
			
			,'ShowAllNotifications','AjaxShowFriendsRequests','AjaxShowEnemies','AjaxShowTeamsRequests','AjaxNotifications',
'NotNowMember','ConfirmMember','NMembers','ReadTeams','ReadFriends','AjaxNEnemies','AjaxNotNowFriends','AjaxNFriends',),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

		public function actionDroppable()
	{
 
print_R($_POST); 
 
	}
	
	
	public function actionAddGameToMyTeam()
	{
 
    $TeamGame = new TeamGame;
	$TeamGame->team_id= $_POST['team_id'];
	$TeamGame->game_id=$_POST['game_id'];
	$TeamGame->save();
  $this->renderPartial('ManageTeamGames',array('game_id'=>$_POST['game_id']),false,true);
 
	}

	public function actionRemoveGameFromMyTeam()
	{
	$TeamGame =  TeamGame::model()->findByAttributes(array('team_id'=> $_POST['team_id'],'game_id'=>$_POST['game_id'] )) ;
	$TeamGame->delete();
	$this->renderPartial('ManageTeamGames',array('game_id'=>$_POST['game_id']),false,true);
	}

	
	public function actionCallAddGame_T()
	{
	$this->renderPartial('AddGame_T',array('game_id'=>$_POST['game_id']),false,true);
	}
	
	public function actiondel()
	{
	$image = Photo::model()->findByPk($_POST['image_id']) ;
	$image->delete();
	}

// start image 
	public function actionAddPhotoInfo()
	{
	$image_id = Photo::model()->findByAttributes(array('type_cg'=>'game_photo'),array('order'=>'id DESC'))->id ;
    $image = Photo::model()->findByAttributes(array('type_cg'=>'game_photo'),array('order'=>'id DESC')); 
	$image->info_cg=$_POST['Photo']['info_cg'];
	$image->r_id=$_POST['Photo']['r_id'];
	$image->save();
	}


function actionAddPhoto()
{
  $model=new Photo;
 // $dir = Yii::getPathOfAlias('application.uploads');
 
	$file=CUploadedFile::getInstance($model,'title');		
	$uploaded = $file->saveAs( games_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();  
    $model->type_cg='game_photo';
     /*
      $decodeData = json_decode($_POST['galleriaPicture']);
      $queryString_id_url = $decodeData->pageView_id; 
      $model->info_cg=$queryString_id_url;
    */
    if(!$model->save() || !$model->title->saveAs( games_dir.'/'.$model->title))
    {
    throw new CHttpException(500);
    echo 1;
    Yii::app()->end();
    }
    else {echo "errooooooooooooor"; }
}

		public function actionNewPhoto()
	{

$photo = Photo::model()->findByAttributes(array('type_cg'=>'game_photo'),array('order'=>'id DESC')) ;    
if ($photo)
{
  
echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/games/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
echo $image->info_cg ;

}
else 
{
echo "error";
}

	
	}


	public function actionAddPhotos($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Games']))
		{
			$model->attributes=$_POST['Games'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('AddPhotos',array(
			'model'=>$model,
		));
	}
	
	
	
	
	public function actionShowPhoto()
	{


$photo = Photo::model()->findByAttributes(array('type_cg'=>'game_profile','uploader_id'=> Yii::app()->user->id ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/games/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
 
}
else {echo "error";}


 
	
	
	}
	
function actionPhotoEdit()
{

 $decodeData = json_decode($_POST['PhotoB']);
  Yii::app()->session['game_id']=  $decodeData->game_id ; 
 
 $edit_photo = Photo::model()->findByAttributes(array('type_cg'=>'game_profile','r_id'=>$decodeData->game_id)) ;  
		if($edit_photo)
		{
        $edit_photo->type_cg = 'game_photo';
        $edit_photo->save();
		}


    $model=new Photo;
	$file=CUploadedFile::getInstance($model,'title');		
	$file->saveAs(games_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
    
	    
      

	$model->r_id=$decodeData->game_id;    
    $model->type_cg='game_profile';
    $model->uploader_id=   $decodeData->uploader_id;
    $model->save();
    $model->title->saveAs(games_dir.'/'.$model->title);
 
}



//   image   end
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
function actionGameProfilePhoto(){

$model=new Photo;
 
	$file=CUploadedFile::getInstance($model,'title');		
	$uploaded = $file->saveAs( games_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
	
	  $decodeData = json_decode($_POST['PhotoB']);
      $queryString_id_url = $decodeData->game_id; 
		
      $model->r_id=$queryString_id_url;   
      $model->type_cg='game_profile';
      $model->uploader_id=$decodeData->uploader_id;
	
 
    if(!$model->save() || !$model->title->saveAs( games_dir.'/'.$model->title))
    {
    throw new CHttpException(500);
    echo 1;
 
    Yii::app()->end();

    }
}
	public function actionNewGame()
	{
		$model=new Games;
		if(isset($_POST['Games']))
		{
	
			$model->title=$_POST['Games']['title'];
		  	$model->description_cg=$_POST['Games']['description_cg'];
		 	$model->save();
		 	$game_id= $model->id;
 $this->renderPartial('Add_Profile_Photo',array('game_id'=>$game_id),false,true); 
		}
	}
	
	public function actionCreate()
	{
		$model=new Games;
		if(Yii::app()->getRequest()->getIsAjaxRequest()) { $this->performAjaxValidation($model); Yii::app()->end(); }	
 
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Games']))
		{
			$model->title=$_POST['Games']['title'];
			$model->description_cg=$_POST['Games']['description_cg'];
			
			if($model->save())
			$this->redirect(array('view','id'=>$model->id));
			
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	
public function actionRemoveGame() {
               
$MyGames =  MyGames::model()->findByAttributes(array('user_id'=>Yii::app()->user->id,'game_id'=>$_POST['game_id']));
$MyGames->delete();
$this->renderPartial('add_game',array('game_id'=>$_POST['game_id']),false,true);
    
        }
        
	public function actionAddGame() {
             
$MyGames = new MyGames();
$MyGames->user_id=Yii::app()->user->id;
$MyGames->game_id=$_POST['game_id'];
$MyGames->save();
$this->renderPartial('remove_game',array('game_id'=>$_POST['game_id']),false,true);
        }

	
        public function actionIndex()
	{
	    $dataProvider=new CActiveDataProvider('Games');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Games('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Games']))
			$model->attributes=$_GET['Games'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Games::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='games-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

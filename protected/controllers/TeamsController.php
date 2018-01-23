<?php
  define("teams_dir",  dirname(Yii::app()->request->scriptFile).'\uploads\photos\teams' );

class TeamsController extends Controller
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
				'actions'=>array('index','view','Chooseactivity','TeamProfilePhoto','Add_Profile_Photo','PhotoEdit','ShowPhoto',
			'AddPhotos','AddPhoto','NewPhoto','AddPhotoInfo','del','AjaxAddToTeamFromUser','AjaxRemoveTeamMemberFromUser',
			'ConfirmMemberT','NotNowMemberT','RemoveTeamMember','RemoveTeamAdmin','MakeTeamAdmin','NewTeam','Photos','DeleteGameFromTeam'
			
			
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
	
	public function actionPhotos($id)
	{
		$model=$this->loadModel($id);

		$this->render('photos',array(
			'model'=>$model,
		));
	}
	
  //  _ManageMyTeam start
		
	public function actionDeleteGameFromTeam()
	{
 

 	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$game_id = $_POST['game_id'];
	
	$Game =  TeamGame::model()->findByAttributes(array('team_id'=> $model_id,'game_id'=>$game_id )) ;

	 
		 $Game->delete();
		 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true); 
		  
 		// else {$this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true); }

	} 
	


	public  function actionMakeTeamAdmin()
	{
  
	 $model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$id  = $_POST['id'];
	$ChallengerTeam =  ChallengerTeam::model()->findByPk( $id ) ;
	$ChallengerTeam->leader = '1';			
	$ChallengerTeam->save();
				 
                $my_id  = Yii::app()->user->id ;
				$Notifications = new Notifications();
			 	$Notifications->from_cg = $my_id ;  
				$Notifications->to_cg = $id  ; 
				$Notifications->type_cg = 'TeamMakeAdmin' ; 
				$Notifications->read_cg = 'no' ; 
				$Notifications->save();	
 
				$this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
	   
	}

	
	public  function actionRemoveTeamAdmin()
	{
	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$id  = $_POST['id'];
	$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('id'=>$id )) ;
	$ChallengerTeam->leader = '0';			
	$ChallengerTeam->save();
				 
                $my_id  = Yii::app()->user->id ;
				$Notifications = new Notifications();
			 	$Notifications->from_cg = $my_id ;  
				$Notifications->to_cg = $id  ; 
				$Notifications->type_cg = 'TeamDeleteAdmin' ; 
				$Notifications->read_cg = 'no' ; 
				$Notifications->save();	
 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
	}
	
	public  function actionRemoveTeamMember()
	{
	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$id  = $_POST['id'];
	$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('id'=>$id )) ;
				$ChallengerTeam->delete();
				 
                $my_id  = Yii::app()->user->id ;
				$Notifications = new Notifications();
			 	$Notifications->from_cg = $my_id ;  
				$Notifications->to_cg = $id  ; 
				$Notifications->type_cg = 'TeamDelete' ; 
				$Notifications->read_cg = 'no' ; 
				$Notifications->save();	
 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
	}
	
	public  function actionNotNowMemberT()
	{
	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$id  = $_POST['id '];
	$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('id'=>$id )) ;
				$ChallengerTeam->delete();
				 
               $my_id  = Yii::app()->user->id ;
				$Notifications = new Notifications();
			 	$Notifications->from_cg = $my_id ;  
				$Notifications->to_cg = $id  ; 
				$Notifications->type_cg = 'TeamRefuse' ; 
				$Notifications->read_cg = 'no' ; 
				$Notifications->save();	
 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
	}
	
	public  function actionConfirmMemberT()
	{
	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
	$id  = $_POST['id '];
	$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('id'=>$id )) ;
				$ChallengerTeam->status_cg="confirm";
				$ChallengerTeam->save();
			
				$Notifications = new Notifications();
				$Notifications->from_cg = Yii::app()->user->id ; 
				$Notifications->to_cg = $id  ; 
				$Notifications->type_cg = 'TeamConfirm' ; 
				$Notifications->read_cg = 'no' ; 
				$Notifications->save();
 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
	}
	
	
	
	
public function actionAjaxRemoveTeamMemberFromUser() 
{
	$model_id = $_POST['model_id'];
	$maker_id = $_POST['maker_id'];
$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('challenger_id'=> Yii::app()->user->id,'team_id'=>$_POST['team_id'] )) ;
$ChallengerTeam->delete();
 $this->renderPartial('_ManageMyTeam',array('model_id'=>$model_id,'maker_id'=>$maker_id),false,true);
}


//  _ManageMyTeam End

public function actionAjaxAddToTeamFromUser() 
{
$ChallengerTeam = new ChallengerTeam();
$ChallengerTeam->challenger_id=Yii::app()->user->id;
$ChallengerTeam->team_id=$_POST['team_id'];
$ChallengerTeam->status_cg='request';
$ChallengerTeam->leader='0';
$ChallengerTeam->asker='user';
$ChallengerTeam->read_cg='no';
$ChallengerTeam->save();

 $this->renderPartial('AjaxAddToTeamFromUser',array('model_id'=>$_POST['team_id']),false,true);

}
	 
public function actionAjaxRemoveTeamMemberFromUser2() 
{
$ChallengerTeam =  ChallengerTeam::model()->findByAttributes(array('challenger_id'=> Yii::app()->user->id,'team_id'=>$_POST['team_id'] )) ;
$ChallengerTeam->delete();
$this->renderPartial('AjaxAddToTeamFromUser',array('model_id'=>$_POST['team_id']),false,true);
}	 
	
	
	
	
	
	
	
	
	
	
	
	
	
// start image 
	public function actiondel()
	{
	$image = Photo::model()->findByPk($_POST['image_id']) ;
	$image->delete();
	}
	public function actionAddPhotoInfo()
	{
    $image = Photo::model()->findByAttributes(array('type_cg'=>'team_photo','r_id'=>Yii::app()->session['team_id_cg']),array('order'=>'id DESC')); 
	$image->info_cg=$_POST['Photo']['info_cg'];
	$image->r_id=$_POST['Photo']['r_id'];
	$image->uploader_id=Yii::app()->session['user_id_cg'];
	$image->save();
	}


function actionAddPhoto()
{
  $model=new Photo;
   //  $dir = Yii::app()->baseUrl.'/uploads/photos/teams';
       


  
	$file=CUploadedFile::getInstance($model,'title');		
	$uploaded = $file->saveAs(teams_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();  
    $model->type_cg='team_photo';

    
    $decodeData = json_decode($_POST['PhotoB']);
    $model->r_id=$decodeData->team_id; 
     $model->uploader_id=Yii::app()->session['uploader_id'] ;
    if(!$model->save() || !$model->title->saveAs( teams_dir.'/'.$model->title))
    {
    throw new CHttpException(500);
    echo 1;
    Yii::app()->end();
    }
    else {echo "errooooooooooooor"; }
}

		public function actionNewPhoto()
	{

$photo = Photo::model()->findByAttributes(array('type_cg'=>'team_photo','uploader_id'=>Yii::app()->session['uploader_id']),array('order'=>'id DESC')) ;    
if ($photo)
{
 
	echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/teams/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photo/$photo->id"));
	 echo $photo->info_cg ;
 
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

		if(isset($_POST['Teams']))
		{
			$model->attributes=$_POST['Teams'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('AddPhotos',array(
			'model'=>$model,
		));
	}
	
public function actionShowPhoto()
	{     
$photo = Photo::model()->findByAttributes(array('type_cg'=>'team_profile','uploader_id'=> Yii::app()->user->id ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/teams/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
 
}
else {echo "error";}



	}
	
	
	
function actionPhotoEdit()
{

 $decodeData = json_decode($_POST['PhotoB']);
        $edit_photo = Photo::model()->findByAttributes(array('type_cg'=>'team_profile','r_id'=>$decodeData->team_id)) ;  
		if($edit_photo)
		{
        $edit_photo->type_cg = 'team_photo';
        $edit_photo->save();
		}

 //  $dir = Yii::app()->baseUrl.'/uploads/photos/teams';

    $model=new Photo;
	$file=CUploadedFile::getInstance($model,'title');		
	$file->saveAs( teams_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
    
	    
      

	$model->r_id=$decodeData->team_id;    
    $model->type_cg='team_profile';
    $model->uploader_id =$decodeData->uploader_id; 
    $model->save();
    $model->title->saveAs( teams_dir.'/'.$model->title);
    
    
 
}
	
	
function actionTeamProfilePhoto(){

$model=new Photo;
 
	$file=CUploadedFile::getInstance($model,'title');		
	$uploaded = $file->saveAs( teams_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
	
	  $decodeData = json_decode($_POST['PhotoB']);
      $queryString_id_url = $decodeData->team_id; 
		
      $model->r_id=$queryString_id_url;   
      $model->type_cg='team_profile';
      $model->uploader_id=$decodeData->uploader_id;
	
 
    if(!$model->save() || !$model->title->saveAs( teams_dir.'/'.$model->title))
    {
    throw new CHttpException(500);
    echo 1;
 
    Yii::app()->end();

    }
}
	public function actionAdd_Profile_Photo()
	{
		$model=new Photo;


		$this->render('Add_Profile_Photo',array(
			'model'=>$model,
		));
	}
	



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
		public function actionNewTeam()
	{
				$model=new Teams;
	// Uncomment the following line if AJAX validation is needed
 
	//	if(Yii::app()->getRequest()->getIsAjaxRequest()) { $this->performAjaxValidation($model); Yii::app()->end(); }	
 
		 
		if(isset($_POST['Teams']))
		{
	
			$model->title=$_POST['Teams']['title'];
		  	$model->about=$_POST['Teams']['about'];
		 	$model->maker_id= Yii::app()->user->id ;
		//	$model->validate();
		 	$model->save();
	    	$team_id_send= $model->id;
 
  
		 

			$ChallengerTeam = new ChallengerTeam;
			$ChallengerTeam->challenger_id= Yii::app()->user->id ;
			$ChallengerTeam->team_id= $model->id;
			$ChallengerTeam->leader= '1';
			$ChallengerTeam->confirm= '1';
			$ChallengerTeam->status_cg= 'confirm';
			$ChallengerTeam->team_title=  $_POST['Teams']['title'];
			$ChallengerTeam->save(); 
			
		 	$team_id= $model->id;
	 
		 	 $this->renderPartial('Add_Profile_Photo',array('team_id'=>$team_id),false,true); 
		

		}
	}
	
	public function actionCreate()
	{
		$model=new Teams;
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

		if(isset($_POST['Teams']))
		{
			$model->title=$_POST['Teams']['title'];
			$model->about=$_POST['Teams']['about'];
			$model->save();
				
 $ChallengerTeams =  ChallengerTeam::model()->findAllByAttributes(array('team_id'=> $id )) ;
if ($ChallengerTeams)
 {    
 foreach ($ChallengerTeams as $ChallengerTeam){$ChallengerTeam->team_title= $_POST['Teams']['title']; $ChallengerTeam->save();}   
 }			
			
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
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Teams');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	

	
	public function actionAdmin()
	{
		$model=new Teams('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Teams']))
			$model->attributes=$_GET['Teams'];

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
		$model=Teams::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='teams-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

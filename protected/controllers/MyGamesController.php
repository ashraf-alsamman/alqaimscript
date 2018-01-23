<?php

class MyGamesController extends Controller
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
				'actions'=>array('index','view','RemoveFromMyGames','TimeTableSave'
			
			,'ShowAllNotifications','AjaxShowFriendsRequests','AjaxShowEnemies','AjaxShowTeamsRequests','AjaxNotifications',
'NotNowMember','ConfirmMember','NMembers','ReadTeams','ReadFriends','AjaxNEnemies','AjaxNotNowFriends','AjaxNFriends'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete'),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	
		public function actionTimeTableSave()
	{
  // print_R($_POST) ;

$TimeTable = new TimeTable;

$TimeTable->day_id = $_POST['day_id'];
$TimeTable->lesson_id = $_POST['lesson_id'];
$TimeTable->class_id = $_POST['class_id'];
$TimeTable->subject_id = $_POST['subject_id'];
$TimeTable->teacher_id = $_POST['teacher_id'];

$TimeTable_R = TimeTable::model()->findByAttributes(array(
'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'],'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id'] 
)) ;
if ($TimeTable_R)
{echo "yaa";}

else
 {
$TimeTable->save() ;
$this->renderPartial('TimeTableSave',array('day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'],'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id']),false,true);
}
/*
$this->renderPartial('TimeTableSave2',array('day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'],'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id']),false,true);
 */

	
	
	}
	
	
	public function actionRemoveFromMyGames()
	{
$MyGames =  MyGames::model()->findByAttributes(array('game_id'=>$_POST['game_id'],'user_id'=>Yii::app()->user->id  ));
$MyGames->delete();
 	$this->renderPartial('MyGames',array( ),false,true);
	}

	
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
	public function actionCreate()
	{
		$model=new MyGames;

		// Uncomment the following line if AJAX validation is needed
		 

		if(isset($_POST['MyGames']))
		{
			// $model->attributes=$_POST['MyGames'];
			$model->user_id = Yii::app()->user->id;
			$model->game_id = $_GET['id'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

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

		if(isset($_POST['MyGames']))
		{
			$model->attributes=$_POST['MyGames'];
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
        public function actionIndex()
	{
	    $dataProvider=new CActiveDataProvider('MyGames');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	/*
	   $dataProvider=new CActiveDataProvider('MyGames');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	*/
	 

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MyGames('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MyGames']))
			$model->attributes=$_GET['MyGames'];

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
		$model=MyGames::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='my-games-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

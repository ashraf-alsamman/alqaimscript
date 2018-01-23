<?php

class AuthController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('index','view','create','update'
				,'AddAuthCall','AddAuth','DeleteAuth','AddAuthRel'
				,'DeletePage','NoDataById','DeleteAllPagesById'
				),
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

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
         public function actionDeleteAllPagesById()
	{
		    
$ExAuthRel = ExAuthRel::model()->findAllByAttributes(array(
'job_title_id'=>$_POST['job_title_id'],'controller_id'=>$_POST['PageCategory'])) ; 
		 if (count($ExAuthRel)>0)
		 {
				foreach ($ExAuthRel as $Rel) 
				{
					$data = ExAuthRel::model()->findByAttributes(array('id'=>$Rel->id)) ;
					$data->delete();
				}	 	  	 	
		 }
	}
     public function actionNoDataById()
	{    
 //$this->renderPartial('NoStaffById2',array('job_title_id'=>$_POST['job_title_id'],'job_title'=>$_POST['job_title']),false,true);		
    }
     public function actionDeletePage()
	{    
   	$data = ExAuthRel::model()->findByAttributes(array('id'=>$_POST['page_id'])) ;
     if ($data->id){$data->delete();} 
	$this->renderPartial('NoDataById',array(
	'PageCategory'=>$_POST['PageCategory'],'job_title_id'=>$_POST['job_title_id']),false,true);		
	}
        public function actionAddAuthCall()
	{
  $this->renderPartial('AddAuthCall',  array('job_title_id'=>$_POST['job_title_id']),false,true);
	}

	
	public function actionAddAuth()
	{
  
  $this->renderPartial('AddAuth',  
  array('controller_id'=>$_POST['controller_id'],'job_title_id'=>$_POST['job_title_id']),false,true);
	}
 
	
		public function actionAddAuthRel()
	{
		
	$data = new ExAuthRel;
	$data->action_id = $_POST['action_id'];
	$data->job_title_id = $_POST['job_title_id'];
	$data->controller_id  = $_POST['controller_id'];
$job_title_id = $_POST['job_title_id'];
 $controller_id =  $_POST['controller_id'];
 //print_r ($_POST);

	if(empty($_POST['action_id']))
{
		$data_not_in = ExAuthAction::model()->findAllBySql("
		select ex_auth_action. * from ex_auth_action  where  controller_id = $controller_id  
		AND   ex_auth_action.id   not IN (select action_id from ex_auth_rel where
  job_title_id  = $job_title_id)
		     ");
	foreach ($data_not_in as $key ) 
	{
	
		$data = new ExAuthRel;
	$data->action_id = $key->id;
	$data->job_title_id = $_POST['job_title_id'];
	$data->controller_id  = $_POST['controller_id'];
	$data->save();
	}
}
	
	 $data->save();	
   $this->renderPartial('ReloadAuthById',  
  array('controller_id'=>$_POST['controller_id'],'job_title_id'=>$_POST['job_title_id']),false,true);
	

	 	}

	public function actionDeleteAuth()
	{

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
		$model=new Auth;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Auth']))
		{
			$model->attributes=$_POST['Auth'];
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

		if(isset($_POST['Auth']))
		{
			$model->attributes=$_POST['Auth'];
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Auth');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Auth('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Auth']))
			$model->attributes=$_GET['Auth'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Auth the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Auth::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Auth $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='auth-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

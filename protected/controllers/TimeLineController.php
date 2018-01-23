<?php

class TimeLineController extends Controller
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
				'actions'=>array('index','view','create','update','admin','delete',
				'Manage','ChangeLang'
				
				,'Timeline','DeleteDefault','DeactivateDefaultLessonPlanner'
				 ,'DeleteDefaultFromIndex','NoDefaultDataById3','ActivateDefaultLessonPlanner'
				 ,'DeactivateDefaultLessonPlanner','ActivateDefaultLessonPlannerById','DeactivateDefaultLessonPlannerById'
			    ,'UpdateTimeline','UpdateTimelineCall','NewTimeline','NewTimelineCall'
			    ,'Cancel','UpdateDefaultFromIndexCall','UpdateDefaultFromIndex'
			    ,'DefaultCancel'
				,'DeleteTM','DeleteTM2','NoDataTM','NoDataTM3'
				,  'CancelActive','CancelInactive','UpdateActiveTMCall' 
		,'UpdateActiveTMCall','UpdateInactiveTMCall','UpdateActiveTM','UpdateInactiveTM'
				,'NewTMCall','NewTM','CancelNewTM'
				
				
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
////////////////////////////////////////////////////////////////////////////
  	///////////////////////////////////////////////////////////////	
	public function actionCancelNewTM()
	{
$this->renderPartial('CancelNewTM',array('DefaultLessonPlannerByGet'=>$_POST['DefaultLessonPlannerByGet']),false,true);	
		
	}
	public function actionNewTMCall()
	{
 $this->renderPartial('NewTM',array('DefaultLessonPlannerByGet'=>$_POST['DefaultLessonPlannerByGet']),false,true);	
	}
	public function actionNewTM()
	{
	$data = new TimeLine ;   
	$data->title = $_POST['title'];
	$data->from_date_ex = $_POST['from_date_ex'];
	$data->to_date_ex = $_POST['to_date_ex'];
	$data->show_ex = $_POST['show_ex'];
	$data->default_lesson_planner_id = $_POST['DefaultLessonPlannerByGet'];
	$data->save();	
	$this->renderPartial('ReloadDefaultLessonPlannerById',array('DefaultLessonPlannerByGet'=>$_POST['DefaultLessonPlannerByGet']),false,true);	
}

	public function actionCancelActive()
	{
	$this->renderPartial('ReloadActiveTM',array('default_lesson_planner_id'=>$_POST['default_lesson_planner_id']),false,true);	
	}
	public function actionCancelInactive()
	{
	$this->renderPartial('ReloadInactiveTM',array('default_lesson_planner_id'=>$_POST['default_lesson_planner_id']),false,true);	
	}

	public function actionUpdateActiveTMCall()
	{
	$this->renderPartial('UpdateActiveTM',array('week_id'=>$_POST['week_id']),false,true);	
	}
	
	public function actionUpdateInactiveTMCall()
	{		
	$this->renderPartial('UpdateInactiveTM',array('week_id'=>$_POST['week_id']),false,true);	
	}

	
	public function actionUpdateActiveTM()
	{
	$data = TimeLine::model()->findByPk($_POST['week_id']) ;   
	$data->title = $_POST['title'];
	$data->from_date_ex = $_POST['from_date_ex'];
	$data->to_date_ex = $_POST['to_date_ex'];
	$data->save();	
	$this->renderPartial('ReloadActiveTM',array('default_lesson_planner_id'=>$_POST['default_lesson_planner_id']),false,true);	
	}
	
	public function actionUpdateInactiveTM()
	{
	$data = TimeLine::model()->findByPk($_POST['week_id']) ; 
	$data->title = $_POST['title'];
	$data->from_date_ex = $_POST['from_date_ex'];
	$data->to_date_ex = $_POST['to_date_ex'];
	$data->save();
	$this->renderPartial('ReloadInactiveTM',array('default_lesson_planner_id'=>$_POST['default_lesson_planner_id']),false,true);	
	}
	
	
	public function actionNoDataTM3()
	{
	$this->renderPartial('NoDataTM4',array(),false,true);	
	}
	
	public function actionNoDataTM()
	{
	$this->renderPartial('NoDataTM2',array(),false,true);	
	}
	
	
	
	public function actionDeleteTM2()
	{
 	$data = TimeLine::model()->findByPk($_POST['week_id']) ;
     if ($data->id){$data->delete();} 
$this->renderPartial('NoDataTM3',array('default_lesson_planner_id'=>$data->default_lesson_planner_id),false,true);	
	}
	public function actionDeleteTM()
	{
  	$data = TimeLine::model()->findByPk($_POST['week_id']) ;
     if ($data->id){$data->delete();} 
  	$this->renderPartial('NoDataTM',array('default_lesson_planner_id'=>$data->default_lesson_planner_id),false,true);	
	}
	public function actionManage()
	{
		$this->render('Manage',array(
			
		));
	}
	
////////////////////////////////////////////////////////////////////////////
  	///////////////////////////////////////////////////////////////
  	  	public function actionUpdateDefaultFromIndexCall()
	{
$this->renderPartial('UpdateDefaulTimeline',array('DefaultLessonPlanner_id'=>$_POST['DefaultLessonPlanner_id']),false,true);	
	}
  	  	  	public function actionUpdateDefaultFromIndex()
	{
		
		$data = DefaultLessonPlanner::model()->findByPk($_POST['DefaultLessonPlanner_id']) ;   
		$data->title = $_POST['title'];
		$data->save();		
$this->renderPartial('ReloadDefaultLessonPlanner',array(),false,true);	
	}
  	
  	public function actionCancel()
	{
$this->renderPartial('ReloadDefaultLessonPlanner',array(),false,true);	
	}
  	
  	public function actionNewTimelineCall()
	{
$this->renderPartial('NewTimeline',array(),false,true);	
	}
	
	  	public function actionNewTimeline()
	{
$NewTimeline =  new DefaultLessonPlanner ;
$NewTimeline->title = $_POST['title'];
$NewTimeline->save();
	$this->renderPartial('ReloadDefaultLessonPlanner', array( ),false,true);

	}
  	
  	public function actionUpdateTimelineCall()
	{
$this->renderPartial('UpdateTimeline',array('DefaultLessonPlanner_id'=>$_POST['DefaultLessonPlanner_id']),false,true);	
	}
	
	public function actionUpdateTimeline()
	{
		$data = DefaultLessonPlanner::model()->findByPk($_POST['DefaultLessonPlanner_id']) ;   
		$data->title = $_POST['title'];
		$data->save();
		$this->renderPartial('ReloadActiveTimetable', array('DefaultLessonPlanner_id'=>$_POST['DefaultLessonPlanner_id']),false,true);
		
	}
///////////////////////////////////////	Timeline Start	
 	  	public function actionDeactivateDefaultLessonPlannerById()
	{
	$LessonPlanner2 = TimeLine::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id']));   
	$LessonPlanner2->show_ex = 0;
	$LessonPlanner2->save();
	
	$this->renderPartial('ReloadDefaultLessonPlannerById', array('DefaultLessonPlannerByGet'=>$_POST['DefaultLessonPlannerByGet']),false,true);
	}		
  	public function actionActivateDefaultLessonPlannerById()
	{
$LessonPlanner = TimeLine::model()->findByAttributes(array('status'=>1)) ;   
if ($LessonPlanner){$LessonPlanner->show_ex = 0;$LessonPlanner->save();}	
	$LessonPlanner2 = TimeLine::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id']));   
	$LessonPlanner2->show_ex = 1;
	$LessonPlanner2->save();
	
	$this->renderPartial('ReloadDefaultLessonPlannerById', array('DefaultLessonPlannerByGet'=>$_POST['DefaultLessonPlannerByGet'] ),false,true);
	}
 	
 	public function actionNoDefaultDataById3()
	{
	$this->renderPartial('NoDefaultDataById4',array(),false,true);	
	}		
 	 	public function actionNoDefaultDataById()
	{
		  $this->renderPartial('NoDefaultDataById2',array(),false,true);
		
	}
 	
 	public function actionDeleteDefaultFromIndex()
	{    
$data = DefaultLessonPlanner::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id'])) ;
     if ($data->id){$data->delete();} 
$Timeline =  Timeline::model()->findAllByAttributes(array('default_lesson_planner_id'=> $_POST['DefaultLessonPlanner_id'] )) ;		
		if ($Timeline)
		{
			foreach ($LessonPlannerLesson as $key) 
			{
			 $field =  Timeline::model()->findByPk($key->id) ;$field->Delete();
		    }

		}
	  $this->renderPartial('NoDefaultDataById3',array(),false,true);	

	}
 	  	 
 	  	 
 	  	 
 	  	 
 	public function actionDeactivateDefaultLessonPlanner()
	{
		    
	$DefaultLessonPlanner = DefaultLessonPlanner::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id']));                              
	$DefaultLessonPlanner->status = 0;
	$DefaultLessonPlanner->save();
 $this->renderPartial('ReloadDefaultLessonPlanner', array( ),false,true);
	}
 	 	public function actionActivateDefaultLessonPlanner()
	{
		$LessonPlanner = DefaultLessonPlanner::model()->findByAttributes(array('status'=>1)) ;   
if ($LessonPlanner){$LessonPlanner->show_ex = 0;$LessonPlanner->save();}	    
	$DefaultLessonPlanner = DefaultLessonPlanner::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id']));                              
	$DefaultLessonPlanner->status = 1;
	$DefaultLessonPlanner->save();
 $this->renderPartial('ReloadDefaultLessonPlanner', array( ),false,true);
	}
 	public function actionTimeline()
	{
	$this->render('Timeline',array());
	}
	
	 	public function actionDeleteDefault()
	{
	$LessonPlanner=DefaultLessonPlanner::model()->findByPK($_POST['DefaultLessonPlanner_id']);

$LessonPlanner->Delete();
$Timeline =  Timeline::model()->findAllByAttributes(array('default_lesson_planner_id'=> $_POST['DefaultLessonPlanner_id'] )) ;		
		if ($Timeline)
		{
			foreach ($LessonPlannerLesson as $key) 
			{
			 $field =  Timeline::model()->findByPk($key->id) ;$field->Delete();
		    }

		}
$this->renderPartial('NoActiveDefaultLessonPlanner',array(),false,true);
	}
	
	
	
///////////////////////////////////////	Timeline End
	
	
































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
	public function actionCreate()
	{
		$model=new DefaultLessonPlanner;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['DefaultLessonPlanner']))
		{
			$model->title          =$_POST['DefaultLessonPlanner']['title'];
			$model->adder_id       = Yii::app()->user->id ;
		//	$model->status     =$_POST['DefaultLessonPlanner']['status'];

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

		if(isset($_POST['TimeLine']))
		{
			$model->attributes=$_POST['TimeLine'];
			$model->update_date=new CDbExpression('NOW()');
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
		$dataProvider=new CActiveDataProvider('TimeLine');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TimeLine('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TimeLine']))
			$model->attributes=$_GET['TimeLine'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TimeLine the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TimeLine::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TimeLine $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='time-line-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



	public function actionChangeLang()
	{
  $Users =  Users::model()->findByPk(Yii::app()->user->id) ;
  $Users->save();
	} 




}

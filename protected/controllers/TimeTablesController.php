<?php

class TimeTablesController extends Controller
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
				'actions'=>array('index','view','create','update'
				,'DeleteFromIndex','NoDataBy','CountAfterAjax','CountAfterAjax2',
				'DeactivateTimeTable','ActivateTimeTable','DeleteM','Settings'
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
	public function actionSettings()
	{
				$this->render('view',array(
			'model'=>$this->loadModel($id),
		)); 
	}	
		public function actionDeleteM()
	{    
$TimeTables=TimeTables::model()->findByPK($_POST['TimeTable_id']);

$TimeTables->Delete();
	    $TimeTable =  TimeTable::model()->findAllByAttributes(array('time_table_id'=> $_POST['TimeTable_id'] )) ;
		if ($LessonPlannerLesson)
		{
			foreach ($TimeTable as $key) 
			{
			$field =  TimeTable::model()->findByPk($key->id) ;$field->Delete();
			}	
		}

$this->renderPartial('NoActiveTimeTable',array(),false,true);
	}
	
	public function actionDeactivateTimeTable()
	{    
	$TimeTables = TimeTables::model()->findByAttributes(array('id'=>$_POST['TimeTable_id']));                              
	$TimeTables->status = 0;
	$TimeTables->save();
 $this->renderPartial('ReloadTimeTables', array( ),false,true);


	}
	
	public function actionActivateTimeTable()
	{
		    
	$TimeTables = TimeTables::model()->findByAttributes(array('status'=>1)) ;   
if ($TimeTables){$TimeTables->status = 0;$TimeTables->save();}
	$TimeTables2 = TimeTables::model()->findByAttributes(array('id'=>$_POST['TimeTable_id']));   
	$TimeTables2->status = 1;
	$TimeTables2->save();
	
	$this->renderPartial('ReloadTimeTables', array( ),false,true);
 
	}
	
		
			
			public function actionCountAfterAjax()
	{    
		
	 $this->renderPartial('CountAfterAjax',array(),false,true);

	}
		public function actionDeleteFromIndex()
	{    
$data = TimeTables::model()->findByAttributes(array('id'=>$_POST['TimeTable_id'])) ;
     if ($data->id){$data->delete();} 
	  $this->renderPartial('NoDataById',array('TimeTable_id'=>$_POST['TimeTable_id']),false,true);	
}
	
		public function actionNoDataBy()
	{    
		
	 $this->renderPartial('NoDataById2',array(),false,true);

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
		$model=new TimeTables;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TimeTables']))
		{
	$TimeTables = TimeTables::model()->findByAttributes(array('status'=>1)) ;   
	if ($TimeTables){$TimeTables->status = 0;$TimeTables->save();}

			$model->attributes=$_POST['TimeTables'];

$model->lesson_num = $_POST['TimeTables']['lesson_num'];
		 	if($model->save())
				
		{
	if (isset($_POST['TimeTables']['saturday']))
	{
		$model->saturday=$_POST['TimeTables']['saturday'];
		$Day=new Days;
		$Day->title = 'saturday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['saturday'];
		$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'saturday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['sunday']))
	{
		$model->saturday=$_POST['TimeTables']['sunday'];
		$Day=new Days;
		$Day->title = 'sunday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['sunday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'sunday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['monday']))
	{
		$model->saturday=$_POST['TimeTables']['monday'];
		$Day=new Days;
		$Day->title = 'monday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['monday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'monday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['tuesday']))
	{
		$model->saturday=$_POST['TimeTables']['tuesday'];
		$Day=new Days;
		$Day->title = 'tuesday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['tuesday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'tuesday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['wednesday']))
	{
		$model->saturday=$_POST['TimeTables']['wednesday'];
		$Day=new Days;
		$Day->title = 'wednesday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['wednesday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'wednesday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['thursday']))
	{
		$model->saturday=$_POST['TimeTables']['thursday'];
		$Day=new Days;
		$Day->title = 'thursday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['thursday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'thursday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}

	if (isset($_POST['TimeTables']['friday']))
	{
		$model->saturday=$_POST['TimeTables']['friday'];
		$Day=new Days;
		$Day->title = 'friday';
		$Day->time_table_id = $model->id;
		$Day->status =  $_POST['TimeTables']['friday'];$Day->save();
	}
	
	else
	{
		$model->saturday='';
		$Day=new Days;
		$Day->title = 'friday';
		$Day->time_table_id = $model->id;
		$Day->status =  '';
	$Day->save();
	}





		$this->redirect(array('TimeTable/update','id'=>$model->id)); 	
		}
		
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

		if(isset($_POST['TimeTables']))
		{
	 
		if ($_POST['TimeTables']['status'] == 1)
				{
		$OldActiveTimeTable = TimeTables::model()->findByAttributes(array('status'=>1)) ; 
		if ($OldActiveTimeTable){$OldActiveTimeTable->status = 0;$OldActiveTimeTable->save();}
				}
		 
		 	$model->attributes=$_POST['TimeTables'];
			$model->last_update=new CDbExpression('NOW()');
	$model->lesson_num = $_POST['TimeTables']['lesson_num'];

	if (isset($_POST['TimeTables']['saturday']))
	{
		$model->saturday=$_POST['TimeTables']['saturday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'saturday')) ;
		$Day->status =  $_POST['TimeTables']['saturday'];$Day->save();
	}
	
	else
	{
	$model->saturday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'saturday')) ;
	$Day->status =  '';$Day->save();
	}

	if (isset($_POST['TimeTables']['sunday']))
	{
		$model->sunday=$_POST['TimeTables']['sunday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'sunday')) ;
		$Day->status =  $_POST['TimeTables']['sunday'];$Day->save();
	}
	
	else
	{
	$model->sunday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'sunday')) ;
	$Day->status =  '';$Day->save();
	}
		
		if (isset($_POST['TimeTables']['monday']))
	{
		$model->monday=$_POST['TimeTables']['monday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'monday')) ;
		$Day->status =  $_POST['TimeTables']['monday'];$Day->save();
	}
	
	else
	{
	$model->monday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'monday')) ;
	$Day->status =  '';$Day->save();
	}
		
		
		if (isset($_POST['TimeTables']['tuesday']))
	{
		$model->tuesday=$_POST['TimeTables']['tuesday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'tuesday')) ;
		$Day->status =  $_POST['TimeTables']['tuesday'];$Day->save();
	}
	
	else
	{
	$model->tuesday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'tuesday')) ;
	$Day->status =  '';$Day->save();
	}
		
	if (isset($_POST['TimeTables']['wednesday']))
	{
		$model->wednesday=$_POST['TimeTables']['wednesday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'wednesday')) ;
		$Day->status =  $_POST['TimeTables']['wednesday'];$Day->save();
	}
	
	else
	{
	$model->wednesday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'wednesday')) ;
	$Day->status =  '';$Day->save();
	}
	
	if (isset($_POST['TimeTables']['thursday']))
	{
		$model->thursday=$_POST['TimeTables']['thursday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'thursday')) ;
		$Day->status =  $_POST['TimeTables']['thursday'];$Day->save();
	}
	
	else
	{
	$model->thursday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'thursday')) ;
	$Day->status =  '';$Day->save();
	}
	
	if (isset($_POST['TimeTables']['friday']))
	{
		$model->friday=$_POST['TimeTables']['friday'];	
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'friday')) ;
		$Day->status =  $_POST['TimeTables']['friday'];$Day->save();
	}
	
	else
	{
	$model->friday='';
$Day = Days::model()->findByAttributes(array('time_table_id'=>$id,'title'=>'friday')) ;
	$Day->status =  '';$Day->save();
	}
 	
			 	if($model->save())
        {
         $this->redirect(array('../dashboard/TimeTables'));
		}
			 	
	 	  
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
		$dataProvider=new CActiveDataProvider('TimeTables');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TimeTables('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TimeTables']))
			$model->attributes=$_GET['TimeTables'];

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
		$model=TimeTables::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='time-tables-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

<?php

class TimeTableController extends Controller
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
				'actions'=>array('index','view','TimeTableSave','Chooseactivity','ChangeTeacher','ChangeOldSubject','Remove'
				,'Cancel','CancelNew','Report','new98report','ChangeTimeTableOld'
				,'ChangeSubjectsJustSaved',
' JustRemovedCount','JustInsertedCount','NotInserted_count','InsertedCount',
	'InsertCount','ChangeOldSubject2','ChangeTeacher2'	
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
		

					 public function actionChangeOldSubject2()
	{
	    $this->renderPartial('ChangeOldSubject2',array(
        'old_subject_id'=>$_POST['old_subject_id'],'old_teacher_id'=>$_POST['old_teacher_id'],
		'subject_id'=>$_POST['subject_id'],
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
		),false,true);
	}
				 public function actionInsertCount()
	{
	    $this->renderPartial('InsertCount',array(
'just_inserted_count'=>$_POST['just_inserted_count'],
'just_removed_count'=>$_POST['just_removed_count'],  
		),false,true);
	}
	
	
		public function actionTimeTableSave()
	{
 
 
	$TimeTable_R = TimeTable::model()->findByAttributes(array(
'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'] ,'time_table_id'=>$_POST['time_table_id'] 
 )) ;
if ($TimeTable_R)
{$TimeTable_R->delete();}

	
$TimeTable = new TimeTable;

$TimeTable->day_id = $_POST['day_id'];
$TimeTable->lesson_id = $_POST['lesson_id'];
$TimeTable->class_id = $_POST['class_id'];
$TimeTable->subject_id = $_POST['subject_id'];
$TimeTable->teacher_id = $_POST['teacher_id'];
$TimeTable->time_table_id = $_POST['time_table_id'];

$TimeTable->adder_id = Yii::app()->user->id ;
$TimeTable->adder_model = 'user';
 
$TimeTable->save() ;


$this->renderPartial('Save',array('day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'],'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id'],'time_table_id'=>$_POST['time_table_id']
 ),false,true);
  /*
  $TimeTables = TimeTables::model()->findByAttributes(array('id'=>$_POST['time_table_id'] )) ;
  $TimeTables->just_inserted_count = 55;
	$this->renderPartial('InsertCountCall',array(),false,true);
*/
	

	
	}
	
	
	public function actionRemove()
	{
$TimeTable_R = TimeTable::model()->findByAttributes(array(
'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id']
 ,'class_id'=>$_POST['class_id'] ,'time_table_id'=>$_POST['time_table_id'] 
 )) ;
	if ($TimeTable_R)
	{$TimeTable_R->delete();
		
		
	$this->renderPartial('InsertCountCall',array(),false,true);


		
 
	}
	$this->renderPartial('Reloaded',array('day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id']
	,),false,true);
	}
	
	
	
	
	
	 public function actionChangeSubjectsJustSaved()
	{
	    $this->renderPartial('ChangeSubjectsJustSaved',array(
		'subject_id'=>$_POST['subject_id'],'subject_id'=>$_POST['old_subject_id'],'old_teacher_id'=>$_POST['teacher_id'],
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
		),false,true);
	}
		public function actionChangeTimeTableOld()
	{
	    $this->renderPartial('ChangeTimeTableOld',array(
		'subject_id'=>$_POST['subject_id'],'old_subject_id'=>$_POST['old_subject_id'],'old_teacher_id'=>$_POST['old_teacher_id'],
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
		),false,true);
	}
	

	
	
	public function actionCancel()
	{
	$this->renderPartial('ReloadedCancel',array(
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id']
,'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id'],
	),false,true);
  
	}
		
		public function actionCancelNew()
	{

	$this->renderPartial('CancelNew',array(
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id']
 
	),false,true);
 
	}
	
	
		public function actionChangeTeacher2()
	{
  if ($_POST['subject_id'] ==1){}
  else{
 
		$this->renderPartial('ChangeTeacher2',array( 
		'old_subject_id'=>$_POST['old_subject_id'],'old_teacher_id'=>$_POST['old_teacher_id'],
		'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id'],
				'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
				),false,true);
       }
	}

	
	public function actionChangeTeacher()
	{
  if ($_POST['subject_id'] ==1){}
  else{
 
		 $this->renderPartial('ChangeTeacher',array( 
		'old_subject_id'=>$_POST['old_subject_id'],
		 'subject_id'=>$_POST['subject_id'],'teacher_id'=>$_POST['teacher_id'],
				'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
				),false,true);
       }
	}

		public function actionChooseactivity()
	{
	    $this->renderPartial('ChangeSubject',array(

		'subject_id'=>$_POST['subject_id'],
		'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
		),false,true);
	}
	
			public function actionChangeOldSubject()
	{
 
	
 $this->renderPartial('ChangeOldSubject',array(
	
	'subject_id'=>$_POST['subject_id'],
	'day_id'=>$_POST['day_id'],'lesson_id'=>$_POST['lesson_id'],'class_id'=>$_POST['class_id'],'time_table_id'=>$_POST['time_table_id'],
	),false,true);

	
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
	public function actionCreate()
	{
		$model=new TimeTable;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TimeTable']))
		{
			$model->attributes=$_POST['TimeTable'];
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

		if(isset($_POST['TimeTable']))
		{
			$model->attributes=$_POST['TimeTable'];
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
		$dataProvider=new CActiveDataProvider('TimeTable');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TimeTable('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TimeTable']))
			$model->attributes=$_GET['TimeTable'];

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
	// get data from another TimeTables model
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='time-table-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

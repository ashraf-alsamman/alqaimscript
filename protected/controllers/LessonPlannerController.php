<?php
 define("uploads_dir",  dirname(Yii::app()->request->scriptFile).'\uploads\Lesson_Planner_uploads');
 define("uploads_dir2",  dirname(Yii::app()->request->scriptFile).'\uploads');
class LessonPlannerController extends Controller
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
				'Manage','DeactivateLessonPlanner','DeleteFromIndex',
				'ActivateLessonPlanner',
				'AddLessonCall','AddLesson','AddLessondata'
				,'GetAllLessons','Download','GetAlllessonsByWeek','DeleteLesson','AfterLessonDone'
				,'EditLesson','EditLessonCall','EditUploadLesson','EditLessonWithUpload'
			    ,'NoDataById','AfterLessonSave_1','DeleteM','NoDataById3',
			    
				
				 'Timeline','DeleteDefault','DeactivateDefaultLessonPlanner'
				 ,'DeleteDefaultFromIndex','NoDefaultDataById3','ActivateDefaultLessonPlanner'
			    
			    
			    
			    
			    
			    
			    
			    
			    
			   
			   
			    ,'UploadLesson1','UploadLesson2','UploadLesson3','UploadLesson4','UploadLesson5',
			    'UploadLesson6','UploadLesson7','UploadLesson8','UploadLesson9','UploadLesson10',
				'UploadLesson11','UploadLesson12','UploadLesson13','UploadLesson14','UploadLesson15',
				'UploadLesson16','UploadLesson17','UploadLesson18','UploadLesson19','UploadLesson20',
				'UploadLesson21','UploadLesson22','UploadLesson23','UploadLesson24','UploadLesson25',
		
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
 	
///////////////////////////////////////	Timeline Start	
 			
  	public function actionActivateDefaultLessonPlanner()
	{
	$LessonPlanner = DefaultLessonPlanner::model()->findByAttributes(array('status'=>1)) ;   
if ($LessonPlanner){$LessonPlanner->status = 0;$LessonPlanner->save();}
	$LessonPlanner2 = DefaultLessonPlanner::model()->findByAttributes(array('id'=>$_POST['DefaultLessonPlanner_id']));   
	$LessonPlanner2->status = 1;
	$LessonPlanner2->save();
	
	$this->renderPartial('ReloadDefaultLessonPlanner', array( ),false,true);
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
	
	
	
	public function actionActivateLessonPlanner()
	{
		    
	$LessonPlanner = LessonPlanner::model()->findByAttributes(array('status'=>1)) ;   
if ($LessonPlanner){$LessonPlanner->status = 0;$LessonPlanner->save();}
	$LessonPlanner2 = LessonPlanner::model()->findByAttributes(array('id'=>$_POST['LessonPlanner_id']));   
	$LessonPlanner2->status = 1;
	$LessonPlanner2->save();
	
	$this->renderPartial('ReloadLessonPlanner', array( ),false,true);
 
	}
  	
  	public function actionNoDataById3()
	{
  $this->renderPartial('NoDataById4',array(),false,true);
	}
		public function actionDeleteFromIndex()
	{    
$data = LessonPlanner::model()->findByAttributes(array('id'=>$_POST['LessonPlanner_id'])) ;
     if ($data->id){$data->delete();} 
	  $this->renderPartial('NoDataById3',array(),false,true);	

     $LessonPlannerLesson =  LessonPlannerLesson::model()->findAllByAttributes(array('lesson_planner_id'=> $_POST['LessonPlanner_id'] )) ;
	  	if ($LessonPlannerLesson)
		{
			foreach ($LessonPlannerLesson as $key) 
			{
			$field =  LessonPlannerLesson::model()->findByPk($key->id) ;$field->Delete();
			}	
		}
}
	
			
  	 public function actionDeactivateLessonPlanner()
	{    
	$LessonPlanner = LessonPlanner::model()->findByAttributes(array('id'=>$_POST['LessonPlanner_id']));                              
	$LessonPlanner->status = 0;
	$LessonPlanner->save();
 $this->renderPartial('ReloadLessonPlanner', array( ),false,true);
	}
		
  	public function actionDeleteM()
	{    
$LessonPlanner=LessonPlanner::model()->findByPK($_POST['LessonPlanner_id']);

$LessonPlanner->Delete();
$LessonPlannerLesson =  LessonPlannerLesson::model()->findAllByAttributes(array('lesson_planner_id'=> $_POST['LessonPlanner_id'] )) ;		
		if ($LessonPlannerLesson)
		{
			foreach ($LessonPlannerLesson as $key) 
			{
			 $field =  LessonPlannerLesson::model()->findByPk($key->id) ;$field->Delete();
		    }
	
		
		}
$this->renderPartial('NoActiveLessonPlanner',array(),false,true);
	}	
  	 
  	public function actionManage()
	{
		$this->render('Manage',array(
			'model'=>'LessonPlanner',
		));
	}

  	
  	

  	 public function actionGetAlllessonsByWeek()
{
$my_id = Yii::app()->user->id ;
$LessonPlannerLesson = LessonPlannerLesson::model()->findByAttributes(array('adder_id'=>$my_id),array('order'=>'id DESC')) ;   

$this->renderPartial('GetAlllessonsByWeek',array(
'lesson_planner_week_id'=>$LessonPlannerLesson->lesson_planner_week_id ,
'lesson_planner_id'=>$LessonPlannerLesson->lesson_planner_id,
  ),false,true);
}
  	 	
  	 	 function actionAddLessondata()
{
$my_id = Yii::app()->user->id ;	
$data = LessonPlannerLesson::model()->findByAttributes(array('adder_id'=>$my_id),array('order'=>'id DESC')) ;
$data->title = $_POST['title_ex'];
$data->note = $_POST['note'];

$data->save();
}

		public function actionAddLessonCall()
	{
	
	 if (Yii::app()->session['add_lesson_start_ex']==0)
{	 
      $weekOrder = $_POST['weekOrder'] ; 
	  $this->renderPartial("AddLessonCall$weekOrder",array(
	  'lesson_planner_id'=>$_POST['lesson_planner_id'],
	  'lesson_planner_week_id'=>$_POST['lesson_planner_week_id'],),false,true);
	  Yii::app()->session['add_lesson_start_ex']=1;
}
 
else {return FALSE;}
	}
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 
  	 public function actionNoDataById()
	{	 
      $this->renderPartial('NoDataById2',array(),false,true);
    }
  	
  		 public function actionDeleteLesson()
	{	 
    $data =  LessonPlannerLesson::model()->findByAttributes(array('id'=>$_POST['lesson_id'])) ;
    $data->delete();
	$this->renderPartial('NoDataById',array('week_id'=>$_POST['week_id'],'lesson_planner_id'=>$_POST['lesson_planner_id']),false,true);	
    }
  	 public function actionEditLessonCall()
	{	 
		 if (Yii::app()->session['add_lesson_start_ex']==0)
		 {
	
		  	Yii::app()->session['add_lesson_start_ex'] = $_POST['lesson_planner_week_id'];
		  $this->renderPartial('EditLessonCall',array(
		 		  'lesson_planner_id'=>$_POST['lesson_planner_id'],
			  'lesson_planner_week_id'=>$_POST['lesson_planner_week_id'],
		  'lesson_id'=>$_POST['lesson_id'],
		  ),false,true);
		Yii::app()->session['add_lesson_start_ex']=1;
		 }
		 else{return FALSE;}
	}
  	 
  	 public function actionEditLesson()
	{
 // if (Yii::app()->session['add_lesson_start_ex']) { echo $nodata; }
// else{
Yii::app()->session['add_lesson_start_ex'] = $_POST['lesson_planner_week_id'] ;
	$data =  LessonPlannerLesson::model()->findByAttributes(array('id'=>$_POST['lesson_id'])) ;
    $data->title =$_POST['title_ex'] ;
    $data->note =$_POST['note'] ;
    $data->save();
		  $this->renderPartial("GetAlllessonsByWeek",array(
		  'lesson_planner_id'=>$_POST['lesson_planner_id'],
		  'lesson_planner_week_id'=>$_POST['lesson_planner_week_id'],
		  'lesson_id'=>$_POST['lesson_id']),false,true); 	
// }       
Yii::app()->session['add_lesson_start_ex']=0 ;; 	
    }
	
 
	
	
	
	

	public function actionEditUploadLesson()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name"]);
  $model=new LessonPlannerLesson;
  $model =  LessonPlannerLesson::model()->findByAttributes(array('id'=>$decodeData->lesson_id )) ;
  $file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	

  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
   Yii::app()->session['lesson_id'] = $model->id ;
  Yii::app()->session['add_lesson_start_ex']=0 ;
}
	
	
	
	
	
	
	
	
	
	
	

	
		

	
			public function actionAddLesson()
	{
      $this->renderPartial('AddLesson',array('model_id'=>$model_id),false,true);
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
		$model=new LessonPlanner;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['LessonPlanner']))
		{
			$model->attributes=$_POST['LessonPlanner'];
			$model->adder_id = Yii::app()->user->id ;
		$model->default_lesson_planner_id=$_POST['LessonPlanner']['default_lesson_planner_id'];
		
/*
			$model->title=$_POST['LessonPlanner']['title'];
			$model->lesson_planner_term =$_POST['LessonPlanner']['lesson_planner_term'];
		
$default_l_p = DefaultLessonPlanner::model()->findByAttributes(array('status'=>'1')) ;
		if  ($default_l_p){$model->default_lesson_planner_id =$default_l_p->id;}
		if (isset($_POST['TimeTables']['subject_id']))
		{$model->subject_id=$_POST['TimeTables']['subject_id'];}
	else{$model->subject_id=Yii::app()->session['LessonPlanner_subject_id'];}
			
			*/
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

		if(isset($_POST['LessonPlanner']))
		{
			$model->attributes=$_POST['LessonPlanner'];
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
		$dataProvider=new CActiveDataProvider('LessonPlanner');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	

	public function actionAdmin()
	{
		$model=new LessonPlanner('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['LessonPlanner']))
			$model->attributes=$_GET['LessonPlanner'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return LessonPlanner the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=LessonPlanner::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param LessonPlanner $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lesson-planner-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}




































	 function actionUploadLesson1()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name1"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  1;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;

}
	 function actionUploadLesson2()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name2"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->weekOrder =  2;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson3()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name3"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder = 3;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson4()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name4"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder =  4;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson5()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name5"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder =  5;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson6()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name6"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->weekOrder =  6;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson7()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name7"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder =  7;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  $svcvxcvdff545 =   $decodeData->adder_id;
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson8()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name8"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  8;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
 Yii::app()->session['add_lesson_start_ex']=0 ;
}
	 function actionUploadLesson9()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name9"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->weekOrder =  9;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson10()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name10"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder =  10;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson11()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name11"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->weekOrder = 11;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson12()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name12"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  12;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson13()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name13"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  13;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson14()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name14"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  14;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson15()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name15"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  15;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson16()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name16"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  16;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson17()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name17"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  17;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson18()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name18"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  18;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson19()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name19"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  19;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
  Yii::app()->session['add_lesson_start_ex']=0 ;
}

	 function actionUploadLesson20()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name20"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
 $model->weekOrder =  20;
  $model->adder_id =  $decodeData->adder_id;  
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}

	 function actionUploadLesson21()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name21"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  21;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}

	 function actionUploadLesson22()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name22"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  22;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}

	 function actionUploadLesson23()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name23"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  23;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}

	 function actionUploadLesson24()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name24"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
  $model->weekOrder =  24;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}

	 function actionUploadLesson25()
{
  $decodeData = json_decode($_POST["LessonPlannerLesson_name25"]);
  $model=new LessonPlannerLesson;$file=CUploadedFile::getInstance($model,'upload_ex');
  $file->saveAs(uploads_dir.'/'.time().$file->getName());	$model->upload_ex=time().$file->getName();	
  $model->adder_id =  $decodeData->adder_id;  
 $model->weekOrder =  25;
  $model->lesson_planner_week_id =$decodeData->lesson_planner_week_id;  
  $model->lesson_planner_id  =$decodeData->lesson_planner_id; 
  $model->save();  $model->upload_ex->saveAs(uploads_dir.'/'.$model->upload_ex);
}



	 function actionAfterLessonSave_1()
{
echo "yes";
}


















}

<?php
define("uploads_dir",  dirname(Yii::app()->request->scriptFile).'\uploads');
class StaffController extends Controller
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
				'actions'=>array('index','view','admin','update','delete',
				'AddTeacherSubjectCall','AddTeacherSubject','AddTeacherClassCall','AddTeacherClass',
				'CancelSubjects','CancelClasses','DeleteSubjects','DeleteClasses2','AddTeacherGradeCall',
				'CancelTeacherClass','ShowPhoto_98447','PhotoEdit_98447'
				,'FreezeAccess','DeleteAccess','UnFreezeAccess','InClass_M','NotInClass_M'
				,'GetStaffById','DeleteFromIndex','NoStaffById','DeleteM','PhotoEdit','ShowPhoto'
				
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
	
	public function actionShowPhoto()
	{

$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>$_GET['controller_title_ex'],'r_id'=> $_GET['r_id'] ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
}
else {echo "error";}
 
	}
	
public function actionPhotoEdit()
{
 
 $decodeData = json_decode($_POST['PhotoB']);
    $model=new Photo;
	$file=CUploadedFile::getInstance($model,'title');		
	$file->saveAs(uploads_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
 	$model->r_id=$decodeData->r_id;    
    $model->type_cg='profile';
    $model->uploader_id=  $decodeData->uploader_id;  
    $model->controller_title_ex=    Yii::app()->controller->id ;
    $model->save();
    $model->title->saveAs(uploads_dir.'/'.$model->title);
}
		public function actionDeleteM()
	{
  		$this->loadModel($_POST['id'])->delete();
	}
	
	
	public function actionNoStaffById()
	{    
 $this->renderPartial('NoStaffById2',array('job_title_id'=>$_POST['job_title_id'],'job_title'=>$_POST['job_title']),false,true);		
    }
	public function actionDeleteFromIndex()
	{    
   	$data = Staff::model()->findByAttributes(array('id'=>$_POST['staff_id'])) ;
     if ($data->id){$data->delete();} 
	  $this->renderPartial('NoStaffById',array('job_title_id'=>$_POST['job_title_id'],'job_title'=>$_POST['job_title']),false,true);		
	}
	
	public function actionGetStaffById()
	{   
    $this->renderPartial('GetStaffById',array('job_title_id'=>$_POST['job_title_id'],'job_title'=>$_POST['job_title']),false,true);		
    }
public function actionInClass_M()
	{   
$data =  Staff::model()->findByAttributes(array('id'=>$_POST['teacher_id'])) ;    
 $data->teacher = "1" ;
 $data->save();
 $this->renderPartial('ManageInClass_S_C',array('teacher_id'=>$_POST['teacher_id']),false,true);		
}
public function actionNotInClass_M()
	{   
$data =  Staff::model()->findByAttributes(array('id'=>$_POST['teacher_id'])) ;    
 $data->teacher = "0" ;
 $data->save();
 $this->renderPartial('ManageInClass_S_C',array('teacher_id'=>$_POST['teacher_id']),false,true);		
}



public function actionFreezeAccess()
	{   
$data =  Staff::model()->findByAttributes(array('id'=>$_POST['teacher_id'])) ;    
 $data->active = "0" ;
 $data->save();
 $this->renderPartial('ManageAccess',array('teacher_id'=>$_POST['teacher_id']),false,true);		
}
 public function actionUnFreezeAccess()
	{
$data =  Staff::model()->findByAttributes(array('id'=>$_POST['teacher_id'])) ;    
 $data->active = "1" ;
 $data->save();
 $this->renderPartial('ManageAccess',array('teacher_id'=>$_POST['teacher_id']),false,true);		}

public function actionDeleteAccess()
	{
$data = User::model()->findByAttributes(array('user_id'=>$_POST['teacher_id'])) ;
$data->delete();
$this->renderPartial('ManageAccess',array('teacher_id'=>$_POST['teacher_id']));		
    }



public function actionShowPhoto_98447()
	{

$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>$_GET['controller_title_ex'],'r_id'=> $_GET['r_id'] ) ,array('order'=>'id DESC')) ;    
if ($photo )
{
echo CHtml::link('<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photos/$photo->id"));
}
else {echo "error";}
 
	}
	
 public function actionPhotoEdit_98447()
{
 
 $decodeData = json_decode($_POST['PhotoB_98447']);
    $model=new Photo;
	$file=CUploadedFile::getInstance($model,'title');		
	$file->saveAs(uploads_dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
 	$model->r_id=$decodeData->r_id;    
    $model->type_cg='profile';
    $model->uploader_id=  $decodeData->uploader_id;  
    $model->controller_title_ex=    Yii::app()->controller->id ;
    $model->save();
    $model->title->saveAs(uploads_dir.'/'.$model->title);
}










	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionCancelTeacherClass( )
	{
	 $this->renderPartial('ManageClasses',  array('teacher_id'=>$_POST['teacher_id']),false,true);		
	}
	
	public function actionAddTeacherGradeCall( )
	{
$this->renderPartial('AddTeacherGradeCall',  array('teacher_id'=>$_POST['teacher_id']),false,true);		

	}
	
	public function actionDeleteClasses2( )
	{
	
				
			
		$data = TeacherClass::model()->findByAttributes(array('teacher_id'=>$_POST['teacher_id'],
		'class_id'=>$_POST['class_id'] )) ;
			if ($data)
			{
			$data->delete();	
			$this->renderPartial('ManageClasses',  array('teacher_id'=>$_POST['teacher_id']),false,true);		
 
			}
	}
	
		public function actionDeleteSubjects( )
	{
$data = TeacherSubject::model()->findByAttributes(array('teacher_id'=>$_POST['teacher_id']
,'subject_id'=>$_POST['subject_id'] )) ;
if ($data)
{
$data->delete();	
$this->renderPartial('ManageSubjects',  array('teacher_id'=>$_POST['teacher_id']),false,true);		
}
	}


	
		public function actionCancelClasses( )
	{
 $this->renderPartial('ManageClasses',  array('teacher_id'=>$_POST['teacher_id']),false,true);	 
	}
		public function actionCancelSubjects( )
	{
 $this->renderPartial('ManageSubjects',  array('teacher_id'=>$_POST['teacher_id']),false,true);	 
	}
	
	
		public function actionAddTeacherSubjectCall( )
	{
 $this->renderPartial('AddTeacherSubjectCall',  array('teacher_id'=>$_POST['teacher_id']),false,true);	 
	}
		
		
		public function actionAddTeacherSubject( )
	{
		 $data = new TeacherSubject;
		 $data->teacher_id = $_POST['teacher_id'];
		 $data->subject_id = $_POST['subject_id'];
		 $data->adder_id =  Yii::app()->user->id ;
		 $data->save();
	  $this->renderPartial('ManageSubjects',  array('teacher_id'=>$_POST['teacher_id']),false,true);
   }
	
			public function actionAddTeacherClassCall( )
	{
 $this->renderPartial('AddTeacherClassCall',  array('teacher_id'=>$_POST['teacher_id'],
 'grade_id'=>$_POST['grade_id']),false,true);	 
	}
		
		
		public function actionAddTeacherClass( )
	{
		$data = new TeacherClass;
		$data->teacher_id = $_POST['teacher_id'];
		$data->class_id = $_POST['class_id'];
		$data->adder_id =  Yii::app()->user->id ;
		$data->save();
		$this->renderPartial('ManageClasses',  array('teacher_id'=>$_POST['teacher_id']),false,true);	 
	}
	
	
	
	
	
	
 

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionCreate()
	{
		$model=new Staff;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Staff']))
		{
			$model->attributes=$_POST['Staff'];
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
        if ($id){}else{Yii::app()->request->redirect('/path/to/url');}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Staff']))
		{
			$model->attributes=$_POST['Staff'];
			$model->update_time=new CDbExpression('NOW()');
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
		$dataProvider=new CActiveDataProvider('Staff');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Staff('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Staff']))
			$model->attributes=$_GET['Staff'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Staff the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Staff::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Staff $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='staff-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

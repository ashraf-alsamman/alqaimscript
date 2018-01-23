<?php

define("uploads_dir",  dirname(Yii::app()->request->scriptFile).'\uploads');
class ParentsController extends Controller
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
				'actions'=>array('index','view','admin','delete','update','ShowPhoto','PhotoEdit','ChangeClasses','ChangeStudents'
				,'AddParentStudent','MyStudents','RefreshMyStudents','DeleteStudent','DeleteStudent2','DeleteStudent3'
				,'RefreshStudentsSelectAfterDelete','ChangeStudentsAfterDelete22','AddStudents','AfterAddStudents',
				'ManageMyStudents','DeleteFromIndex','NoParentsById','DeleteM','create','update','PhotoEdit','ShowPhoto'
				
				
				
				
				
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
		public function actionNoParentsById()
	{    
 $this->renderPartial('NoParentsById2',array(),false,true);		
    }
		public function actionDeleteFromIndex()
	{
		   	$data = Parents::model()->findByAttributes(array('id'=>$_POST['parent_id'])) ;
     if ($data->id){$data->delete();} 
	  $this->renderPartial('NoParentsById',array(),false,true);		
	}
			
			public function actionManageMyStudents()
	{
		
	 $this->renderPartial('ManageMyStudents',  array('parent_id'=>$_POST['parent_id'] ),false,true);	
	
	}
		public function actionAddStudents()
	{
		
	$this->renderPartial('AddStudents',  array('parent_id'=>$_POST['parent_id'] ),false,true);	
	
	}
		
			public function actionAfterAddStudents()
	{
		
	$this->renderPartial('ManageMyStudents',  array('parent_id'=>$_POST['parent_id'] ),false,true);	
	
	}

		public function actionAddParentStudent()
	{


	$data = new ParentStudent;
	$data->parent_id = $_POST['parent_id'];
	$data->student_id = $_POST['student_id'];
	$data->adder_id = Yii::app()->user->id ;
	$data->save();	
	$this->renderPartial('ManageMyStudents',  array('parent_id'=>$_POST['parent_id'] ),false,true);		

    }
	
	
	

		
		public function actionDeleteStudent3()
	{

       if ($_POST['student_id']&&$_POST['parent_id'])
	   {
	   $data = ParentStudent::model()->findByAttributes(array(
	   'student_id'=> $_POST['student_id'],'parent_id'=>$_POST['parent_id'] )) ;
	   if ($data) {$data->delete();}
	    }

	}
	
	public function actionDeleteStudent2()
	{

 
	   $data = ParentStudent::model()->findByAttributes(array(
	   'student_id'=> $_POST['student_id'],'parent_id'=>$_POST['parent_id'] )) ;
 			if ($data)
		{
$data->delete();
$this->renderPartial('ManageMyStudents',  array('parent_id'=>$_POST['parent_id']),false,true);
 	
		}

 
	}



	public function actionChangeStudents()
	{
	$grade_id_ex = $_POST['grade_id'];
	$class_id_ex = $_POST['class_id'];
	$parent_id_ex= $_POST['parent_id'];
	$this->renderPartial('ChangeStudents',
	array('grade_id'=>$grade_id_ex,'class_id'=>$class_id_ex,'parent_id'=>$parent_id_ex),false,true);
	}
	
	
	public function actionChangeClasses()
	{
	$this->renderPartial('ChangeClasses',array('grade_id'=>$_POST['grade_id'],'parent_id'=>$_POST['parent_id']),false,true);
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
		$model=new Parents;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Parents']))
		{
			$model->attributes=$_POST['Parents'];
			$model->update_time=new CDbExpression('NOW()');
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

		if(isset($_POST['Parents']))
		{
			$model->attributes=$_POST['Parents'];
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
		$model=new Parents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Parents']))
			$model->attributes=$_GET['Parents'];

		$this->render('Index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Parents('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Parents']))
			$model->attributes=$_GET['Parents'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Parents the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Parents::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Parents $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='parents-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

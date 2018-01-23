<?php
 define("uploads_dir",  dirname(Yii::app()->request->scriptFile).'\uploads');
class StudentsController extends Controller
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
				'actions'=>array('index','view','update','admin','delete','create','update',
				'ChangeClasses','ShowPhoto','PhotoEdit','ACo','GetClassesByGradeId'
				,'GetStudentsByClassId','NoDataById'.'DF2','dfi','GoNoData','DeleteM','init'
				,'dfi22','NoDataById3','dfi5'
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
		
					public function actiondfi5()
	{    
$data = Students::model()->findByAttributes(array('id'=>$_POST['student_id'])) ;
     if ($data->id){$data->delete();} 
	 $this->renderPartial('NoDataById5',array(),false,true);	
}
			public function actiondfi22()
	{    
$data = Students::model()->findByAttributes(array('id'=>$_POST['student_id'])) ;
     if ($data->id){$data->delete();} 
	 $this->renderPartial('NoDataById3',array(),false,true);	
}
		public function actionDeleteM()
	{
  		$this->loadModel($_POST['id'])->delete();
	}
	public function actiondfi()
	{    
$data = Students::model()->findByAttributes(array('id'=>$_POST['student_id'])) ;
     if ($data->id){$data->delete();} 
	  $this->renderPartial('NoDataById',array('class_id'=>$_POST['class_id']),false,true);	
}
	public function actionGoNoData()
	{    
		
	 $this->renderPartial('NoDataById2',array(),false,true);

	}


	public function actionGetStudentsByClassId()
{
 $this->renderPartial('GetStudentsByClassId',
 array('grade_id'=>$_POST['grade_id'],'class_id'=>$_POST['class_id'],'class_title'=>$_POST['class_title']),false,true);		   
}

	public function actionGetClassesByGradeId()
{
$this->renderPartial('GetClassesByGradeId',array('grade_id'=>$_POST['grade_id'],'grade_title'=>$_POST['grade_title']),false,true);		   
}
	
	public function actionACo()
{
$arr = array();

 $models= Students::model()->findAll() ;
foreach($models as $model) {
    $arr[] = array(
        'label'=>$model->name . $model->id , // label for dropdown list          
        'value'=>$model->id,  // value for input field          
        'id'=>$model->id .$model->name ,            // return value from autocomplete
        );      
}
echo CJSON::encode($arr);

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
function init(){
  if(isset($_POST['SESSION_ID'])){
    $session=Yii::app()->getSession();
    $session->close();
    $session->sessionID = $_POST['SESSION_ID'];
    $session->open();
  }
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
	Yii::app()->end();
}


	public function actionChangeClasses()
	{
	$this->renderPartial('ChangeClasses',array('grade_id'=>$_POST['grade_id']),false,true);
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
		$model=new Students;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
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

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
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
		$dataProvider=new CActiveDataProvider('Students');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Students('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Students']))
			$model->attributes=$_GET['Students'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Students the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Students::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Students $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='students-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

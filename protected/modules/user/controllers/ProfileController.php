<?php

class ProfileController extends Controller
{
// start photo 
		public function actionShowPhoto()
	{
	$my_id = Yii::app()->user->id ;
$photo = Photo::model()->findByAttributes(array('r_id'=>$my_id,'type_cg'=>'user_profile'));    
if ($photo)
{
	echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/user/'.$photo->title.'" alt="" style ="height:120px; margin:5px;" />', array("/photo/$photo->id"));
}

else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:120px; margin:5px;" /><?php } 
	
	}
	
	
	
function actionPhotoEdit()
{
      $decodeData = json_decode($_POST['PhotoB1254']);
      $queryString_id_url = $decodeData->adder_id; 
 

        $edit_photo = Photo::model()->findByAttributes(array('r_id'=>$queryString_id_url,'type_cg'=>'user_profile')) ;  
		if($edit_photo)
		{
        $edit_photo->type_cg = 'user_photo';
        $edit_photo->save();
		}
    
    $dir =dirname(Yii::app()->request->scriptFile).'\uploads\photos\user';
    $model=new Photo;
	$file=CUploadedFile::getInstance($model,'title');		
	$file->saveAs($dir.'/'.time().$file->getName());
	$model->title=time().$file->getName();
    $model->r_id=$queryString_id_url;
    $model->type_cg='user_profile';
    $model->save();
    $model->title->saveAs($dir.'/'.$model->title);
 
}



//   image   end

public $defaultAction = 'profile';
        public $layout='//layouts/column2';

        /**
         * @var CActiveRecord the currently loaded data model instance.
         */
        private $_model;
        /**
         * Shows a particular model.
         */
        public function actionProfile()
        {
                $model = $this->loadUser();
            $this->render('profile',array(
                'model'=>$model,
                        'profile'=>$model->profile,
            ));
        }


        /**
         * Updates a particular model.
         * If update is successful, the browser will be redirected to the 'view' page.
         */

        public function actionEdit()
        {
                $model = $this->loadUser();
                $profile=$model->profile;
                
                // ajax validator
                if(isset($_POST['ajax']) && $_POST['ajax']==='profile-form')
                {
                        echo UActiveForm::validate(array($model,$profile));
                        Yii::app()->end();
                }
                
                if(isset($_POST['User']))
                {
                        $model->attributes=$_POST['User'];
                if (isset($_POST['Profile'])){ $profile->attributes=$_POST['Profile'];}       
                        
                        if($model->validate()&&$profile->validate()) 
                        {
                                $model->save();
                                $profile->save();

                        
                        
                        
 
                        
                        
                        
                        
                        
                        
                                        Yii::app()->user->updateSession();
                                Yii::app()->user->setFlash('profileMessage',UserModule::t("Changes is saved."));
                                $this->redirect(array('/user/profile'));
                        } else $profile->validate();
                }

                $this->render('edit',array(
                        'model'=>$model,
                        'profile'=>$profile,
                ));
        }
        
        /**
         * Change password
         */
        public function actionChangepassword() {
                $model = new UserChangePassword;
                if (Yii::app()->user->id) {
                        
                        // ajax validator
                        if(isset($_POST['ajax']) && $_POST['ajax']==='changepassword-form')
                        {
                                echo UActiveForm::validate($model);
                                Yii::app()->end();
                        }
                        
                        if(isset($_POST['UserChangePassword'])) {
                                        $model->attributes=$_POST['UserChangePassword'];
                                        if($model->validate()) {
                                                $new_password = User::model()->notsafe()->findbyPk(Yii::app()->user->id);
                                                $new_password->password = UserModule::encrypting($model->password);
                                                $new_password->activkey=UserModule::encrypting(microtime().$model->password);
                                                $new_password->save();
                                                Yii::app()->user->setFlash('profileMessage',UserModule::t("New password is saved."));
                                                $this->redirect(array("profile"));
                                        }
                        }
                        $this->render('changepassword',array('model'=>$model));
            }
        }

        /**
         * Returns the data model based on the primary key given in the GET variable.
         * If the data model is not found, an HTTP exception will be raised.
         * @param integer the primary key value. Defaults to null, meaning using the 'id' GET variable
         */
        public function loadUser()
        {
                if($this->_model===null)
                {
                        if(Yii::app()->user->id)
                                $this->_model=Yii::app()->controller->module->user();
                        if($this->_model===null)
                                $this->redirect(Yii::app()->controller->module->loginUrl);
                }
                return $this->_model;
        }
}

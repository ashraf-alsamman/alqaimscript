<?php

class JsvformController extends Controller
{
	private $_formViews = array(
		1 => 'testForm1',
		2 => 'testForm2',
		3 => 'testForm3',
		4 => 'testForm4',
		5 => 'testForm5',
		6 => 'testForm6',
		7 => 'testForm7',
		8 => 'testForm8',
		9 => 'testForm9',
		10 => 'testForm10',
		12 => 'testForm12',
		13 => 'testForm13',
		14 => 'testForm14',
		15 => 'testForm15',
		16 => 'testForm16',
		17 => 'testForm17',
		18 => 'testForm18',
		19 => 'testForm19',
	);
	public $layout = 'jsvform';
	private $_viewId;
	public $defaultAction = "testForm";
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->actionTestForm();
	}
	/**
	 * Main form validation method, invoked for each form (i.e. each scenario)
	 */
	public function actionTestForm()
	{
		$testForm=new TestForm;
		$this->_viewId=(!isset($_GET['id']) ? 1 : $_GET['id']);
		
		// form1 is the 'default' scenario
		
		if( $this->_viewId != '1'){
			$scenario = 'form'.$this->_viewId;
			$testForm->setScenario($scenario);
			Yii::trace('model scenario set to : '.$scenario);
			$testForm->username0 = 'name';
			$testForm->password0 = 'password';
		}
		
		// view 6 contains 2 forms with 2 different scenario : form6 and form6b
		// To know which form was submited and so, which scenario applies, we must
		// use an input hidden field.
		
		if( $this->_viewId == '6'){
			$testForm->setScenario($_POST['clientScenario']);
			Yii::trace('model scenario set to : '.$_POST['clientScenario']);
		}
			
			
		$viewName=( !isset($this->_formViews[$this->_viewId]) ? $this->_formViews[1] : $this->_formViews[$this->_viewId]);
		$postedData = "";
		if(Yii::app()->request->isPostRequest)
		{
			// collect user input data
			if(isset($_POST['TestForm']))
				$testForm->setAttributes($_POST['TestForm']);
			
			if($testForm->validate())
				$postedData = $_POST['TestForm'];
			else{
				Yii::trace('server side validation failed');
				$postedData = null;
			}
		}

		if (Yii::app()->request->isAjaxRequest)
		{
			$this->renderPartial('_ajaxResponse',
				array(
					'postedData'=> $postedData,
					'model'		=> $testForm,
				)
			);			
		}
		else
		{
			$this->render($viewName,
				array(
					'model'		=> $testForm,
					'postedData'=> $postedData,
					'getData' 	=> $_GET,
					'navbar' 	=> $this->renderPartial('navbar',null,true)
				)
			);			
		}		
	}
	/**
	 * This method is called by form7 (scenario 7)  to perform remote validation
	 */
	public function actionRemoteValidate(){
		if(Yii::app()->request->isAjaxRequest) {
			if(isset($_GET['TestForm'])) {
				$testForm=new TestForm;
				$testForm->setAttributes($_GET['TestForm'],false);
				echo CJavaScript::jsonEncode($testForm->isUniqueMail());
			}
		}
	}

}
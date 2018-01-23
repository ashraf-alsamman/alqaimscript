<?php  include 'lang.php';  ?>
                                        </div>
                                    </form>
                                </div>
                            </div>


  <div class="da-panel">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/black/16/pencil.png">
                                        <?php echo Yii::t($language,'New Week') ?>
                                    </span>
                                </div>
     <!-----   	$data->from_date_ex = $_POST['from'];
	$data->to_date_ex = $_POST['to'];       --->                     
                                <div class="da-panel-content">
                                	<form class="da-form">
                                    	
                                	
  <!------------------ date start /--------------------->                   	
  <div class="da-panel">
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'timeline-form','htmlOptions'=>array('class'=>'da-form'))); ?>

<div class="da-form-inline"><?php	
 $model = new Timeline; ?><div class="da-form-row"> <label><?php echo Yii::t($language,'From') ?></label> 
<div class="da-form-item larg"><span class="formNote">&nbsp; </span>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'from_date_ex','value'=>'',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>'width:90px;'),)); ?>
</div>
<br>
 <label><?php echo Yii::t($language,'To') ?></label> 
<div class="da-form-item larg"><span class="formNote">&nbsp; </span>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'to_date_ex','value'=>'',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>'width:90px;'),)); ?>
</div>

</div><?php $this->endWidget(); ?>
  <!------------------date end    /--------------------->                              	
                                    	
                                    	<div class="da-form-row">
                                        	<label><?php echo Yii::t($language,'Title') ?></label>
                                            <div class="da-form-item large">
                                            	<input id="title" type="text" value="">
                                            </div>
                                        </div>

<div class="da-form-row">
<label><?php echo Yii::t($language,'Choose Status') ?></label>
<div class="da-form-item">
	<ul class="da-form-list">
    	<li><input type="radio" name="show_ex" value="1"  id ="show_ex" checked > <label><?php echo Yii::t($language,'Active') ?></label></li>
    	<li><input type="radio" name="show_ex" value="0" id ="show_ex"> <label><?php echo Yii::t($language,'Inactive') ?></label></li>
    </ul>
</div>
</div>

 
                                        <div class="da-button-row">
                                        	
<?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelNewTM'), array( 'type'=>'POST','update'=>"#NewTM",
'data'=>array(  
  'DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet
 ),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button red')); 
 ?>
 &nbsp;&nbsp;                                     	
<?php echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('NewTM'), array( 'type'=>'POST','update'=>".container",'data'=>array(  
  'title'=>'js:$(\'#title\').val()' ,
  'show_ex'=>'js:$(\'.da-form input[type=radio]:checked\').val()' ,
  'from_date_ex'=>'js:$(\'#from_date_ex\').val()' ,
  'to_date_ex'=>'js:$(\'#to_date_ex\').val()' ,
 
  'DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green')); 
 ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
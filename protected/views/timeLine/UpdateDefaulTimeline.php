<?php  

$data = DefaultLessonPlanner::model()->findByPk($DefaultLessonPlanner_id) ;   

  ?>
  <div class="da-panel" style="width:100%;">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/black/16/pencil.png">
                                        Update
                                    </span>
                                </div>
                                <div class="da-panel-content">
                                	<form class="da-form">
                                    	<div class="da-form-row">
                                        	<label>Title</label>
                                            <div class="da-form-item large">
                                            	<input id="title" type="text" value="<?php echo $data->title ; ?>">
                                            </div>
                                        </div>



 
                                        <div class="da-button-row">
                                        	
<?php echo CHtml::ajaxLink("Cancel",  array('Cancel'), array( 'type'=>'POST','update'=>".grid_3",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button red')); 
 ?>
 &nbsp;&nbsp;                                     	
<?php echo CHtml::ajaxLink("Save",  array('UpdateDefaultFromIndex'), array( 'type'=>'POST','update'=>".grid_3"
,'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
 'data'=>array(  
  'title'=>'js:$(\'#title\').val()' ,
  'DefaultLessonPlanner_id'=>$DefaultLessonPlanner_id
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green')); 
 ?>

                                        </div>
                                    </form>
                                </div>
                            </div>
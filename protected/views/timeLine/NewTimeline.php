<?php  include 'lang.php';  ?>
  <div class="da-panel">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/black/16/pencil.png">
                                        <?php echo Yii::t($language,'Details') ?>
                                    </span>
                                </div>
                                <div class="da-panel-content">
                                	<form class="da-form">
                                    	<div class="da-form-row">
                                        	<label><?php echo Yii::t($language,'Title') ?></label>
                                            <div class="da-form-item large">
                                            	<input id="title" type="text">
                                            </div>
                                        </div>



                                        <div class="da-button-row">


<?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('Cancel'), array( 'type'=>'POST','update'=>".grid_3",
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button red')); 
 ?>
 &nbsp;&nbsp;
 <?php echo CHtml::ajaxLink(Yii::t($language,"Add"),  array('NewTimeline'), array( 'type'=>'POST','update'=>".grid_3",'data'=>array(  
  'title'=>'js:$(\'#title\').val()' ,
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green')); 
 ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
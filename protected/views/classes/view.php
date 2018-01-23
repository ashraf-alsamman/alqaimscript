
<?php  include 'lang.php';  ?>
<h1><?php echo Yii::t($language,'Class') ?> <?php echo $model->title; ?></h1>

<div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                        <?php echo Yii::t($language,'Details') ?>
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>
<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,'Delete'),  array('DeleteM'), array( 'type'=>'POST',
'data'=>array('id'=>$model->id),
 'beforeSend' => 'function(){ Loading.show();}','complete' =>'js:function(){window.location="../Classes"}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want delete')." $model->title"
));	 
 ?></li>  
    <li><a href="Update/<?php echo $model->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>                                   
                                     <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
  <tr ><th><?php echo Yii::t($language,'Title') ?></th><td><?php echo $model->title ; ?></td> </tr>
    <tr ><th><?php echo Yii::t($language,'About') ?></th><td><?php echo $model->about ; ?></td> </tr>                                        	
      <tr ><th><?php echo Yii::t($language,'Create Time') ?></th><td><?php echo $model->create_time ; ?></td> </tr>                                       	
           <tr ><th><?php echo Yii::t($language,'Last Update') ?></th><td><?php echo $model->update_time ; ?></td> </tr>                                    

                                        </tbody>
                                    </table>
                                </div>
       
                            </div><!---details table--->
      <div id="Students">                     
<?php
$this->renderPartial('StudentsByClassId',array('class_id'=>$model->id));
?></div> 
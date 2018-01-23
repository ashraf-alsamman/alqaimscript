 
 <div id ="Messages"> 
 
 <?php 
 Yii::app()->clientScript->registerCoreScript('jquery.ui');
 $lastInsert =  Messages::model()->find(array('order'=>'id Desc'))->id; ?>
 <script type="text/javascript" >
$(document).ready(function(){
	$("#Messages_message").focus();
	var lastInsert =<?php echo $lastInsert;?> ;
 $("#view"+lastInsert).effect("highlight", {}, 5000);
		});
</script>
 
 
 <?php
 

$Messages =  Messages::model()->findAllBySql("select * from messages where (from_cg =  $my_id  AND to_cg = $get_id)  
 OR (from_cg =$get_id    AND to_cg = $my_id)   order by id DESC  limit 10") ;
 
foreach ($Messages as $data)
{
		if ($data->from_cg == Yii::app()->user->id )
		{
		?><div  id="view<?php echo $data->id?>"   class="view"   style ="background:#e6f5d4;border:2px solid #b1cf8e; "> <?php 
		echo "Me";
		}
		
		else
		{
		?><div id="view<?php echo $data->id?>"   class="view"   style ="background:#e1f1f5;border:2px solid #bcd2d7; "> <?php  
		$username = user::model()->findByPk($data->from_cg);if($username){ echo CHtml::link(CHtml::encode("$username->username"), array("/Challengers/$data->from_cg" ));  ;}else{echo 'user not found';}
		}
		
		?><br /><?php
		$photo = Photo::model()->findByAttributes(array('type_cg'=>'user_profile','r_id'=>$data->id));
		if($photo){ echo CHtml::link('<img src="'.Yii::app()->baseUrl.'/uploads/photos/games/'.$photo->title.'" alt="" style ="height:50px; margin:3px 9px 3px 0px;float:left;" />', array("/Challengers/$data->from_cg"));   }
		else { ?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt="" style ="height:50px; margin:3px 9px 3px 0px ;float:left;" /><br /><?php }
		
		?> <span   style =" color:#0f3a48;font-size:14px;float:left;" ><?php    echo CHtml::encode($data->message);   ?></span><br /><?php
		
		 	$this->widget('ext.timeago.JTimeAgo', array(
		    'selector' => ' .timeago',
		 
		 
		));
		 ?><abbr class="timeago" title="<?php echo $data->date_cg ;?>"  style ="float:right;color:#538bc4;"> </abbr>
		  
			<br />
		 
		
		</div> <?php //$(".demodaaaasd").scrollBottom(0);

}
?>
 


<br><br><br><br><br><br>
<div style ="
   position:fixed;
   left:0px;
   bottom:0px;
   height:145px;
   width:100%;
   background:#e8eff1;
   border:2px solid #bcd2d7;
    text-align: center;
 "><?php 

  $model = new Messages ;
echo $this->renderPartial('_form', array('model'=>$model,'get_id'=>$get_id)); ?>
</div>
</div><!-- Messages -->

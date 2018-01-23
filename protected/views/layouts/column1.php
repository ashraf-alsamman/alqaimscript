<?php  include 'lang.php';  ?>
 <?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div id="content"> <div id="da-content-area"> 
  <?php 
if(Yii::app()->errorHandler->error)
		{

	    }
 else {
     
 
 if (Yii::app()->controller->id=='site'):
$Staff_count = Staff::Model()->count();
$Teachers_count = Staff::Model()->count("teacher=:teacher", array("teacher" => 1));
$Students_count = Students::Model()->count();
$Parents_count = Parents::Model()->count();

  
  ?>
 
 
                	<!-- Content Area -->
 <div id="da-content-area">                        
    <div class="">
<?php  if ($language=='ar') { ?>
<ul class="da-circular-stat-wrap">
    <li class="da-circular-stat {fillColor: '#a6d037', value:<?php echo $Staff_count ?>,    maxValue: <?php echo $Staff_count+10 ?>, label: 'عدد الموظفون'}"></li>
    <li class="da-circular-stat {fillColor: '#ea799b', value: <?php echo $Teachers_count ?>, maxValue: <?php echo $Teachers_count+10 ?>, label: 'عدد المعلمون'}"></li>
    <li class="da-circular-stat {fillColor: '#fab241', value: <?php echo $Students_count ?>,    maxValue: <?php echo $Students_count+10 ?>, label: 'عدد الطلاب'}"></li>
    <li class="da-circular-stat {fillColor: '#61a5e4', value: <?php echo $Parents_count ?>,    maxValue: <?php echo $Parents_count+10 ?>,  label: 'عدد أولياء الأمور'}"></li>
</ul>
<?php } else { ?>
<ul class="da-circular-stat-wrap">
    <li class="da-circular-stat {fillColor: '#a6d037', value:<?php echo $Staff_count ?>,    maxValue: <?php echo $Staff_count+10 ?>, label: 'Staff Members'}"></li>
    <li class="da-circular-stat {fillColor: '#ea799b', value: <?php echo $Teachers_count ?>, maxValue: <?php echo $Teachers_count+10 ?>, label: 'Number Of Teachers'}"></li>
    <li class="da-circular-stat {fillColor: '#fab241', value: <?php echo $Students_count ?>,    maxValue: <?php echo $Students_count+10 ?>, label: 'Number Of Students'}"></li>
    <li class="da-circular-stat {fillColor: '#61a5e4', value: <?php echo $Parents_count ?>,    maxValue: <?php echo $Parents_count+10 ?>,  label: 'Number Of Parents'}"></li>
</ul>
<?php   } ?>
</div><div class="da-panel-widget"><h1><?php echo Yii::t($language,'Statement for June 2014') ?></h1><div id="da-ex-flot" style="height:225px;"></div></div>                       
 

		<?php  
	/*
	if (Yii::app()->user->id)
	{
				$my_log_id =  Users::model()->findByPk(Yii::app()->user->id) ;
		if ($my_log_id->id){$my_id  = $my_log_id->user_id;		
				
			if ($my_log_id->controller_title_ex =='Staff')
			{	
	  $this->renderPartial('/layouts/StaffTimeTable',array('teacher_id'=>$my_id));
			}	
			elseif($my_log_id->controller_title_ex =='Students')
			{
	//	$this->renderPartial('/layouts/StudentTimeTable',array('student_id'=>$my_id));	
			}
		 }		
	}         
	 */   
endif;
	 
	 
	 ?>                      
                            
                      
		
		
		   </div>
 </div> 
<?php    } ?> 
<?php    echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); 

?>
 
 


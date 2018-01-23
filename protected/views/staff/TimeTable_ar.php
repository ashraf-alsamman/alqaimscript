<?php  include 'lang.php';  

?>
<?php $active_time_table_id = TimeTables::model()->findByAttributes(array('status'=>1)) ; ?>
		
		
		<div class="">
                        	<div class="da-panel">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                    	<img alt="" src="images/icons/black/16/calendar_today_small.png">
                                        <?php echo Yii::t($language,'TimeTable') ?>
                                    </span>
                                    
                                </div>
                              
<div class="da-panel-content with-padding">
	<div id="da-ex-calendar" class="fc">
		<table style="width:100%" class="fc-header"><tbody>
			<tr><td class="fc-header-left">
<span class="fc-button fc-button-next fc-state-default fc-corner-right"></span>
</td>
<td class="fc-header-center"><span class="fc-header-title"><h2><?php  echo $active_time_table_id->title ;?></h2></span> 

					</td>
<td class="fc-header-right"><span class="fc-button fc-button-month fc-state-default fc-corner-left fc-state-active"></span></td></tr>
</tbody></table>
<div style="position: relative; min-height: 1px;" class="fc-content">
	<div style="position: relative; -moz-user-select: none;" class="fc-view fc-view-month fc-grid" unselectable="on">
		<table cellspacing="0" style="width:100%" class="fc-border-separate">
			<thead><tr class="fc-first fc-last">
<?php $limit3215 =  16 - $active_time_table_id->lesson_num ;
 $Lessons = Lessons::model()->findAllBySql("select * from lessons ORDER BY id desc limit $limit3215, $active_time_table_id->lesson_num  "); foreach ($Lessons as $Lesson) { ?>		
<th class="fc-sun fc-widget-header fc-first fc-last" style="width: 142px;">
<?php	echo $Lesson->title ;?></th> <?php } ?><th class="fc-sun fc-widget-header fc-first fc-last" style="width: 142px;">	</th> 

			</thead><tbody>
		
<?php $Days = Days::model()->findAllByAttributes(array('time_table_id'=>$active_time_table_id->id,'status'=>'on')); foreach ($Days as $Day) { ?>				
<tr class="fc-week1 fc-last">



<?php
 

foreach ($Lessons as $Lesson) { 
$TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$active_time_table_id->id,'day_id'=>$Day->id,
'lesson_id'=>$Lesson->id ,'teacher_id'=>$teacher_id)) ;
;?>
<td class="fc-sun fc-widget-content fc-day0 fc-first fc-sat fc-widget-content fc-day6 fc-last fc-other-month ">
<div style="height: 60px;"><div class="fc-day-number"><?php echo $num = 1;echo  ++$num; ?></div><div class="fc-day-content"><div style="position: relative; height: 18px;">&nbsp;
	<?php
	if ($TimeTable_class){
?><span style="font-weight: bold;font-size: 14px;"><?php 		echo  Classes::model()->findByPk($TimeTable_class->class_id)->title ;?></span><?php
$TeacherSubject = TeacherSubject::model()->findAllByAttributes(array('teacher_id'=>$teacher_id));
		if (count($TeacherSubject)>1){
			echo "<br>";
 ?><span style="margin-left: 7px;"><?php echo  Subjects::model()->findByPk($TimeTable_class->subject_id)->title ;?></span><?php
			
		}
	} 
		
		?></div></div></div>
</td>		
<?php } ?>	
<!----- day start------><td class="fc-sun fc-widget-content fc-day0 fc-first fc-other-month fc-last"><div style="height: 60px; background-color: #dddddd">
<div class="fc-day-content"><div style="position: relative; height: 18px;">&nbsp;<?php	echo  Yii::t($language,$Day->title); ?></div></div></div>
</td><!----- day end------>
</tr>

<?php } ?>
</tbody></table></div></div></div> </div></div> </div>

<?php 
$Days_counts = count( Days::model()->findAll());
$Lessons_counts = count( Lessons::model()->findAll());
$Classes_counts = count( ClassesM::model()->findAll());

$all_lesson_count=  $Days_counts*$Lessons_counts*$Classes_counts ;
$inserted_count = count(TimeTable::model()->findAllByAttributes(array('time_table_id'=>5))  );
$not_inserted_count =  $all_lesson_count - $inserted_count ;
?>
<ul class="header_square_item_ul">

<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #a6d037;">
<div  class="header_square_num" ><?php echo $inserted_count ; ?></div>
<div class = "header_square_text" >inserted</div>
</div><!-- header_square_item_1 -->
</li>

<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #ea799b;">
<div  class="header_square_num"><?php echo $not_inserted_count ; ?></div>
<div class = "header_square_text" >not inserted</div>
</div><!-- header_square_item_1 -->
</li>

<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #61a5e4;">
<div  class="header_square_num"><?php
echo  TimeTables::model()->findByAttributes(array('id'=>$time_table_id ))->just_inserted_count ;
?></div>
<div class = "header_square_text" >just inserted</div>
</div><!-- header_square_item_1 -->
</li>

<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #fab241;">
<div  class="header_square_num"><?php
echo  TimeTables::model()->findByAttributes(array('id'=>$time_table_id ))->just_removed_count ;
?></div>
<div class = "header_square_text" >just removed</div>
</div><!-- header_square_item_1 -->
</li>

<div class = "clear"></div>
</ul>
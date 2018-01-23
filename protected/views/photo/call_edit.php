<div class="form">


	<div class="row buttons" >
<?php
echo CHtml::ajaxSubmitButton(
'Edit information',
array('AddInfo_first_time'),
array('live' =>'false'),


array(
'type'=>'submit',
)
, array('id' => uniqid())
);
?> 
</div>

</div><!-- form -->
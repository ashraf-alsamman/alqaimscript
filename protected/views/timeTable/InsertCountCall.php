	<?php
	
	echo CHtml::ajaxLink("",  array('InsertCount'), array( 'type'=>'POST','data'=>array( 
	 ),'update'=>'#InsertCount','live' =>'false'),array('id' =>'InsertCountId' )); 
	 ?><script>$(document).ready(function(){$('#InsertCountId').click();});</script> 
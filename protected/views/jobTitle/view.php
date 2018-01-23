

<h1>View JobTitle <?php echo $model->title; ?></h1>

<div class="da-panel collapsible">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                        Detail
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>
<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img."Delete",  array('DeleteM'), array( 'type'=>'POST',
'data'=>array('id'=>$model->id),
 'beforeSend' => 'function(){ Loading.show();}','complete' =>'js:function(){window.location="../jobTitle"}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want delete $model->title"
));	 
 ?></li>  
    <li><a href="Update/<?php echo $model->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png">Update</a></li>                                   
    <li><a href="Create"><img alt="" src="/dashboard/images/icons/color/arrow_redo.png">Renew</a></li>
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
  <tr ><th>Title</th><td><?php echo $model->title ; ?></td> </tr>
    <tr ><th>About</th><td><?php echo $model->about ; ?></td> </tr>                                        	
      <tr ><th>Create time</th><td><?php echo $model->create_time ; ?></td> </tr>                                       	
           <tr ><th>Update time</th><td><?php echo $model->update_time ; ?></td> </tr>                                    

                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->



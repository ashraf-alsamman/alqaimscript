<?php  if ($language=='ar'){	?>
<div class="grid_1" style="position: fixed;top: 110px;left: 0px;width: 15%;">
<?php } else{
	?><div class="grid_1" style="position: fixed;top: 110px;right: 0px;width: 15%;"><?php }?>



 
                        	
                        	<div class="da-panel-widget">
                                <h2 style="color: #bfbfbf;margin-bottom: 5px;"><?php echo Yii::t($language,'shortcuts') ?></h2>
                                <ul class="da-summary-stat">
                                	<li>
                                    	<a href="/dashboard/Staff/Create">
                                            <span style="background-color:#a6d037;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                
                                                <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Add Staff Members') ?></span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="/dashboard/Students/Create">
                                            <span style="background-color:#61a5e4;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                 
                                                <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Add Students') ?></span>
                                            </span>
                                        </a>
                                    </li>
                                   
                                   <li>
                                    	<a href="/dashboard/Parents/Create">
                                            <span style="background-color:#ea799b;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                                                       
                                                <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Add Parents') ?></span>
	                                        </span>
                                        </a>
                                    </li>
                                	                                   

                                    <li>
                                       <a href="/dashboard/Timetables">
                                            <span style="background-color:#fab241;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                               
                                                <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Time Tables') ?></span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="/dashboard/lesoonplanner">
                                            <span style="background-color:#e15656;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                 
                                               <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Lesson Planner') ?></span>
                                            </span>
                                        </a>
                                    </li>



                                    <li>
                                    	<a href="Auth">
                                            <span style="background-color:#656565;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                
                                            <span class="label" style="margin-top: 15px;"><?php echo Yii::t($language,'Authentication') ?></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
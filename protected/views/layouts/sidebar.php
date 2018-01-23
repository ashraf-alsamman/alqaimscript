<?php $language =Yii::app()->language;?>
		            <!-- Sidebar Separator do not remove -->
                
      <?php  if ($language=='ar'){	?>
<div id="da-sidebar-separator" style="   
    bottom: 0;
    right: 214px;
    margin-left: 2%;
    position: absolute;
    top: 0;
    width: 50px;"></div><div id="da-sidebar" style="float: right">
<?php } else{
	?><div id="da-sidebar-separator"></div><div id="da-sidebar"><?php }?>
          
                
<div id="da-main-nav" class="da-button-container">
<ul>
<li <?php if ( Yii::app()->controller->id =='site'){ ?>class="active"<?php }?> > 
<a href="<?php echo Yii::app()->request->baseUrl; ?> ">
<span class="da-nav-icon">
 <img src="/dashboard/images/icons/black/32/home.png" alt="Icons" /> 
</span><?php echo Yii::t($language,'Dashboard') ?></a></li>
<!---------------------------------------------------------------------------->
 <li <?php if ( Yii::app()->controller->id =='staff'){ ?>class="active"<?php }?> > 
 <a href="">
<span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/users_2.png" alt="Icons" />
</span><?php echo Yii::t($language,'Staff') ?></a> <ul <?php if ( Yii::app()->controller->id !='staff'&&Yii::app()->controller->id!='jobTitle'){ ?>class="closed"<?php }?> >                             

<li <?php if(Yii::app()->controller->id=='staff'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >
<a href="/dashboard/Staff/"><?php echo Yii::t($language,'Staff') ?></a></li> 

<li <?php if(Yii::app()->controller->id=='staff'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >
<a href="/dashboard/Staff/Create"><?php echo Yii::t($language,'Add Staff Members') ?></a></li>

<li <?php if(Yii::app()->controller->id=='jobTitle'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >
<a href="/dashboard/JobTitle/"><?php echo Yii::t($language,'JobTitle') ?></a></li> 

<li <?php if(Yii::app()->controller->id=='jobTitle'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >
<a href="/dashboard/JobTitle/Create"><?php echo Yii::t($language,'Add JobTitle') ?></a></li>
</ul>
</li>
<!---------------------------------------------------------------------------->                         
<li <?php if ( Yii::app()->controller->id =='students'){ ?>class="active"<?php }?> > <a href=""><span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/users.png" alt="Icons" />
 </span><?php echo Yii::t($language,'Students') ?></a>
<ul <?php if ( Yii::app()->controller->id !='students'){ ?>class="closed"<?php }?> > 
<li <?php if(Yii::app()->controller->id=='students'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Students"><?php echo Yii::t($language,'Students') ?></a></li> 
<li <?php if(Yii::app()->controller->id=='students'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Students/Create"><?php echo Yii::t($language,'Add Students') ?></a></li>                	
</ul></li>
<!---------------------------------------------------------------------------->                         
<li <?php if ( Yii::app()->controller->id =='parents'){ ?>class="active"<?php }?> ><a href=""><span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/user_2.png" alt="Icons" />
 </span><?php echo Yii::t($language,'Parents') ?></a>
<ul <?php if ( Yii::app()->controller->id !='parents'){ ?>class="closed"<?php }?> > 
<li <?php if(Yii::app()->controller->id=='parents'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
	
<a href="/dashboard/Parents"><?php echo Yii::t($language,'Parents') ?></a></li> 
<li <?php if(Yii::app()->controller->id=='parents'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Parents/Create"><?php echo Yii::t($language,'Add Parents') ?></a></li>                	
</ul></li>
<!---------------------------------------------------------------------------->                           
<li <?php if ( Yii::app()->controller->id =='subjects'){ ?>class="active"<?php }?> ><a href=""><span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/single_document.png" alt="Icons" />
 </span><?php echo Yii::t($language,'Subjects') ?></a>
<ul <?php if ( Yii::app()->controller->id !='subjects'){ ?>class="closed"<?php }?> > 
<li <?php if(Yii::app()->controller->id=='subjects'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Subjects"><?php echo Yii::t($language,'Subjects') ?></a></li> 
    	
<li <?php if(Yii::app()->controller->id=='subjects'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Subjects/Create"><?php echo Yii::t($language,'Add Subjects') ?></a></li>                	
</ul></li>
<!---------------------------------------------------------------------------->
<li <?php if ( Yii::app()->controller->id =='grades'){ ?>class="active"<?php }?> ><a href=""><span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/upload.png" alt="Icons" />
 </span><?php echo Yii::t($language,'Grades') ?></a>
<ul <?php if ( Yii::app()->controller->id !='grades'){ ?>class="closed"<?php }?> > 
<li <?php if(Yii::app()->controller->id=='grades'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Grades"><?php echo Yii::t($language,'Grades') ?></a></li> 
    	
<li <?php if(Yii::app()->controller->id=='grades'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Grades/Create"><?php echo Yii::t($language,'Add Grades') ?></a></li>                	
</ul></li>
  
<!---------------------------------------------------------------------------->                            
<li <?php if ( Yii::app()->controller->id =='classes'){ ?>class="active"<?php }?> ><a href=""><span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/sticky_note.png" alt="Icons" />
 </span><?php echo Yii::t($language,'Classes') ?></a>
<ul <?php if ( Yii::app()->controller->id !='classes'){ ?>class="closed"<?php }?> > 

<li <?php if(Yii::app()->controller->id=='classes'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Classes"><?php echo Yii::t($language,'Classes') ?></a></li> 

<li <?php if(Yii::app()->controller->id=='classes'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/Classes/Create"><?php echo Yii::t($language,'Add Classes') ?></a> 
 </ul></li>
<!---------------------------------------------------------------------------->                           
                                              
<li <?php if ( Yii::app()->controller->id =='timeTables'||Yii::app()->controller->id =='timeTable'){ ?>class="active"<?php }?> ><a href=""> <span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/table_1.png" alt="Icons" />
</span><?php echo Yii::t($language,'Time Tables') ?></a>                             
<ul <?php if ( Yii::app()->controller->id !='timeTables'&&Yii::app()->controller->id !='timeTable'){ ?>class="closed"<?php }?> > 
<li <?php if(Yii::app()->controller->id=='timeTables'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/TimeTables"><?php echo Yii::t($language,'Time Tables') ?></a></li>

<li <?php if(Yii::app()->controller->id=='timeTables'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/TimeTables/Create"><?php echo Yii::t($language,'Add Timetables') ?></a></li>
</ul></li>
<!----------------------------------------------------------------------------> 
<li <?php if ( Yii::app()->controller->id =='lessonPlanner' ){ ?>class="active"<?php }?> ><a href=""> <span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/word_document.png" alt="Icons" />
</span><?php echo Yii::t($language,'Lesson Planner') ?></a>                             
 <?php if ( Yii::app()->controller->id =='lessonPlanner'||Yii::app()->controller->id =='timeLine' )
{?><ul ><?php }else {?><ul class="closed"><?php }?> 

<li <?php if(Yii::app()->controller->id=='lessonPlanner'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >  	
<a href="/dashboard/LessonPlanner"><?php echo Yii::t($language,'Lesson Planner') ?></a></li>

<li <?php if(Yii::app()->controller->id=='lessonPlanner'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >
<a href="/dashboard/LessonPlanner/Create"><?php echo Yii::t($language,'New Lesson Planner') ?></a></li>

<li <?php if(Yii::app()->controller->id=='timeLine'&&Yii::app()->controller->action->id=='index'){ ?>class="selected"<?php }?> >
<a href="/dashboard/TimeLine"><?php echo Yii::t($language,'TimeLine') ?></a></li>

<li <?php if(Yii::app()->controller->id=='timeLine'&&Yii::app()->controller->action->id=='Create'){ ?>class="selected"<?php }?> >
<a href="/dashboard/TimeLine/Create"><?php echo Yii::t($language,'Add TimeLine') ?></a></li>

</ul></li>
<!----------------------------------------------------------------------------> 
<!----------------------------------------------------------------------------  
<li <?php if ( Yii::app()->controller->id =='authzzzz'){ ?>class="active"<?php }?> > 
<a href="">
<span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/documents_1.png" alt="Icons" />
</span><?php echo Yii::t($language,'HomeWork') ?></a></li>                 
<!---------------------------------------------------------------------------->  
<!---------------------------------------------------------------------------   
<li <?php if ( Yii::app()->controller->id =='authaaaaa'){ ?>class="active"<?php }?> > 
<a href="">
<span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/record.png" alt="Icons" />
</span><?php echo Yii::t($language,'Exams & Results') ?></a></li>                 
<!---------------------------------------------------------------------------->  
<li <?php if ( Yii::app()->controller->id =='auth'){ ?>class="active"<?php }?> > 
<a href="<?php echo Yii::app()->request->baseUrl;?>/Auth">
<span class="da-nav-icon">
<img src="/dashboard/images/icons/black/32/key.png" alt="Icons" />
</span><?php echo Yii::t($language,'Authentication') ?></a></li>                 
<!---------------------------------------------------------------------------->  
<!----------------------------------------------------------------------------   
<li <?php if ( Yii::app()->controller->id =='settings'){ ?>class="active"<?php }?> > 
<a href="">
 
<span class="da-nav-icon">
 <img src="/dashboard/images/icons/black/32/cog_4.png" alt="Icons" /> 
</span><?php echo Yii::t($language,'Settings') ?></a></li>                 
<!---------------------------------------------------------------------------->                 
</ul></div> </div>
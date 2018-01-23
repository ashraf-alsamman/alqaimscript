
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $b_bath = '/dashboard/' ; ?>
<!-- Viewport metatags -->
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- iOS webapp metatags -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!-- iOS webapp icons -->
<link rel="apple-touch-icon-precomposed" href="images/touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/touch-icon-retina.png" />

<!-- CSS Reset -->
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/alqaim.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/reset.css" media="screen" />
<!--  Fluid Grid System -->
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/fluid.css" media="screen" />
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/dandelion.theme.css" media="screen" />
<!--  Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/dandelion.css" media="screen" />
<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/demo.css" media="screen" />

<!-- jQuery JavaScript File -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery-1.7.2.min.js"></script>

<!-- jQuery-UI JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>jui/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>jui/js/jquery.ui.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>jui/js/jquery.ui.touch-punch.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>jui/css/jquery.ui.all.css" media="screen" />

<!-- Plugin Files -->

<!-- FileInput Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.fileinput.js"></script>
<!-- Placeholder Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.placeholder.js"></script>
<!-- Mousewheel Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.mousewheel.min.js"></script>
<!-- Scrollbar Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.tinyscrollbar.min.js"></script>
<!-- Tooltips Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/tipsy/jquery.tipsy-min.js"></script>
<link rel="stylesheet" href="plugins/tipsy/tipsy.css" />

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/validate/jquery.validate.js"></script>

<!-- Statistic Plugin JavaScript Files (requires metadata and excanvas for IE) -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.metadata.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/plugins/dandelion.circularstat.min.js"></script>
<?php 
if (Yii::app()->controller->id =='site'){?>
	 <script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/flot/jquery.flot.min.js"></script>
	<?php } ?>
<!-- Flot Plugin 
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/flot/jquery.flot.min.js"></script>

<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/flot/jquery.flot.resize.min.js"></script>
-->
<!-- Wizard Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/plugins/dandelion.wizard.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/form/jquery.form.js"></script>

<!-- Fullcalendar Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/fullcalendar/gcal.js"></script>
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.print.css" media="print" />

<?php if (Yii::app()->language=='ar')
{
?><!-- DataTables Plugin --><script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min_ar.js"></script><?php 
}
else {
?><!-- DataTables Plugin --><script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min.js"></script><?php 
}
 ?>
<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.tables.js"></script>


<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.dashboard.js"></script>

<!-- jGrowl Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/jgrowl/jquery.jgrowl.min.js"></script>
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/jgrowl/jquery.jgrowl.css" media="screen" />

<!-- Core JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/dandelion.core.js"></script>

<!-- Customizer JavaScript File (remove if not needed) -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/dandelion.customizer.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.form.js"></script>

<!-- iButton Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/ibutton/lib/jquery.ibutton.min.js"></script>
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/ibutton/css/jquery.ibutton-giva-original.css" media="screen" />



<title>ALQAIM - <?php if (Yii::app()->controller->id =='site'){echo 'Home';}else echo Yii::app()->controller->id ;  ?></title>

</head>

<body>
	<?php  include 'lang.php';  ?>
<?php if ($language=='ar'): ?>
<style>
	/* (3) Body
================================================== */
@font-face {
    font-family: "GE SS";
    font-weight: normal;
    src: local("âک؛"), url("/dashboard/fonts/ge-ss-med.ttf") format("truetype");
}
@font-face {
    font-family: "GE SS";
    font-weight: bold;
    src: local("âک؛"), url("/dashboard/fonts/ge-ss-bold.ttf") format("truetype");
}

body
{
	background-color:#f2f2f2;
	color:#444444;
	font-family: 'GE SS','Simplified Arabic';
	font-size: 13px;
	direction: rtl;
	text-align:right;
	
}

	.da-form .da-form-row label, 
	.da-form .da-form-inline .da-form-row label, 
	.da-form .da-form-row.da-form-inline label
	{
		float:right;
		width:120px;
		padding:6px 0;
	}
	
	
	
	
/* (4) Main Wrapper
================================================== */
</style>
<?php endif ; ?>













<?php if (Yii::app()->controller->id =='login'||Yii::app()->controller->id =='recovery'){
?>	<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/login.css" media="screen" />
<!-- Core JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/dandelion.login.js"></script>
<?php
	  echo $content;	}else{?>
<?php if(Yii::app()->user->id==0){ Yii::app()->request->redirect('/dashboard/user/login');}  ?>
<style>
	#da-ex-datatable-numberpaging_info{display:none}
</style>
<?php $this->widget('ext.widgets.loading.LoadingWidget'); ?>
  


	<!-- Dandelion Customizer (remove if not needed) -->
    <div id="da-customizer" style="direction: ltr">
    	<div id="da-customizer-content">
        	<ul>
 
 <li><span class="da-customizer-title" style="margin-left: 10px;color:#5f5f5f;float: left">Change the language</span>
 <?php $Users =  Users::model()->findByPk(Yii::app()->user->id) ;
 if ($Users)
 {
 	Yii::app()->setLanguage('en');
 }

$Languages = Languages::model()->findAll();

echo CHtml::dropdownList('ChangeLang','title',CHtml::listData($Languages, 'title', 'title'),  
array(
'options' => array(Yii::app()->language=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('/Site/ChangeLang'), 'type' => 'POST','update'=>"body",                              
'data'=>array('lang'=>'js:$(this).val()' ),
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ location.reload();}',


   )),                          
  'class'=>'teacher green_select' )  );	
 
 
 

 ?><div id="ChangeLang"></div> 
               
               
               
               
                </li>

            </ul>
            <div id="da-customizer-button">
            	<a href="/dashboard/"  class="da-button red" style="margin-left: 32px;float: left"> A L Q A I M </a>
            </div>
        </div>
        <span id="da-customizer-pulldown"></span>
    </div>

	<!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
	<div id="da-wrapper" class="fluid">
    
        <!-- Header -->
        <div id="da-header">
        
<!------------------------------------------------------------------------------>
 <?php include 'header.php';	?>
<!------------------------------------------------------------------------------>           
            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">
                <!---
                	<div id="da-search">
                    	<form>
                        	<input type="text" placeholder="Search..." />
                        </form>
                    </div>-->
                	
                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <ul>
        <li class="active"><a href=""><!-- <img src="images/icons/black/32/pacman.png" alt="Icons" />--><?php if (Yii::app()->controller->id =='site')
        {   echo Yii::t(Yii::app()->language,'Home');}
        else{      echo Yii::t(Yii::app()->language,Yii::app()->controller->id); }  ?></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Content -->
        <div id="da-content">
            
            <!-- Container -->
            <div class="da-container clearfix">
                

                
                	<!-- Content Area -->
<div id="da-content-area"> 
	

               
                <?php   ?>

 <?php  if ($language=='ar'){include'shortcuts.php';}else{include 'sidebar.php';}?>               
                <!-- Main Content Wrapper -->
                <div id="da-content-wrap"  >                       
<!----------------------------------------------------------------------------------->                  	
<div class="grid_3"><?php   echo $content;	?></div>
<!----------------------------------------------------------------------------------->
<?php  if ($language=='ar'){include 'sidebar.php';}else{include'shortcuts.php';}?>
<!----------------------------------------------------------------------------------->
</div>
        
</div>
 <?php  } ?>       
    </div>
        <!-- Footer -->
     <?php  include 'lang.php';  ?>
        <div id="da-footer">
        	<div class="da-container clearfix">
            	<p><?php echo Yii::t($language,'ALQAIM 2013 All Rights Reserved.') ?>
            </div>
        </div>    
</body>
</html>

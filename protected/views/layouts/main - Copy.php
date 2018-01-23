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
<link rel="stylesheet" type="text/css" href="<?php echo $b_bath ; ?>css/madrasati_1.css" media="screen" />

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
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/tipsy/tipsy.css" />


<!-- Statistic Plugin JavaScript Files (requires metadata and excanvas for IE) -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/jquery.metadata.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->


<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/validate/jquery.validate.js"></script>


<!-- Fullcalendar Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/fullcalendar/gcal.js"></script>
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/fullcalendar/fullcalendar.print.css" media="print" />


<!-- DataTables Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.tables.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.calendar.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.charts.js"></script>
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/core/plugins/dandelion.circularstat.min.js"></script>

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

<!-- Flot Plugin 
 <script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/flot/jquery.flot.min.js"></script>
  -->
<!-- iButton Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/ibutton/lib/jquery.ibutton.min.js"></script>
<link rel="stylesheet" href="<?php echo $b_bath ; ?>plugins/ibutton/css/jquery.ibutton-giva-original.css" media="screen" />

<title>ALQAIM - <?php if (Yii::app()->controller->id =='site'){echo 'Home';}else echo Yii::app()->controller->id ;  ?></title>

</head>

<body>
<style>
	#da-ex-datatable-numberpaging_info{display:none}
</style>
<?php $this->widget('ext.widgets.loading.LoadingWidget'); ?>
  


	<!-- Dandelion Customizer (remove if not needed) -->
    <div id="da-customizer">
    	<div id="da-customizer-content">
        	<ul>
            	<li>
                	<span class="da-customizer-title">Background Pattern</span>
                    <span id="da-customizer-body-bg"></span>
                </li>
                <li>
                	<span>Header Pattern</span>
                    <span id="da-customizer-header-bg"></span>
                </li>
                <li>
                	<span>
                    	Layout
                        <span title="This functionality can only provide you the CSS for background and header patterns. Instructions to switch between fixed or fluid layout can be found in the documentation." class="da-tooltip-w da-customizer-tooltip">
                    		[?]
                        </span>
                    </span>
                    <ul id="da-customizer-layouts" class="clearfix">
                    	<li>
                        	<input type="radio" id="da-customizer-fluid" name="da-layout" checked="checked" />
                        	<label for="da-customizer-fluid">Fluid</label>
                        </li>
                    	<li>
                        	<input type="radio" id="da-customizer-fixed" name="da-layout" />
                            <label for="da-customizer-fixed">Fixed</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <div id="da-customizer-button">
            	<button class="da-button red">Get CSS</button>
            </div>
        </div>
        <span id="da-customizer-pulldown"></span>
    </div>

	<!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
	<div id="da-wrapper" class="fluid">
    
        <!-- Header -->
        <div id="da-header">
        
        	<div id="da-header-top">
                
                <!-- Container -->
                <div class="da-container clearfix">
                    
                    <!-- Logo Container. All images put here will be vertically centere -->
                    <div id="da-logo-wrap">
                        <div id="da-logo">
                            <div id="da-logo-img">
                                <a href="#">
         <!-- <img src="images/icons/black/32/pacman.png" alt="Icons" />-->

                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Header Toolbar Menu -->
                    <div id="da-header-toolbar" class="clearfix">
                        <div id="da-user-profile">
                            <div id="da-user-avatar">
                                <!-- <img src="images/icons/black/32/pacman.png" alt="Icons" />-->
                            </div>
                            <div id="da-user-info">
                                John Doe
                                <span class="da-user-title">Creative Director</span>
                            </div>
                            <ul class="da-header-dropdown">
                                <li class="da-dropdown-caret">
                                    <span class="caret-outer"></span>
                                    <span class="caret-inner"></span>
                                </li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="#">Dashboard</a></li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#" id="cp1">Change Password</a></li>
                            </ul>
                        </div>
                        <div id="da-header-button-container">
                        	<ul>
                            	<li class="da-header-button notif">
                                	<span class="da-button-count">32</span>
                                	<a href="#">Notifications</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                        	<span class="da-dropdown-sub-title">Notifications</span>
                                        	<ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                            	View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class="da-header-button message">
                                	<span class="da-button-count">5</span>
                                	<a href="#">Messages</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                        	<span class="da-dropdown-sub-title">Messages</span>
                                        	<ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                            	View all messages
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class="da-header-button logout">
                                	<a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                    
                </div>
            </div>
            
            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">
                
                	<div id="da-search">
                    	<form>
                        	<input type="text" placeholder="Search..." />
                        </form>
                    </div>
                	
                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <ul>
                            <li class="active"><a href="#"><!-- <img src="images/icons/black/32/pacman.png" alt="Icons" />--><?php if (Yii::app()->controller->id =='site'){echo 'Home';}else echo Yii::app()->controller->id ;  ?></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    
        <!-- Content -->
        <div id="da-content">
            
            <!-- Container -->
            <div class="da-container clearfix">
                
	            <!-- Sidebar Separator do not remove -->
                <div id="da-sidebar-separator"></div>
                <?php  include 'sidebar.php';  ?>

                
                <!-- Main Content Wrapper -->
                <div id="da-content-wrap" class="clearfix">
                
                	<!-- Content Area -->
                	<div id="da-content-area">                        
                    	
<div class="grid_3">
            	
                        	<?php  echo $content;	?>
 </div>                        <!----------------------------------------------------------------------------------->

<div class="grid_1" style="position: fixed;top: 110px;right: 0px;width: 20%;">
                        	<div class="da-panel-widget">
                                <h1>shortcuts</h1>
                                <ul class="da-summary-stat">
                                	<li>
                                    	<a href="../LessonPlanner">
                                            <span style="background-color:#a6d037;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">`</span>
                                                <span class="label">Manage Active</span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="../LessonPlanner/create">
                                            <span style="background-color:#61a5e4;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">`</span>
                                                <span class="label">New Lesson Planner</span>
                                            </span>
                                        </a>
                                    </li>
                                   
                                   <li>
                                    	<a href="#">
                                            <span style="background-color:#ea799b;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">286</span>                                        
                                                <span class="label">Manage Timeline</span>
	                                        </span>
                                        </a>
                                    </li>
                                	                                   

                                    <li>
                                        <a href="#">
                                            <span style="background-color:#fab241;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value down">61</span>
                                                <span class="label">New Timeline</span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="#">
                                            <span style="background-color:#e15656;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">211</span>
                                                <span class="label">Packages Distributed</span>
                                            </span>
                                        </a>
                                    </li>



                                    <li>
                                    	<a href="#">
                                            <span style="background-color:#656565;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">266</span>
                                                <span class="label">Customers Satisfied</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


<!----------------------------------------------------------------------------------->
                        	
                                 
                           
                        
                        
                        
                      

                        
                          
            
            
        </div>
        

        
    </div></div>
        <!-- Footer -->
        <div id="da-footer">
        	<div class="da-container clearfix">
            	<p>Powered By ALQAIM 2013 All Rights Reserved.
            </div>
        </div>    
</body>
</html>

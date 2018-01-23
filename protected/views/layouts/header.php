<?php  include 'lang.php';  ?>
<script language=""JavaScript" ">
function confirmGo(m,u) {
if ( confirm(m) ) {
window.location = u;
}
}
</script>
 

        
        
        	<div id="da-header-top">
                
                <!-- Container -->
                <div class="da-container clearfix">
                    
                    <!-- Logo Container. All images put here will be vertically centere -->
                    <div id="da-logo-wrap">
                        <div id="da-logo">
                            <div id="da-logo-img">
                                <a href="#">
         <img src="/dashboard/images/logo.png" alt="Icons" />

                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Header Toolbar Menu -->
                    <div id="da-header-toolbar" class="clearfix">
                        <div id="da-user-profile">
                            <div id="da-user-avatar">
                                 <img src="/dashboard/images/no_photo.jpg" alt="Icons" />  
                            </div>
                            <div id="da-user-info">
                                Ashraf Muhammed
                                <span class="da-user-title">Admin</span>
                            </div>
                            <ul class="da-header-dropdown">
                                <li class="da-dropdown-caret">
                                    <span class="caret-outer"></span>
                                    <span class="caret-inner"></span>
                                </li>
                   
                    <li class="da-dropdown-divider"></li>
                    <li><a href="/dashboard"><?php echo Yii::t($language,'Home') ?></a></li>
                    <li class="da-dropdown-divider"></li>
                    <li><a href="/dashboard/user/profile/"><?php echo Yii::t($language,'Profile') ?></a></li>
                    <li><a href="/dashboard/user/profile/edit"><?php echo Yii::t($language,'Edit Profile') ?></a></li>
                    <li><a href="/dashboard/user/profile/ChangePassword" id="cp1"><?php echo Yii::t($language,'Change Password') ?></a></li>
                </ul>
                        </div>
                        <div id="da-header-button-container">
                        	<ul>

                            	<li class="da-header-button message">
                                	<span class="da-button-count">5</span>
                                	<a href="#"><?php echo Yii::t($language,'Messages') ?></a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                        	<span class="da-dropdown-sub-title"><?php echo Yii::t($language,'Messages') ?></span>
          
     <ul class="da-dropdown-sub">     
  <?php  
  $my_id = Yii::app()->user->id;
  $Mysql =  MailboxMessage2::model()->findAllBySql("select * from mailbox_message where recipient_id =  $my_id limit 5 ") ;
  foreach ($Mysql as $key ) :
  ?>                              
  	
  <li class="unread">
<a href="/dashboard/mailbox/message/view/id/<?php echo $key->message_id ;?>"><span class="message"><?php echo $key->text ;?>
</span><span class="time"><?php echo $key->created ;?></span></a> </li>
                                               
<?php endforeach ?>
                                                <!---
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
                                               --->

                                            </ul>
                                            <a class="da-dropdown-sub-footer" href="/dashboard/mailbox">
                                            	<?php echo Yii::t($language,'View all messages') ?>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class="da-header-button logout">
<?php    if ($language=='ar')
{
?><a href="javascript:confirmGo('هل انت متأكد انك تريد الخروج ؟','/dashboard/user/logout')"></a> <?php 
}                      	 
else
{
?><a href="javascript:confirmGo('Are you sure you want to logout?','/dashboard/user/logout')"></a> <?php 
	
} ?>
                                 </li>
                            </ul>
                        </div>
                    </div>
                                    
                </div>
            </div>
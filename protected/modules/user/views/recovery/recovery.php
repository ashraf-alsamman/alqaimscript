
<div class="er_login">
<?php echo CHtml::errorSummary($form); ?>
</div>
<div id="da-login">
	<div id="da-login-box-wrapper">

    	<div id="da-login-top-shadow">
        </div>
    	<div id="da-login-box">

        	<div id="da-login-box-header">
            	<h1>RESTORE</h1>
            </div>
            <div id="da-login-box-content">
            	<form method="post" action="/dashboard/user/recovery/recovery" id="da-login-form">
                	<div >
                    	<div class="da-login-input">
            		<?php echo CHtml::activeTextField($form,'login_or_email', array('id'=>'da-login-username')) ?>
		<p class="hint"><?php echo UserModule::t("Please enter your login or email addres."); ?></p>                        </div>
 
                    </div>
                    <div id="da-login-button">
                     	<input type="submit" value="RESTORE" name="yt0" id="da-login-submit" style=" background-color: #ffffff;
    background-image: -moz-linear-gradient(center bottom , #a3f178 0%, #4e9d22 100%);
    border: 1px solid #346b16;">
                
                    </div>
                </form>
          
            </div>
            <div id="da-login-box-footer">
	

	<div id="da-login-tape"></div> 

            </div>
        </div>
    	<div id="da-login-bottom-shadow"> </div>
       
    </div><!-----da-login-box-wrapper----->


<?php echo CHtml::endForm(); ?>



<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>
</div><!-----da-login----->



<style>
.er_login .errorSummary{
	text-align: center;font-size: 14px;
	background: #ffffff;
	height:100px ;margin-bottom: -100px;
	opacity:0.6;
filter:alpha(opacity=60); /* For IE8 and earlier */
 -moz-box-shadow:    3px 3px 5px 6px #ccc;
  -webkit-box-shadow: 3px 3px 5px 6px #ccc;
  box-shadow:         3px 3px 5px 6px #ccc;
}
	
</style>
 
 

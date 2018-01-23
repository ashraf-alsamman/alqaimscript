
<div class="er_login">
<?php echo CHtml::errorSummary($model); 
 echo Yii::app()->user->id ;
?>
</div>
<div id="da-login">
	<div id="da-login-box-wrapper">

    	<div id="da-login-top-shadow">
        </div>
    	<div id="da-login-box">

        	<div id="da-login-box-header">
            	<h1>Login</h1>
            </div>
            <div id="da-login-box-content">
            	<form method="post" action="/dashboard/user/login" id="da-login-form">
                	<div >
                    	<div class="da-login-input">
		<?php echo CHtml::activeLabelEx($model,'username'); ?>
		<?php echo CHtml::activeTextField($model,'username', array('id'=>'da-login-username')) ?>                        </div>
                    	<div class="da-login-input">
	    <?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password', array('id'=>'da-login-password')) ?>
                        </div>
                    </div>
                    <div id="da-login-button">
                     	<input type="submit" value="Login" name="yt0" id="da-login-submit">
                
                    </div>
                </form>
            </div>
            <div id="da-login-box-footer">
	
	<div class="row">
		<p class="hint">
	<!----<span style=" cursor: default;pointer-events: none;"><?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?></span>---->
    	 <?php echo CHtml::link(UserModule::t("Lost Password ?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
	<div id="da-login-tape"></div>
	</div>
	
	<div class="row rememberMe">
<input id="UserLogin_rememberMe" type="checkbox" value="1" name="UserLogin[rememberMe]">
<label for="UserLogin_rememberMe">Remember me next time</label>
	</div>
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






<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>
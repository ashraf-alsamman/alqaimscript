<div style="background-color:#eee; width:100%; text-align:right; font-size:10px;padding:3px;">
Yii Framework : <strong><?php echo Yii::getVersion(); ?></strong><br/>
jformvalidate : <strong>1.09</strong>
</div>
<style type="text/css">
	div.yiiForm input.invalid,
	div.yiiForm textarea.invalid,
	div.yiiForm select.invalid
	{
		background: #FEE;
		border-color: #C00;
	}
	div.yiiForm input.invalid,
	div.yiiForm label.invalid,
	div.yiiForm span.invalid
	{
		color: #C00;
	}
	div.navbar a:hover {
		background-color:#ddd;
	}
</style>
<div class="navbar">
[<?php 	echo CHtml::link( '<strong>form3</strong>: Checkbox',array('jsvform/TestForm','id'=>3) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form4</strong>: List Element',array('jsvform/TestForm','id'=>4) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form5</strong>: Another List',array('jsvform/TestForm','id'=>5) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form6</strong>: Multi-Form',array('jsvform/TestForm','id'=>6) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form7</strong>: Ajax Validation',array('jsvform/TestForm','id'=>7) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form8</strong>: Compare&nbsp;Validator',array('jsvform/TestForm','id'=>8) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form9</strong>: Numerical Validator',array('jsvform/TestForm','id'=>9) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form10</strong>: Optional Fields',array('jsvform/TestForm','id'=>10) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form12</strong>: Custom Validator',array('jsvform/TestForm','id'=>12) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form13</strong>: Ajax Submit',array('jsvform/TestForm','id'=>13) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form14</strong>: Ajax&nbsp;Submit&nbsp;2',array('jsvform/TestForm','id'=>14) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form15</strong>: Match validator',array('jsvform/TestForm','id'=>15) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form16</strong>: Morecheckbox',array('jsvform/TestForm','id'=>16) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form17</strong>: submitHandler',array('jsvform/TestForm','id'=>17) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form18</strong>: multiple',array('jsvform/TestForm','id'=>18) ); ?>]&nbsp;
[<?php 	echo CHtml::link( '<strong>form19</strong>: required',array('jsvform/TestForm','id'=>19) ); ?>]&nbsp;
</div>


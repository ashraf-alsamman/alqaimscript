<?php  include 'lang.php';  ?>
<div class="mailbox-empty">
<?php echo Yii::t($language,'You have no messages in your') ?>

<?php echo $this->getAction()->getId(); ?> <?php echo Yii::t($language,'folder') ?>.</div>
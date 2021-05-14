<?php
header('Content-Type: text/html; charset=utf-8');
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use \yii\helpers\Url;
use app\models\Agency;
use yii\widgets\ActiveForm;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $this->params['description'];?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="<?php echo(\Yii::$app->request->BaseUrl) ?>/js/bootstrap.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->params['name']) ?></title>
	<link href="<?php echo(\Yii::$app->request->BaseUrl) ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo(\Yii::$app->request->BaseUrl) ?>/css/admin.css" rel="stylesheet" media="screen">
	<!--<script src="./js/freelancer.js"></script>-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php if($this->params['page_translit'] != "login"){?>
	
	<?php $this->beginContent('@app/views/layouts/adminHeader.php'); ?>
	<?php $this->endContent(); ?>
<?php } ?>
<?php

//echo "<script>console.log('neravno' );localStorage.setItem('referer', '');</script>";
  ?><script>
			var httpReferer = localStorage.getItem("referer");
	
		
console.log('referer' + httpReferer);</script>
<div class="wrap margin-top">
	<?php 
	//include 'breadcrumbs.php'
	?>
    
		
        <?= $content ?>

</div>
<?php 
//$this->beginContent('@app/views/layouts/footer.php'); 
?>
    <!-- You may need to put some content here -->
<?php //$this->endContent(); 
?>
<?php $this->endBody() 
?>
</body>
</html>
<?php $this->endPage() ?>


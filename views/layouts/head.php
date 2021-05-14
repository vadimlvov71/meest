<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use \yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
	<script src="<?php echo \Yii::$app->params['domen'] ?>/web/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo \Yii::$app->params['domen'] ?>/web/js/bootstrap.min.js"></script>
	
    <?= Html::csrfMetaTags() ?>
    <title><?php //echo $this->params['title'];?></title>
	<meta name="description" content="<?php //echo $this->params['description'];?>">
	<link href="<?php echo \Yii::$app->params['domen'] ?>/web/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo \Yii::$app->params['domen'] ?>/web/css/style.css?ver=<?php echo rand() ?>" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo \Yii::$app->params['domen'] ?>/web/css/font-awesome.min.css">

	<link rel="shortcut icon" href="<?php echo(\Yii::$app->request->BaseUrl) ?>/img/favicon.ico" type="image/x-icon">
	
	<!--<script src="./js/freelancer.js"></script>-->
    <?php // $this->head() ?>
</head>

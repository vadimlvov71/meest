<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
              
				
                <?= Html::a('Parcels', ['parcel/index'], ['class' => 'btn btn-success']) ?>

                
            </div>
            <div class="col-lg-4">
               client (account)
            </div>
            <div class="col-lg-4">
               
            </div>
        </div>

    </div>
</div>

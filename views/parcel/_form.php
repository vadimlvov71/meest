<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Parcel */
/* @var $form yii\widgets\ActiveForm */

	$items = [
        '0' => 'Активный',
        '1' => 'Отключен',
        '2'=>'Удален'
    ];
    $params = [
        'prompt' => 'Выберите статус...'
    ];

?>
<div class="country-update">
	<div class="country-form">
<!--<div class="parcel-form">-->

    <?php $form = ActiveForm::begin([
    
    'options' => [
			'data-pjax' => true,
				'id' => 'create-product-form',
				'enableAjaxValidation' => true,
		]
               
    //'id' => 'parcel-form',
   // 'enableAjaxValidation' => true,
	]); ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
	<?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'category_id')->dropDownList($arrayCategory, $params)?>
    

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['id' => 'submit-button', 'class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
	</div>
</div>

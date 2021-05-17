<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ParcelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parcels';
$this->params['breadcrumbs'][] = $this->title;
 $params = [
        'prompt' => 'Выберите статус...'
    ];
   // $model = $dataProvider;
?>
<div class="parcel-index">

    <h1><?= Html::encode($this->title) ?></h1>

   
	<?php
	//echo Html::a('<span class="glyphicon glyphicon-bell" aria-hidden="true"></span>', ['#'],[
	echo Html::button('create', ['value'=> Url::to(['parcel/create']), 
					'class' => 'btn-update',
					'data-pjax' => '0',]);
				
	?>
	<?php Pjax::begin(['id' => 'my_pjax']); ?>
	
	<?php
		$this->registerJs("
			$(document).ready(function(){
				$(function(){
					$('button.btn-update').click(function(){
						$('#modal').modal('show')
								.find('#modalContent')
								.load($(this).attr('value'));
					});
				});
				$('.btn btn-success').click(function(e){
				   e.preventDefault();
				   // отправка аякса и потом:
				   $('#modal').modal('hide');
				});
			});
			
		");
                
				   Modal::begin([
					   'header'=>'<h4>Wait a bit...</h4>',
					   'id'=>'modal',
					   'size'=>'modal-lg',
				   ]);
				   echo "<div id='modalContent'></div>";
				   Modal::end();
				?>   
		
                
                
    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'weight',
            'size',
            //'category_id',
            [
            'attribute'=>'category',
            'filter' => Html::activeDropDownList($searchModel, 'category_id', $arrayCategory, ['prompt' => 'aaaa', 'class' => 'form-control form-control-sm']),
            ],
			//'format' =>'raw',
            'user_id',
            'price',
            'status',
			[
             'class' => 'yii\grid\ActionColumn',
             'template' => '{view} {update} {delete} {myButton}',  // the default buttons + your custom button
             'buttons' => [
                'update' => function($url, $dataProvider, $key) {
					return Html::button('edit', ['value'=> Url::to(['parcel/update','id' => $dataProvider->id]), 
					'class' => 'btn-update',
					'data-pjax' => '0',]);},
				'view' => function($url, $dataProvider, $key) {
					return '';
					},
				//'visibleButtons'=>[
					'delete'=> function($url, $dataProvider, $key){
						if($dataProvider->status == 'unsent')
						{
							return '<button type="button" class="btn btn-update">delete</button>';
						}
					},
				]
			],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
   <?php
   
?>

</div>

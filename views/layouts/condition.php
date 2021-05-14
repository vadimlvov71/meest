<div class="condition  shadow row fon-condition">
	<div id="rowIdOverride" class="row row-padding1">
		<div class="col-lg-12 text-center condition-header">Условия покупки:</div>
		<div class="col-lg-3 text-center">
			<div class="border-div_new condition-item white-fon">
				<img class="icons_dostavka1" src="<?php echo(\Yii::$app->request->BaseUrl)?>/img/conditions/buy1.jpg" alt="">
				<p class="">Сделайте заказ!</p>
			</div>
		</div>
		<!--<div class="icons_dostavka_arrows"></div>-->
		
		<div class=" col-lg-3 text-center">
			<div class="border-div_new condition-item white-fon">
				<img class="icons_dostavka1" src="<?php echo(\Yii::$app->request->BaseUrl)?>/img/conditions/buy2.jpg" alt="">
				<p class="">Подвердите оператору заказ</p>
			</div>
		</div>
		<!--<div class="icons_dostavka_arrows"></div>-->
		<div class="col-lg-3 text-center">
			<div class="border-div_new condition-item white-fon">
				<img class="icons_dostavka1" src="<?php echo(\Yii::$app->request->BaseUrl)?>/img/conditions/buy3.jpg" alt="">
				<p class="">Ожидаете сообщения Новой почты</p>
			</div>
		</div>
		<div class="col-lg-3 text-center">
			<div class="border-div_new condition-item white-fon">
				<img class="icons_dostavka1" src="<?php echo(\Yii::$app->request->BaseUrl)?>/img/conditions/buy4.jpg" alt="">
				<p class="">Оплата при получении</p>
			</div>
		</div>
	</div>
</div>
<script>
function scrollToCondition(){
	var condition = document.getElementById("condition");
	condition.scrollIntoView({
		behavior: 'smooth',
		block: 'start' // scroll to top of target element
	})
}
</script>
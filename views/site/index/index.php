<?php
	use app\components\TemplateComponents;
	
	$imagePath = Yii::getAlias('@imagePath');
	$domen = Yii::$app->params['domen'];
	$imagePathNew = $domen."/web";
	?>
<section class="white111 hotel-name" style='/*background-image: url("<?php echo($imagePathNew)?>/images/zatoka_rest.jpg");*/ width: 100%; display: inline-block; opacity:95%;'>
	<h1 class="text-class text-center"><?php echo Yii::$app->params['siteName']; ?></h1>
	<div class="container">
	  <div class="row">
	  <!---->
		<div class="col-sm-8 section2 blue123 shadow1">
			<h3 class="text-class text-center headline">Проживание:</h3>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
					  <?php 
					  foreach($hotel_types as $item){
						  ?>
							<div class="item_rest">
								<a href="<?php echo $domen; ?>/<?php echo($item["url"])?>"><?php echo($item["name"])?></a>
							</div>
						<?php }?>
					</div>
					<div class="col-sm-6 ">
					  <?php 
					  foreach($hotel_types2 as $item){
						  ?>
							<div class="item_rest">
								<a href="<?php echo $domen; ?>/<?php echo($item["url"])?>"><?php echo($item["name"])?></a>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!---->
		<div class="col-sm-4 ">
			<div class=" padding-section section2 blue123">
				<h2 class="text-class text-center curort headline" ><?php echo Yii::$app->params['curortName']; ?></h2>
				<div class="row">
					<div class="col-sm-12">
						
						<?php foreach($products as $item){?>
							<div class="item_rest shadow123">
								<a href="<?php echo($item["translit"])?>"><?php echo($item["name"])?></a>
							</div>
						
						<?php }?>
					</div>
					
				</div>
			</div>
		</div>
		
	  </div>
	</div>
</section>
<section class="white hotel-name" >
	<h4 class="text-class text-center"><a class="link-to-catalog" href="<?php echo $domen; ?>/hotels.html">Гостиницы:</a></h4>
	<div class="container">
	  <div class="row">
		<?php 
		/*echo "<pre>";
			print_r($hotels2);
			echo "</pre>";*/
		foreach($hotels2 as $item){
			TemplateComponents::item($item, $domen, $imagePath, "index");
		}?>
	  </div>
	</div>
</section>
<section class="blue" >
	<h3 class="text-class text-center"><a class="link-to-catalog" href="<?php echo $domen; ?>/blog">Статьи:</a></h3>
	<div class="container">
	  <div class="row">
		<?php foreach($articles as $item){
			TemplateComponents::article($item, $domen, $imagePath, "article");
		}?>
	  </div>
	</div>
</section>
<section class="white">
	<h5 class="text-class text-center">
		<a class="link-to-catalog" href="<?php echo $domen; ?>/dostoprimechatelnosti"><?php echo Yii::$app->params['dostSiteName']; ?></a></h5>
	<div class="container">
	  <div class="row">
		<?php foreach($dosts as $item){
			TemplateComponents::article($item, $domen, $imagePath,  "dost");
		}?>
	  </div>
	</div>
</section>

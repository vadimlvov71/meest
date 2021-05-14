<?php
use app\components\TemplateComponents;
$h1 = "Надпись";
include __DIR__ ."/../variables.php";
$path = $domen;
$this->params['breadcrumbs'][] = ['label' => 'Достопримечательности', 'url'=> ["/dostoprimechatelnosti"]];
$this->params['breadcrumbs'][] = ['label' => $dost->name];
?>



<h1 class="text-class text-center"><?php echo($dost["name"])?></h1>

	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<section class="white">
					<div class="img float-left margin-right-article">
						<img align="center" width="400" class="img-fluid-height" src="<?php echo($imagePath."/".$dost["foto"])?>" alt="<?php echo($dost["name"])?>">
					</div>
					<div class="article-text"><?php echo($dost["content"])?></div>
				</section>
				<div class="img-article 3">
					Фотогалерея
				</div>
				<div class="article-section1 marginSection shadow1">	
					<?php
					foreach($fotodosts as $item){?>
						<div class="hotel-section-title margin-top-gallery"><?php echo($item['name'])?></div>
						<div class="hotel-section-text row1">
							<img align="center"  class="img-fluid" src="<?php echo ($imagePath."/foto/".$item['foto'])?>" alt="<?php echo($item['name'])?>">
						</div>
						
						<?php
					}
					
					?>
				</div>
			</div>
			<div class="col-sm-3">
				<section class="blue">
					<div class="text-center">
						<a href="<?php echo($path)?>" class="text-class "><?php echo($catalog["name"]);?></a>
					</div>
					<div class="container blue">
						<?php 
						foreach($hotel_types as $item){
						  ?>
							<div class="item_rest">
								<a href="<?php echo $domen; ?>/<?php echo($item["url"])?>"><?php echo($item["name"])?></a>
							</div>
						<?php }?>
					</div>
				</section>
			</div>
		</div>
	</div>




<section class="blue" >
	<h3 class="text-class text-center"><a href="<?php echo $domen; ?>/dostoprimechatelnosti">Достопримечательности: <?php echo($v_cataloge)?></a></h3>
	<div class="container">
	  <div class="row">
		<?php foreach($dosts as $item){
			TemplateComponents::article($item, $site_domen, $imagePath, "dost");
		}?>
	  </div>
	</div>
</section>

<?php
	use app\components\TemplateComponents;
	$imagePath = Yii::getAlias('@imagePath');
	?>
<section class="white" style='background-image: url("<?php echo($site_domen)?>/images/karpaty_rest_background.png"); width: 100%; display: inline-block;'>
	<h1 class="text-class text-center"><?php echo Yii::$app->params['siteName']; ?></h1>
	<div class="container">
	  <div class="row">
		<div class="col-sm-8 ">
			<div class=" padding-section section1 ">
				<h2 class="text-class text-center"><?php echo Yii::$app->params['curortName']; ?></h2>
				<div class="row">
					<div class="col-sm-6">
						
						<?php foreach($products as $item){?>
							<div class="item_rest shadow">
								<a href="http://localhost/rest/rubric"><?php echo($item["name"])?></a>
							</div>
						
						<?php }?>
					</div>
					<div class="col-sm-6">
					  
					 <?php foreach($products1 as $item){?>
							<div class="item_rest shadow">
								<a href="http://localhost/rest/rubric"> <?php echo($item["name"])?></a>
							</div>
						
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<!---->
		<div class="col-sm-4 section2 blue shadow">
			<h3 class="text-class text-center">Column 3</h3>
		  <?php foreach($hotel_types as $item){?>
				<div class="item_rest">
					<a href="http://localhost/rest/hotel_type"><?php echo($item["name"])?></a>
				</div>
			<?php }?>
		</div>
		<!---->
	  </div>
	</div>
</section>
<section class="white" >
	<h4 class="text-class text-center">Гостиницы</h4>
	<div class="container">
	  <div class="row">
		<?php 
		foreach($hotels as $item){
			TemplateComponents::item($item, $site_domen, $imagePath, "index");
		}?>
	  </div>
	</div>
</section>
<section class="blue" >
	<h3 class="text-class text-center">Блог</h3>
	<div class="container">
	  <div class="row">
		<?php foreach($hotel_types as $item){
			//article($item, $site_domen, "article");
		}?>
	  </div>
	</div>
</section>
<section class="blue">
	<h5 class="text-class text-center"><?php echo Yii::$app->params['dostSiteName']; ?></h5>
	<div class="container">
	  <div class="row">
		<?php foreach($dosts as $item){
			TemplateComponents::article($item, $site_domen, $imagePath,  "dost");
		}?>
	  </div>
	</div>
</section>
<div class="row white-fon shadow">
	<div class="col-lg-12"><h3>Каталог:</h3></div>
	<?php
	
/*echo "<pre>";
	print_r($catalogs);
	echo "</pre>";	*/		
					echo($catalog["name"]."<br>");
	echo "_______________________";
	echo "<div>";		
	foreach($products as $item){?>
		<div><a href='<?php echo $catalog["url"];?>/<?php echo $item["translit"];?>'>
		<?php echo "".$item["name"]."<br>";?>
		</a></div>
		<?php
		//TemplatesComponents::blogAnons("/img/", $item, 4);
	}
	echo "</div>";
	echo "#####";
	echo "<div>";
	foreach($catalogs as $item1){?>
		<div><a href='<?php echo $item1["url"];?>'>
		<?php echo "item:".$item1["name"]."<br>";?>
		</a></div>
		<?php
		//TemplatesComponents::blogAnons("/img/", $item, 4);
	}
	echo "</div>";
	echo "_______________________";
	echo "<div>";
	foreach($hotel_types as $item){?>
		<div><a href='<?php echo $catalog["url"];?>/<?php echo $item["url"];?>.html'>
		<?php echo "name:".$item["name"]."<br>";?>
		</a></div>
		<?php
		//TemplatesComponents::blogAnons("/img/", $item, 4);
	}
	echo "</div>";
	echo "</div>";
	echo "DOST_______________________";
	echo "<div>";
	foreach($dosts as $item){
		TemplateComponents::theDostLinkHref($base, $item);
		?>
	
		<div><a href='<?php //echo $catalog["url"];?>/<?php //echo $item["url"];?>.html'>
		<?php //echo "name:".$item["name"]."<br>";?>
		</a></div>
		<?php
		//TemplatesComponents::blogAnons("/img/", $item, 4);
	}
	echo "</div>";
	?>
</div>
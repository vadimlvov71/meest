<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\models\Categories;
use app\models\Site;
//////
/* $siteSettings = Site::getSiteSettings();
 $site = array();
 print_r($siteSettings);
 $site['currency'] = $siteSettings[0]["currency"];
*/
?>
<!-- Navigation -->

<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	<div class="container">
		
		<button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			<?php
			//$query_categories = Categories::getTopMenu();
			$pages = getTopMenu($this->params);
			foreach ($pages as $page){
				if($this->params['page_translit'] == $page["translit"]){
					?>
					<li class="nav-item mx-0 mx-lg-1" style="line-height: 39px;">
						<?php echo($page["name"])?>
					</li>
					<?php
				}else{
					?>
					<li class="nav-item mx-0 mx-lg-1">
						<a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?php echo(\Yii::$app->request->BaseUrl."/manage/".$page["translit"])?>"><?php echo($page["name"])?></a>
					</li>
				<?php
				}
			}
			?>
			</ul>
		</div>
	</div>
</nav>
<?php

function getTopMenu($rubricsBrands){
	$page = array();
	$wrapper = array();
	$page["translit"] = "";
	$page["name"] = "Первая";
	$wrapper[] = $page;
	$page["translit"] = "orders";
	$page["name"] = "Заказы";
	$wrapper[] = $page;
	$page["translit"] = "goods";
	$page["name"] = "Товары";
	$wrapper[] = $page;
	if($rubricsBrands["rubrics"] == "yes"){
		$page["translit"] = "categories";
		$page["name"] = "Категории";
		$wrapper[] = $page;
	}
	if($rubricsBrands["brands"] == "yes"){
		$page["translit"] = "brands";
		$page["name"] = "Бренды";
		$wrapper[] = $page;
	}
	if($rubricsBrands["brands"] == "yes"){
		$page["translit"] = "blog";
		$page["name"] = "Блог";
		$wrapper[] = $page;
	}
	$page["translit"] = "logout";
	$page["name"] = "Выход";
	$wrapper[] = $page;
	return $wrapper;
}
?>
	
    

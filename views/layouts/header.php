<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\models\Products;
use app\models\Site;
use yii\helpers\Html;
//////
/* $siteSettings = Site::getSiteSettings();
 $site = array();
 print_r($siteSettings);
 $site['currency'] = $siteSettings[0]["currency"];
*/
?>
<!-- Navigation -->

<nav class=" header-bg  fixed-top " id="mainNav" >
	<section class="navbar navbar-expand-md text-uppercase" style="padding: .5rem 1rem 0rem 1rem;">
		<div class="container">
			<a class="navbar-brand1111 js-scroll-trigger" href="<?php echo(\Yii::$app->request->BaseUrl) ?>/">
				
			</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon hamburger">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>
				<div class="collapse navbar-collapse header-menu-container" id="navbarNav">
					<div class="border-bottom header-menu" >
						<?php 
						if (!Yii::$app->user->isGuest) {
							?>
							<?= Html::a('Logout', ['site/logout']) ?>

						<?php
						}
						?>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
</nav>


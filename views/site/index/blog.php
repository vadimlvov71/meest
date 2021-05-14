<?php
use yii\helpers\Url;
use app\components\TemplateComponents;
use app\models\Curorts;
include __DIR__ ."/../variables.php";
$path = $domen;
?>

  
<?php
//include_once "functions/rubric_menu.php";
$hotel_type = "Надпись";
?> 
<section class="white" >
	<h1 class="text-class text-center"><?php echo($this->title)?></h1>
</section>



<section class="white">
	<h2 class="text-class text-center">Статьи</h2>
	<div class="container">
	  <div class="row">
	  
		<?php 
		foreach($articles as $item){
			TemplateComponents::article($item, $site_domen, $imagePath, "article");
		}
		 ?>
	  </div>
	</div>
</section>
<section class="blue">
	<h2 class="text-class text-center">Районы Затоки:</h2>
	<div class="container">
	  <div class="row">
		<?php 
		/*
		  foreach($products as $item){
		  */ ?>
			<div class="item_rest shadow">
				<a href="<?php //echo($item["translit"])?>"><?php //echo($item["name"])?></a>
			</div>
		
		<?php 
		 /*
		}
		 */
		?>
	  </div>
	</div>
</section>


<?php
include __DIR__. "/../hotel_types.php";
 ?>

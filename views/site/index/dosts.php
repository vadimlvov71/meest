<?php
use yii\helpers\Url;
use app\components\TemplateComponents;
use app\models\Curorts;
include __DIR__ ."/../variables.php";
$path = $domen;
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url'=> ["/dostoprimechatelnosti"]];
//$this->params['breadcrumbs'][] = ['label' => $article->name];
?>

  
<?php
//include_once "functions/rubric_menu.php";
$hotel_type = "Надпись";
?> 
<section class="white" >
	<h1 class="text-class text-center"><?php echo($this->title)?></h1>
</section>



<section class="white">
	
	<div class="container">
	  <div class="row">
	  
		<?php 
		foreach($dosts as $item){
			TemplateComponents::article($item, $site_domen, $imagePath, "dost");
		}
		 ?>
	  </div>
	</div>
</section>


<?php
		
include __DIR__. "/../hotel_types.php";
 ?>

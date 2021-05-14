
<div class="row white-fon shadow">
	<div class="col-lg-12"><h3>Блог:</h3></div>
	<?php
	use app\components\TemplatesComponents;
					//echo "<pre>";
					//print_r($data);
	foreach($data_blog as $item){
		TemplatesComponents::blogAnons("/img/", $item, 4);
	}
	?>
</div>
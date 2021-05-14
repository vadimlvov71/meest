<ul class="breadcrumb">
<?php
//echo $this->context->action->id;
	

		$total = count($breadcrumbs_array);
		$counter = 0;
		foreach($breadcrumbs_array as  $breadcrumbs){
			$counter++;
			if($counter == $total) {
				?>
				<li><?php echo($breadcrumbs["name"]) ?></li>
				<?php
			}else{
	?>
		<li><a href="<?php echo(\Yii::$app->request->BaseUrl) ?>/<?php echo($breadcrumbs["url"]) ?>"><?php echo($breadcrumbs["name"]) ?></a></li>
	<?php
			}
			
		}
	?>
</ul>

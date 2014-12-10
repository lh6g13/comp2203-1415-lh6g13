<?php

	$pages = array(
		'about'			=> 'About us',
		'film'		=> 'Films',
		'genres'		=> 'Genres'
		
		
	);

?>

<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-tabs">
			
		
			<?php foreach($pages as $url => $title) : ?>
				<?php
					
					if(strstr($_SERVER['SCRIPT_NAME'], $url)) {
						$active = 'class="active"';
					} else {
						$active = '';
					}
				
				?>
				<li <?=$active?>><a href="<?=$url; ?>.php"><?=$title?></a></li>
			<?php endforeach; ?>
			
		</ul>
	</div>
	
</div>
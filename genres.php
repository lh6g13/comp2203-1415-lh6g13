<?php 
    require_once('includes/predispatch.php');
require_once('includes/header.php');
require('includes/db.php');
require_once('classes/genre.class.php');


$genres = $db->query("SELECT * FROM genre");

?>
		<div id="genre-list" class="row">
		<div class="list-group  row text-center" class="list-group col-md-6">
			<?php
			while($genre = $genres->fetch_object('Genre')): ?>
				<a href="show-genre.php?id=<?=$genre->id?>" class="list-group-item">
				<h4 class="list-group-item-heading"><?=$genre->name?></h4>	
				</a>
			<?php endwhile; ?>
		</div>
	</div>
</div>



 <?php require_once('includes/footer.php'); ?>
<?php 
    require_once('includes/predispatch.php');
require_once('includes/header.php');
require('includes/db.php');
	require_once('classes/film.class.php');
	$films = $db->query("SELECT * FROM `film`");

?>
<h1>This is a list of all the films available!</h1>
<div id="film-list" class="row">
<div class="list-group row text-center" >
	<?php
		while($film = $films->fetch_object('Film')): 
			?>
		<div class="filmBox col-md-3">
		<a href="show-film.php?id=<?=$film->id?>" class="list-group-item">
		<?php echo "<img style='height:190px; width:120px' src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$film -> id. "_small.jpg'>"  ?>	
		<p class="list-group-item-text overflow" ><br><?=$film->name?></p><br>
		</a>
		</div>	
		<?php endwhile; ?>

		</div>
		</div>



 <?php require_once('includes/footer.php'); ?>
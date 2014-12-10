<?php
require_once('includes/predispatch.php');
require_once('includes/header.php');
require('includes/db.php');
require_once('classes/genre.class.php');
require_once('classes/film.class.php');

?>
<div id="content" class="row">

		<?php
	
	try{
		
		if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('The genre ID must be specified in order to view the cars available. Please go back and try again.');
		$genre = $db->query('SELECT * FROM genre WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('Genre');
		$films = $db->query('SELECT * FROM film WHERE genre_id= '.$db->real_escape_string($_GET['id']));
		?>
		
		<h2>Check out all the films we have available from <?=$genre->name?></h2>
		<div id="film-list" class="row">
			
			<?php while($film = $films->fetch_object("Film")): ?>
				<div class="film-item">
				<div class="row">
				<div class="col-md-6"><h3><?=$film->name?></h3></div>
				<div class="col-md-4 pull-right"><a href="show-film.php?id=<?=$film->id?>" class="btn btn-primary pull-right">View more information</a></div>
				</div>
				<div class="row">
				<div class="col-md-9"><strong><?=$film->description?> (<?=$film->description?>)</strong></div>
				<div class="col-md-3"><?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$film -> id. "_medium.jpg'>" ?></div>	
				</div>
					
					
				</div>
			<?php endwhile; ?>
			
		</div>
	<?php
	}
	catch(Exception $e){
		echo '<div class="alert alert-danger">';
		echo 	'<strong>Error!</strong>';
		echo 	'<p>'.$e->getMessage().'</p>';
		echo '</div>';
	}
	?>






<?php require_once('includes/footer.php'); ?>
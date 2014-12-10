<?php
require_once('includes/predispatch.php');
require_once('includes/header.php');
require('includes/db.php');
require_once('classes/film.class.php');
require_once('classes/review.class.php');
?>

<div id="content" class="row">
	
	<?php
	
	try{

		if(!isset($_GET['id']) OR empty($_GET['id']) OR !is_numeric($_GET['id'])) throw new Exception('The film ID must be specified in order to view film. Please go back and try again.');
		

		$film = $db->query('SELECT * FROM film WHERE id = '.$db->real_escape_string($_GET['id']))->fetch_object('Film');

		?>
		<div class="col-md-9"> <p>Film - <?=$film->name?> (<?=$film->description?>)</p></div>
		<div class="col-md-3"><?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$film -> id. "_medium.jpg'>" ?>	
		</div>
	
		
		
		<div class="row">
			
			<div>
				<dl class="dl-horizontal">

					<dt>Runtime: </dt>
						<dd><?=$film->runtime?></dd>
					<dt>Director:</dt>
						<dd><?=$film->director?></dd>
					<dt>Classification: </dt>
						<dd><?=$film->classification?></dd>
					<dt>Theatrical Release: </dt>
						<dd><?=$film->theatricalRelease?></dd>
					<dt>DVD Release: </dt>
						<dd><?=$film->dvdRelease?></dd>
					
						
				</dl>

			</div>
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




</div>

<?php require_once('includes/footer.php'); ?>
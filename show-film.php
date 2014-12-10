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

		$reviews = $db->query('SELECT * FROM review WHERE film_id= '.$db->real_escape_string($_GET['id']).' ORDER BY id DESC LIMIT 10');
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
				<div class= "row rotten">
			 <div class="col-md-12">
			 	<?php
			 	$json = file_get_contents('http://api.rottentomatoes.com/api/public/v1.0/movies/'.$film->rt_id.'.json?apikey=ncb7wm7fjh3vcgc76grb5ej3');
			 	$films = json_decode($json);
			 	//echo '<pre>';
			 	//print_r($films);
			 	//echo '</pre>';
				?>
				<h3>Rotten Tomatoes Reviews</h3>
				<p> Critics Rating: <?echo $films->ratings->critics_rating;?></p>
				<p> Critics Score: <?echo $films->ratings->critics_score;?></p>
				<p> Audience Score: <?echo $films->ratings->audience_score;?></p>
				<p> Audience Rating: <?echo $films->ratings->audience_rating;?></p>

<div>
				<h3>Current Reviews</h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Film Id</th>
							<th>Reviewer</th>
							<th>Comment</th>

							
						</tr>
					</thead>
					<body>
						<?php while($review = $reviews->fetch_object("Review")): ?>
							<tr>
								<td><?=$review->id?></td>
								<td><?=$review->reviewer?></td>
								<td><?=$review->comment?></td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
			
			
			
		</div>
		
	
		<div class="row">
			<h3>Add a Review!</h3>
		
			<form action="process-review.php" method="post">
			<input type="hidden" name="film_id" value=<?php echo ($_GET['id']);?>><br>
			Name:    <input class="form-control"  type="text" name="reviewer"><br>
			Comment: <input class="form-control"  type="text" name="comment"><br>
			Liked:   <input class="form-control"  type="Radio" Name="lik" ><br>
			<input type="submit" class="btn btn-submit"><br>
			

			
			</form>
		
			
		</div>
		


	<a title="Scroll to Top" href="#top">Scroll to Top</a>






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
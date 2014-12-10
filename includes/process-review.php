<?php
 include('includes/db.php');
$film_id = $_POST['film_id'];
$reviewer = $_POST['reviewer'];
$comment = $_POST['comment'];


$db->query("INSERT INTO review (film_id,reviewer,comment) VALUES('$film_id', '$reviewer', '$comment'");
try
{
	if(!isset($_POST['film_id']) OR empty($_POST['film_id']) OR !is_numeric($_POST['film_id']))
		throw new Exception('The film ID must be specified in order to submit the review. Please go back and try again.');
else
	{
		echo'The comment was successful!';
	}
}
catch(Exception $e){
	echo '<div class="alert alert-danger">';
	echo 	'<strong>Error!</strong>';
	echo 	'<p>'.$e->getMessage().'</p>';
	echo '</div>';
}
	

	print_r($_POST);


?>
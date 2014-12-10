<?php 
    require_once('includes/predispatch.php');
require_once('includes/header.php');
require('includes/db.php');
require_once('classes/film.class.php');
$films = $db->query("SELECT * FROM `film` ORDER BY RAND() LIMIT 1");

?>
<?php $recentFilms = $db->query("SELECT * FROM film ORDER BY theatricalRelease DESC LIMIT 5"); ?> 
<?php if($recentFilms->num_rows > 0) { 
  while($filmsposters = $recentFilms -> fetch_assoc()){ 
    $filmId[] = $filmsposters['id']; 
    $nameofFilm[] = $filmsposters['name']; } } ?> 
       <?php
  
          include('partials/carousel.php');?>
          </div>
    <p>It's easy to rent films from us on DVD and Blu-ray discs by post.   
    </p>

    <p>If you live in the UK you can have the latest new releases delivered straight to your doorstep via our Online DVD Rental service. Return postage is free, there are no fees for returning your discs late, and you're under no other obligation.</p>

    <p>Simply keep your DVD rentals until you're finished with them, then pop them back in the post to us. You'll then be sent more discs from your DVD rental queue.</p>

    <p>It's simple! </p>


    </div>


 <?php require_once('includes/footer.php'); ?>
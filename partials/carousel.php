   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="col-md-12">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>

      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div style="text-align:center;">
            <?php echo  "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$filmId[0]. "_massive.jpg' style='width:350px; height:550px;'>" ?>
          
        </div>
      </div>
        <div class="item">
            <div style="text-align:center;">
             <?php echo "<img  src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$filmId[1]. "_massive.jpg' style='width:350px; height:550px;'>" ?>

          </div>
        </div>
        <div class="item">
           <div style="text-align:center;">
            <?php echo "<img  src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$filmId[2]. "_massive.jpg' style='width:350px; height:550px;'>" ?>
   
          </div>
        </div>
                <div class="item">
                   <div style="text-align:center;">
             <?php echo "<img src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$filmId[3]. "_massive.jpg' style='width:350px; height:550px;'>" ?>
    
          </div>
        </div>
                <div class="item">
                   <div style="text-align:center;">
             <?php echo "<img  src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/" .$filmId[4]. "_massive.jpg' style='width:350px; height:550px;'>" ?>
   
          </div>
        </div>
      </div>

    
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
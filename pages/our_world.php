<?php
  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CometCat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/our_world.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Cairo&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="../script.js"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="../index.php">Home</a>
                </li>
  
                <li>
                    <a id="firstItem" href="our_world.php">Our World</a> 
                </li>

                <li>
                    <a id="secondItem" href="space_neighbors.php">Our Space Neighbors</a> 
                </li>

                <li>
                    <a id="thirdItem" href="ff_away.php">Far Far Away</a>
                </li>

                <li>
                    <a id="fourthItem" href="space_explorers.php">Space Explorers</a>
                </li>

                <li>
                    <a id="sixthItem" href="comet_cadets.php">Comet Cadets</a>
                </li>
            </ul>
       </nav>
 
        <div id="content">
           <header id='header-banner'class="container-fluid" style="position:relative;">
              <button type="button" id="sidebarCollapse" class="btn btn-info" title="toggle_sidebar">
                <i class="fas fa-align-left"></i>   
              </button>
              <img src="../images/space_long.jpg" alt="stars" class="wallpaper">
              <img src="../images/logo.png" alt="cat jumping over words" id="logo">
           </header>

           <div class='grid_container'><img id='earth_wp' src="../images/earth_wp.jpg" alt="earth">
             <div class='grid_header'>
                <div id='top_square'></div>
                <div id='mid_square'></div>
                <div id='btm_square'></div>
                <img id='hills_img' src="../images/field.jpg" alt="hills">
                <img id='water_img' src="../images/ocean.jpg" alt="desert">
                <img id='clouds_img' src="../images/clouds.jpg" alt="mountains">
                <div id='header_pg'>
                  <h1>The Blue Marble</h1><br>
                  <p>
                  Earth is a wondrous and awe-inspiring planet, offering a unique combination of beauty, complexity, and fragility. As the only known haven for life in the universe, it is our collective responsibility to cherish, preserve, and safeguard the Blue Planet for future generations, ensuring a sustainable and harmonious coexistence with the natural world that has nurtured us all.
                  </p>
                </div>
             </div>

             <div class='gl_header'>
                <p class='text-left font-weight-bold'>The</p>           
                <p class='text-center font-weight-bold'>Goldilocks</p>           
                <p class='text-right font-weight-bold'>Zone</p>           
             </div>

             <div class='gl_content'>
                  <p id='header_1'>What's the Goldilocks Zone?</p>
                 <p id='gl_first_text'>
                    The Goldilocks Zone, also known as the habitable zone, is when conditions are just right for a planet to have water.
                    <br>
                    It is named after the fairytale "Goldilocks and the Three Bears", because like Goldilocks looking for soup that isn't 
                    too hot nor too cold, there needs to be right conditions for a planet to have water.  
                 </p>
                 <img id='soup_pic' src="../images/soup.jpg" alt="soup">
                 <img id='sunrise' src="../images/sunrise.jpg" alt="sunrise">  
                 <p id='header_2'>Why is the Sun so important?</p>
                 <p id='gl_second_text'>
                 The sun's presence and the energy it provides are important to the existence and growth of life on Earth. 
                 <br>
                 The distance between the Earth and Sun, is just right for Earth to continue to thrive.
                 </p>  
                          
             </div>

             <div class='terrain_intro'>
             <h2 class='header text-center'>The Beauty of Nature</h2>
             <p>
             
             </p>
             </div>

             
             <div class='terrain_content'>
              <div id='bg_square'></div>
              <img id='ocean_floor' src="../images/ocean_floor.jpg" alt="ocean floor">
              <img id='mountain' src="../images/mountains_ow.jpg" alt="snowy mountain">  
              <img id='rainforest' src="../images/rainforest.jpg" alt="rainforest">
              <img id='arizona' src="../images/arizona.jpg" alt="arizona scenery">
              <p id='life_content_text'> Our planet is incredibly diverse. Ranging from expansive oceans to towering mountains, lush forests to arid deserts, and frozen polar regions to fertile plains. 
               Each terrain offers a distinct set of environmental conditions, geological features, and ecosystems, contributing to the planet's remarkable beauty and ecological richness.</p>
             </div>

             <div class='moon_intro'>
              <h2 id='moon_header'>Our next door neighbor - The Moon</h2>
              
             </div>

             <div class='moon_content'>
               <div id='moon_content_text'>
                <p>
                   The moon is more than a decoration in the sky.  Over the centuries, it has captured human imagination and has been the subject of scientific study and exploration.
                   However, the moon's influence goes beyond just research. It influences us everyday with it's gravitational pull on the Earth's waves. 
                   While it has no atmosphere or water, it has been an essential space companion to our world.
                </p>
               </div>
          
               <div id='bg_diamond'></div>
               <div id='bg_diamond_2'></div>
               <img id='moon_pic' src="../images/moon.png" alt="the moon">
               <img id='cat_logo_moon' src="../images/logo_cat.png" alt="cat jumping">
  
            </div>
 
             <div class='end_content'>
              <img id='n_lights_img' src="../images/nLights.jpg" alt="northern lights">
              <div id='end_img_square_one'></div>   
              <div id='end_text_square'>
                <div id='end_text'>
                 <h1>We still have more to learn!</h1>
                 <p>Come join the comet cadet newsletter, as we deilver current news, facts, and other annoucements on our journey through the stars!</p>
                </div>
                <button id='cta_button'>Check it out!</button>
              </div>
              
             </div>
          </div> 
           
             
          <div class="container">
                <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                  <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <p class="text-muted">&copy; 2022</p>
                  </div>
              
                  <div class="col mb-3">
              
                  </div>
              
                  <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>
              
                  <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>
              
                  <div class="col mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                  </div>
                </footer>
            </div>
          </div>
        </div>
      
    </div>
   
</body>

</html>
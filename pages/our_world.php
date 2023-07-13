<?php
  session_start();
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

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar">                
         <div class="sidebar-header">
       <?php
       if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']) ){
        ?>
        <p><?php echo "Hello, " . $_SESSION['user_name'];?>!</p>
        <button class='form_links' id='logout_link'><a  href="../logout.php">Logout</a></button>
       <?php }else{  ?> 
       <button class='form_links' id='login_link'><a  href="../login.php">Login</a></button>
       <button class='form_links' id='signup_link'><a href="../signup.php">Register</a></button>
       <?php }  ?>   
         </div>
          <ul class="list-unstyled components">             
              <li class="active">
                <a href="../index.php">Home</a>
              </li>
              <li>
                <a class='ow_Item' href="our_world.php">Our World</a>
              </li>
              <li>
                <a class="sn_Item" href="space_neighbors.php">Our Space Neighbors</a>    
              </li>

              <li>
                <a class="ffa_Item" href="ff_away.php">Far Far Away</a>
              </li>

              <li>
                <a class="se_Item" href="space_explorers.php">Space Explorers</a>
              </li>

              <li>
                <a class="cc_Item" href="/pages/comet_cadets.html">Comet Cadets</a>
              </li>
          </ul>        
        </nav>     
 
        <div id="content">
           <header id='header-banner'class="container-fluid" style="position:relative;">
              <button type="button" id="sidebarCollapse" class="btn btn-info" title="toggle_sidebar">
                <i class="fas fa-align-left"></i>   
              </button>
              <img src="../images/logo.png" alt="cat jumping over words" id="logo">
              <div class='weather_box'>
                <div id='current_info' class='appear'>
                  <p id='cur_location' class='text-center'></p>
                  <div id="cur_condition_icon">
                  </div>
                    <div id='cur_weather'>
                     <p id="cur_degrees"></p>
                     <p id="cur_condition"></p>
                    </div>
                </div>
                 
               <button id='weather_btn'><img id='weather_arrow' src="../images/weather_arrow.png" alt=""></button>
               <div id='forecast_box'>
                 
                  <div id='forecast_info'>
                   <div class='forecast_hours' id="first_hour">
                    <div class='icon' id="icon_one"></div>
                    <p class='temp' id='temp_one'></p>
                    <p class='time' id='hour_one'></p>
                   </div>
                   <div class='forecast_hours'  id="second_hour">
                    <div class='icon' id="icon_two"></div>
                    <p class='temp' id='temp_two'></p>
                    <p class='time' id='hour_two'></p>
                   </div>                
                   <div class='forecast_hours'  id="third_hour">
                    <div class='icon' id="icon_three"></div>
                    <p class='temp' id='temp_three'></p>
                    <p class='time' id='hour_three'></p>
                   </div>              
                   <div class='forecast_hours'  id="fourth_hour">
                    <div class='icon' id="icon_four"></div>
                    <p class='temp' id='temp_four'></p>
                    <p class='time' id='hour_four'></p>
                   </div>                    
                  </div>

               </div> 

              </div>
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
                  <p class='header'>The Blue Marble</p><br>
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
                 <br><br>
                 The distance between the Earth and Sun, is just right for Earth to continue to thrive.
                 </p>  
                          
             </div>

             <div class='terrain_intro'>
             <p class='header text-center'>The Beauty of Nature</p>
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
              <p id='moon_header'>Our next door neighbor: The Moon</p>
              
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
                 <p class='header'>We still have more to learn!</p>
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
   
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../script.js"></script>
</body>

</html>
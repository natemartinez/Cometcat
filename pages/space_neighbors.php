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
    <link rel="stylesheet" href="../styles/space_neighbors.css">
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
            <div class="sidebar-header"></div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../index.php">Home</a>
                </li>
                <li>
                    <a id="firstItem" href="our_world.php">Our World</a>
                </li>
                <li>
                    <a id="secondItem" href="#">Our Space Neighbors</a> 
                </li>

                <li>
                    <a id="thirdItem" href="/pages/far_away.html">Far Far Away</a>
                </li>

                <li>
                    <a id="fourthItem" href="/pages/explorers.html">Space Explorers</a>
                </li>

                <li>
                    <a id="fifthItem" href="/pages/gadgets_tech.html">Gadgets & Tech</a>
                </li>

                <li>
                    <a id="sixthItem" href="/pages/comet_cadets.html">Comet Cadets</a>
                </li>
            </ul>
       </nav>

        <div id="content">
           <div id='header-banner'class="container-fluid" style="position:relative ;">
              <button type="button" id="sidebarCollapse" class="btn btn-info" title="toggle_sidebar">
                <i class="fas fa-align-left"></i>   
              </button>
              <img src="../images/space_long.jpg" alt="stars" class="wallpaper">
              <img src="../images/logo.png" alt="cat jumping over words" id="logo">
           </div>

           <div class='grid_container'>
             <div class='header_sec'></div>
             <div class='sun_sec planet_sec'>
              <img class='planet_bkgrd' src="../images/sun_surface.jpg" alt="">
              <div class='planet_main'>
              <img id='sun_pic' class='planet_pic appear' src="../images/sun.png" alt="">
              <p class='planet_title appear'>Sun</p>
              </div>
              
             </div>
             <div class='mercury_sec planet_sec'>
               <img class='planet_bkgrd' src="../images/mercury_surface.jpg" alt="">
               <div class='planet_main'>
                <img id='mercury_pic' class='planet_pic appear' src="../images/mercury.png" alt="planet mercury">
                <p class='planet_title'>Mercury</p>
               </div>
               
             </div>
             <div class='venus_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/venus_surface.jpg" alt="">
                <div class='planet_main'>
                 <img id='venus_pic' class='planet_pic appear' src="../images/venus.png" alt="planet venus">
                 <p class='planet_title'>Venus</p>
                </div>
                
             </div>
             <div class='mars_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/mars_surface.jpg" alt="">
                <div class='planet_main'>
                 <img id='mars_pic' class='planet_pic appear'   src="../images/mars.png" alt="">
                 <p class='planet_title'>Mars</p>
                </div>
                
             </div>
             <div class='jupiter_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/jupiter_surface.jpg" alt="">
                <p class='planet_main_title disappear'>Jupiter's Stats</p>
                 
                <div class='planet_main'>
                  <img id='jupiter_pic' class='planet_pic appear'  src="../images/jupiter.png" alt="">
                  <p class='planet_title appear'>Jupiter</p>
                </div>
                <div id='jupCarousel' class='planet_menu carousel'>
                   <div class='slide active stats_div'>
                     <div class='comp'>
                        <img id='jup_stats_pic' src="../images/jupiter.png" alt="">
                        <img class='earth_stats_pic' src="../images/earth.png" alt="">
                     </div>
                     <div class='stats'>
                       <div class='stats_col_1'>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla quos ad beatae aperiam necessitatibus temporibus ut eligendi corrupti, reprehenderit vel molestias ipsam incidunt doloremque sapiente. Quod minus dolores non quas.</p>
                       </div>
                       <div class='stats_col_2'>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis facilis eligendi perferendis consectetur molestiae commodi, adipisci illo delectus unde voluptatem molestias voluptatibus qui tempora dignissimos totam soluta dolorum sapiente odio.</p>
                       </div>
                     </div>
                     <button class='next_button'>
                       Next
                     </button>
                   </div>
                   <div class='slide ff_div'>
                     <img id='ff_img' src="../images/wormhole.jpg" alt="">
                     <div class='ff_text'>
                      <h1>This is the example title</h1>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum a vitae nisi! Sunt ullam soluta reiciendis, et sed libero corporis facilis reprehenderit, dolor dignissimos nisi iste maiores tempore natus eaque!</p>
                     </div>
                     
                     <button class='next_button'>
                       Next
                     </button>
                   </div>      
                   <div class='slide ff_div'>
                     <img id='ff_img' src="../images/wormhole.jpg" alt="">
                     <div>
                      <h1>This is the example title 2</h1>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum a vitae nisi! Sunt ullam soluta reiciendis, et sed libero corporis facilis reprehenderit, dolor dignissimos nisi iste maiores tempore natus eaque!</p>
                     </div>
                     
                     <button class='next_button'>
                       Next
                     </button>
                   </div>      
                   <div class='slide ff_div'>
                     <img id='ff_img' src="../images/wormhole.jpg" alt="">
                     <div>
                      <h1>This is the example title 2</h1>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum a vitae nisi! Sunt ullam soluta reiciendis, et sed libero corporis facilis reprehenderit, dolor dignissimos nisi iste maiores tempore natus eaque!</p>
                     </div>
                     
                     <button class='next_button'>
                       Next
                     </button>
                   </div>      
                </div>
                
             </div>
             <div class='saturn_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/saturn_rings.jpg" alt="">
                <div class='planet_main'>
                 <img id='saturn_pic' class='planet_pic appear'  src="../images/saturn.png" alt="">
                 <p class='planet_title'>Saturn</p>
                </div>
                
             </div>
             <div class='uranus_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/uranus_surface.jpg" alt="">
                <div class='planet_main'>
                 <img id='uranus_pic' class='planet_pic appear' src="../images/uranus.png" alt="">
                 <p class='planet_title'>Uranus</p>
                </div>
                
             </div>
             <div class='neptune_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/neptune_surface.jpg" alt="">
                <div class='planet_main'>
                 <img id='neptune_pic' class='planet_pic appear' src="../images/neptune.png" alt="">
                 <p class='planet_title'>Neptune</p>
                </div>
                
             </div>
             <div class='pluto_sec planet_sec'>
                <img class='planet_bkgrd' src="../images/pluto_surface.jpg" alt="">
                <div class='planet_main'>
                 <img id='pluto_pic' class='planet_pic appear' src="../images/pluto.png" alt="">
                 <p class='planet_title'>Pluto</p>
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

   
</body>

</html>
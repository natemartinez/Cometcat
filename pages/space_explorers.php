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
    <link rel="stylesheet" href="../styles/space_explorers.css">
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
                    <a id="fifthItem" href="/pages/comet_cadets.html">Comet Cadets</a>
                </li>
            </ul>
        </nav>
 
        <div id="content">
           <header id='header-banner'class="container-fluid" style="position:relative;">
              <button type="button" id="sidebarCollapse" class="btn btn-info" title="toggle_sidebar">
                <i class="fas fa-align-left"></i>   
              </button>
              <div class='wallpaper'></div>
              <img src="../images/logo.png" alt="cat jumping over words" id="logo">
           </header>

          <div class='grid_container'>
            <div class='intro_section'>
              <div class='intro_bkgrd'></div>
                <div class='intro_midgrd'></div>
                <div class='intro_header'></div>
                <img class='intro_img' src="../images/explore.jpg" alt="">            
            </div>
            <div class='nav_section'>
              <button class='nav_btns' type="button">
                 <img id='astro_ico' class='nav_icons' src="../images/astronaut_icon.png" alt="astronaut icon">   
                 <p>Astronauts</p> 
              </button>

              <button class='nav_btns' type="button">
                <img id='sci_ico' class='nav_icons' src="../images/telescope_icon.png" alt="telescope"> 
                <p>Scientists</p>
              </button>

              <button class='nav_btns' type="button">
               <img id='tech_ico' src="../images/rocket_icon.png" alt="rocket">
               <p>Tech</p>
              </button>

              <button class='nav_btns' type="button">
               <img id='mission_ico' src="../images/flag_icon.png" alt="flag">
               <p>Missions</p>
              </button>
              
            </div>
            <div class='astronaut_section'>
              <p class='header'>Astronauts</p>
              <div class='section_top'>
                <div class='part'>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae qui assumenda laudantium numquam optio facilis, impedit voluptas animi? Quidem laborum ipsa voluptas. Explicabo saepe quaerat temporibus aliquid nisi! Tempore, magnam.</p>
                </div>
                       
                <div class='part' id='img_block'>
                 <img id='astronaut_img' src="../images/astronaut_img.png" alt="">
                </div>
              </div> 
              <p class='header'>Notable Astronauts</p> 
              <div class='section_btm'>
                <div>
                 <div class='part bio_card'>
                    <img src="../images/nArmstrong.jpg" alt="">
                 </div>
                 <div class='part bio_card'>
                    <img src="../images/bAldrin.jpg" alt="">
                 </div>
                </div>
                <div>
                 <div class='part bio_card'>
                    <img src="../images/sRide.jpg" alt="">
                 </div>
                 <div class='part bio_card'>
                   <img src="../images/yGagarin.jpg" alt="">
                 </div>
                </div>
                
              </div>  
             
            </div>
                  
            <div class='astronomy_section'>
             <p class='header'>Astronomers</p>
              <div class='section_top'>
                <div class='part'>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae qui assumenda laudantium numquam optio facilis, impedit voluptas animi? Quidem laborum ipsa voluptas. Explicabo saepe quaerat temporibus aliquid nisi! Tempore, magnam.</p>
                </div>
                       
                <div class='part' id='img_block'>
                 <img id='astronaut_img' src="../images/astronaut_img.png" alt="">
                </div>
              </div> 
              <p class='header'>Notable Astronomers</p> 
              <div class='section_btm'>
                <div>
                 <div class='part bio_card'>
                  <img src="../images/einstein.jpg" alt="Albert Einstein">
                 </div>
                 <div class='part bio_card'>
                  <img src="../images/hawking.jpg" alt="Stephen Hawking">
                 </div>
                 <div class='part bio_card'>
                  <img src="../images/kepler.jpg" alt="">
                 </div>
                </div>
                <div>
                 <div class='part bio_card'>
                  <img src="../images/iNewton.jpg" alt="">
                 </div>
                 <div class='part bio_card'>
                  <img src="../images/galileo.jpg" alt="">
                 </div>
                  <div class='part bio_card'>
                  <img src="../images/cSagan.jpg" alt="">
                 </div>
                </div>     
              </div>   
            </div>

            <div class='tech_section'>
              <p class='header'>Technology</p>
              <div class='section_top'>
                <div class='imgWithText'>
                 <div class='part'>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos doloremque, hic ut velit ratione delectus quibusdam eum dolorem optio omnis, error commodi porro vitae labore. Obcaecati ut vitae necessitatibus maiores!</p>
                 </div>
                 <div class='part' id='img_block'><img src="../images/" alt=""></div> 
                </div>      
                <div class='imgWithText'>
                 <div class='part' id='img_block'><img src="../images/" alt=""></div> 
                 <div class='part'>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos doloremque, hic ut velit ratione delectus quibusdam eum dolorem optio omnis, error commodi porro vitae labore. Obcaecati ut vitae necessitatibus maiores!</p>
                 </div>
                 
                </div>      
              </div>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe sequi laborum, sit doloremque adipisci beatae. Blanditiis nihil dolorum esse, ratione facilis veniam iste mollitia, vel iusto quia officiis assumenda necessitatibus.</p>
              
            </div>
            <div class='mission_section'>
              <p class='header'>Famous Missions</p>
              <div class='section_btm'>
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
 
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                  </div>
                                 
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class='mock'>
                        <div class='item' id='first_item'></div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class='mock'>
                        <div class='item' id='second_item'></div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class='mock'>
                        <div class='item' id='third_item'></div>
                      </div>
                    </div>
                  </div>
                
                   <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                   </button>
                  </div>
                </div>
              </div>
            </div>
             
          <footer class="container">
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
          </footer>
        </div>
     </div>
   
</body>
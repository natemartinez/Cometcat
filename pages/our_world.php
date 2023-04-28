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
                    <a class='dropdown-btn' id="firstItem" href="#">Our World<i class="fa fa-caret-down"></i></a>
                    
                    <div class="dropdown-container" id='ow_dropdown'>
                      <a href="#">Overview</a>
                      <a href="#">Phenomenons</a>
                      <a href="#">Fun Facts</a>
                    </div>
                </li>
                <li>
                    <a id="secondItem" href="space_neighbors.php">Our Space Neighbors</a> 
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
                <img id='desert_img' src="../images/ocean.jpg" alt="desert">
                <img id='mountains_img' src="../images/clouds.jpg" alt="mountains">
                <div id='header_pg'>
                  <h1>The Blue Marble</h1>
                </div>
             </div>

             <div class='gl_header'>
                <p class='text-left'>The</p>           
                <p class='text-center'>Goldilocks</p>           
                <p class='text-right'>Zone</p>           
             </div>

             <div class='gl_content_box'>
                 <p id='gl_first_text'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eos dignissimos aliquid assumenda libero tenetur minus perspiciatis, incidunt cupiditate quas expedita soluta deleniti officiis odio. At inventore veniam dolorum pariatur?</p>
                 <img id='sunrise' src="../images/sunrise.jpg" alt="sunrise">  
                 <img id='soup_pic' src="../images/soup.jpg" alt="soup">
                 <p id='gl_second_text'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi deserunt ducimus odio at inventore unde! Culpa eum similique nemo sunt. Quas, eligendi? Iure a labore suscipit delectus blanditiis aut saepe.</p>  
                          
             </div>

             <div class='life_content'>
               <div></div>
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
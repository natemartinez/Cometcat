
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CometCat</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        
            <button type="button" id="sidebarCollapse" class="btn btn-info" title="toggle_sidebar">
                   <i class="fas fa-align-left"></i>   
             </button>
      
        <div id="content">
           <header id='header-banner'class="container-fluid" style="position:relative;">
             <img src="images/space_long.jpg" alt="stars" class="wallpaper">
             <div class="header-logo logo-grow"><img src="images/logo.png" alt="cat jumping over words" id="logo"></div>
           </header>

          <nav id="sidebar">
            <div class="sidebar-header"></div>
            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#">Home</a>
                </li>
                <li>
                    <a id="firstItem" href="pages/our_world.php">Our World</a>
                </li>
                <li>
                    <a id="secondItem" href="/pages/space_neighbors.html">Our Space Neighbors</a>
                   
                </li>

                <li>
                    <a id="thirdItem" href="">Far Far Away</a>
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

           <div class='row d-flex mx-auto'id="weather-container">  
           <div class='col-md-4 bg-dark weather-widget mt-5' id='current-widget'>
              <h3 class="text-center mt-3 text-white">Current</h3>
              <div id="cur-condition-img"></div>
              <p id="cur-degrees"></p>
              <p id="cur-condition"></p>
           </div>
           
           <div class='col-md-1'></div>   
           <div class='col-md-7 bg-dark weather-widget mt-5' id='forecast-widget'>
              <h3 class="text-center mt-3 text-white" id="forecast-header" >Hourly Forecast</h3>
              <div class='row' id="forecast-pockets">
               <div class='col-sm-3'>
               <div class='icon' id="icon-one"></div>
               <p class='temp' id='temp-one'></p>
               <p class='condition' id='condition-one'></p>
               <p class='time' id='hour-one'></p>
               </div>
               <div class='col-sm-3'>
               <div class='icon' id="icon-two"></div>
               <p class='temp' id='temp-two'></p>
               <p class='condition' id='condition-two'></p>
               <p class='time' id='hour-two'></p>
               </div>
               <div class='col-sm-3'>
               <div class='icon' id="icon-three"></div>
               <p class='temp' id='temp-three'></p>
               <p class='condition' id='condition-three'></p>
               <p class='time' id='hour-three'></p>
               </div>
               <div class='col-sm-3'>
               <div class='icon' id="icon-four"></div>
               <p class='temp' id='temp-four'></p>
               <p class='condition' id='condition-four'></p>
               <p class='time' id='hour-four'></p>
               </div>
             </div>
           </div>
           <div class='col-md-1'></div>
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
    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>

<?php
  

?>
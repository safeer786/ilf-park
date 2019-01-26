<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
      <link rel = "stylesheet"
         type = "text/css"
         href = "ilf.css" />
      <script type="text/javascript">
         function showdiv(selfid, divname)
         {
           $("#gh").removeClass("active-heading");
           $("#eat").removeClass("active-heading");
           $("#sleep").removeClass("active-heading");
           $("#"+selfid).addClass("active-heading");
           
           $("#get-here-div").hide();
           $("#eat-div").hide();
           $("#sleep-div").hide();
           $("#"+divname).show();
         }
      </script>
   </head>
   <body>
      <div class="page">
         <section id="head" class= "container-fluid pl-0 pr-0">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="min-width:100% ; z-index: -1;min-height: 100%;">
               <source src="video.mp4" type="video/mp4">
               
               </video>  
            <div class="overlay">
               <header>
                  <!-- Navigation -->
                  <nav class="navbar navbar-expand-lg navbar-light navbar-trans static-top">
                     <div class="container">
                        <a class="navbar-brand d-none d-lg-block" href="#">
                        <img src="logo_white.png" alt="logo" style="max-width: 70; height: 70px;">
                        </a>
                        <div>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button> 
                        </div>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="#">About
                                 <span class="sr-only">(current)</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">schedule</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Events</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Help</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Contact</a>
                              </li>
                              <li class="nav-item">
                                 <a><button id="reg-btn1" class="btn btn-danger">Register Now</button></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </nav>
               </header>
            </div>
         </section>
         <section id="welcome" class="container-fluid">
            <div class=row>
               <div class="col-12">
                  <h1 class="welcome-head"> Welcome to the ILF parking system</h1>
                  <p id="welcome-para">To alot a parking spot click on the spot and 
                     alot to the employee. Green Light shows the spot is free Red 
                     means it is already aloted and orange means it is reserved for 
                     half day<br><br>
                     This is just an admin view Happy Aloting !!.
                  </p>
               </div>
            </div>
         </section>
         <section id="parking" class="container-fluid">
            <div class=row>
               <?php
               for(i = 1 ; i < 11; i++)
               {
               ?>
                  <div class="col-lg-2 col-4 ml-4">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-12 offset-4">
                              <button class="button"></button>
                           </div>
                        </div>
                     
                        <div class="row">
                           <div class="col-12">
                              <img src="open.png" id="location-<?php echo $i ?>" data-toggle="modal" data-target="#myModal" onclick="$('#plocation').val(this.id);" style="width: 100%;padding-left: 0;" >
                           </div>
                        </div>
                     </div>   
                     
                  </div>
               <?php
               }
               ?>
               <!--    2nd -->
               <div class="col-lg-2 col-4 ">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    3nd -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    4th -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    5th -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               
            </div>
            <!--    end row 1 -->
         <div class="container-fluid">
            <div class=row>
               <div class="col-lg-2 offset-lg-1 col-4 offset-2">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    2nd -->
               <div class="col-lg-2 col-4 ">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    3nd -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    4th -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               <!--    5th -->
               <div class="col-lg-2 col-4 d-none d-lg-block">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12 offset-4">
                           <button class="button"></button>
                        </div>
                     </div>
                  </div>
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-12">
                           <img src="open.png" style="width: 100%;padding-left: 0;" >
                        </div>
                     </div>
                  </div>   
                  
               </div>
               
            </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
               <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title left">Reserve Parking Location</h4>
                      <button type="button" class="close right" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <form class="modal-content" action="/action_page.php">
                         <div class="container">
                           <h1>Reservation Details</h1>
                           <p>Please fill in this form to make a reservation.</p>
                           <hr>
                           <div class="form-group">
                              <label for="emp-id"><b>Employee ID</b></label>
                              <input class="form-control" type="text" placeholder="Enter Employee ID" name="emp-id" required>
                           </div>
                           <div class="form-group">
                              <label for="plocation"><b>Parking Location</b></label>
                              <input class="form-control"  type="text" placeholder="Parking Location (will be pre-filled)" id="plocation" name="plocation" required>
                           </div>
                           <div class="form-group">
                              <label for="res-action"><b>Reservation Action</b></label>
                              <select class="form-control"   placeholder="Repeat Password" name="res-action" required>
                                 <option value="full">Full Day</option>
                                 <option value="half-1">Half Day (1st half)</option>
                                 <option value="half-2">Half Day (2nd half)</option>
                                 <option value="cancel">Cancel Reservation</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <h3>Reservation Date</h3>
                              <label for="fromdate"> From
                                <input class="form-control"  type="date" name="fromdate" />
                              </label>
                              <label for="todate"> To
                                <input class="form-control"  type="date" name="todate" />
                              </label>
                           </div>

                           
                           <div class="clearfix">
                             <button type="submit" class="btn btn-success submitbtn">Submit</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                         </div>
                       </form>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                  </div>
                  
               </div>
            </div> 
         </section>
         
      </div>
   </body>
</html>
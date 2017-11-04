<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hospital Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
     // margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      max-height:400px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  
  #t2
  {
	  background-color:lightblue;
  }
  #t1{
	  color:red;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Medical Center</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="alogin.php"><span class="glyphicon glyphicon-user"></span>  Admin Login</a></li>
        <li><a href="dlogin.php"><span class="glyphicon glyphicon-log-in"></span> Doctor Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="2.jpg" alt="Image">
        <div class="carousel-caption">
          <p>Hospital</p>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="11.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Hospital</h3>
        </div>      
      </div>
	  
	  <div class="item">
        <img src="12.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Hospital</h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3></h3><br>
  <div class="row">
    <div class="col-sm-4">
	  <div class="well" id="t2">
       <span class="glyphicon glyphicon-tint"></span>
	   <p id="t1">EMERGENCY CASE</p>
	   In case of an emergency, You can contact anytime to the doctor.
      </div>
	</div>
	
    <div class="col-sm-4"> 
	 <div class="well" id="t2">
	  <span class="glyphicon glyphicon-time"></span>
      <p id="t1">OPENING HOURS</p>
       Monday-Friday	:  8:00 to 20:00<br/>
	   Saturday-Sunday  :  9:30 to 18:30
       	   
     </div>
	</div>
	
    <div class="col-sm-4">
      <div class="well" id="t2">
	  <span class="glyphicon glyphicon-tint"></span>
       <p id="t1">CANCER CASE</p>
	   If there is a cancer case,then contact the hsospital ASAP.
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <h3>Book an Appointment</h3>
  
</footer>

</body>
</html>

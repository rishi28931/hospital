<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
    .navbar {
		margin-top: 10px;
      margin-bottom: 50px;
      border-radius: 0;
    }
    
     .jumbotron {
      margin-bottom: 0;
	  background-image:url("17.jpg");
	  background-size:100%100%;
	  height:300px;
	  color:maroon;
    }
   
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

<body>

<div class="jumbotron">
  <div class="container text-center">
         
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
	  </button>
       <a class="navbar-brand" href="#">Medical Centre</a>		
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Add Doctor</a></li>
        <li><a href="#">Update Doctor Details</a></li>
        <li><a href="#">Add Patient</a></li>
        <li><a href="#">View All Patients</a></li>
        <li><a href="#">Discharge Patient</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
 </div> 

<footer class="container-fluid text-center">
  <p>Hospital Management System</p>  
</footer>

</body>
</html>

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
        <li class="active"><a href="adminmodule.php">Add Doctor</a></li>
        <li><a href="updatedctr.php">Update Doctor Details</a></li>
        <li><a href="addpatient.php">Add Patient</a></li>
        <li><a href="viewall.php">View All Patients</a></li>
        <li><a href="discharge.php">Discharge Patient</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container"> 
  <fieldset>
    <form action="adddctr_b.php" method="post">
  <div class="form-group">
    <label for="doctorid">DOCTOR ID</label>
    <input type="alphanumeric" class="form-control" name="dctrid" placeholder="specific id" required="required"/>
  </div>
  <div class="form-group">
    <label for="doctorname">DOCTOR NAME</label>
    <input type="text" class="form-control" name="dname" placeholder="name"required="required"/>
  </div>
  <div class="form-group">
    <label for="email id">EMAIL</label>
    <input type="alphanumeric" class="form-control" name="email" placeholder="email id"/>
  </div>
  <div class="form-group">
    <label for="contact no">CONTACT NO</label>
    <input type="int" class="form-control" name="contactno" placeholder="contact no" required="required"/>
  </div>
  <div class="form-group">
    <label for="password">PASSWORD</label>
    <input type="alphanumeric" class="form-control" name="psw" placeholder="password"/>
  </div>
  <div class="form-group">
    <label for="specialisation">SPECIALITY</label>
    <input type="text" class="form-control" name="speciality" placeholder="field" />
  </div>
  <div class="form-group">
  <button class="btn form-control text-submit btn-primary"> submit </button>
</div>

</form>
</fieldset>
</div> 

<footer class="container-fluid text-center">
  <p>Hospital Management System</p>  
</footer>

</body>
</html>

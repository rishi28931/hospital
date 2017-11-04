<?php?>
<html lang="en">
<head>
<style>
.imgg{
    width: 100%;
    height: 440px;
    background-image: url('7.jpg');
    background-size: 100%100%;
	margin-top:0px;
    //border: 1px solid red;
}
.jumbotron
{   margin-top:70px;
	height:300px;
	background-image:url("5.jpg");
}
.head
{   
    //margin-top:0px;
	color:skyblue;
} 
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="imgg"> 
 <div class="container">
 <div class="jumbotron">
  <form class="form-horizontal" action="checklogin.php" method="post">
  <div class="head">
  <h2><center>Admin Login</center></h2>
  </div>
  <div class="form-group" >
    <label for="inputEmail3" class="col-sm-4 control-label"></label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="uname" placeholder="Username">
    </div>
	<div class="col-sm-4">
	</div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label"></label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="psw" placeholder="Password">
    </div>
	<div class="col-sm-4">
	</div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
     <center> <button type="submit" class="btn btn-success">Sign in</button></center>
    </div>
  </div>
</form>
</div>
</div>
</div>
</body>
</html>
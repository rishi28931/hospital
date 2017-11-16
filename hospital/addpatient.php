<?php?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class ="container">
      <fieldset>
    <form action="addpatient_b.php" method="POST">
  <div class="form-group">
    <label for="patientid">PATIENT ID</label>
    <input type="alphanumeric" class="form-control" name="pid" placeholder="specific id"/>
  </div>
  <div class="form-group">
    <label for="patientname">PATIENT NAME</label>
    <input type="text" class="form-control" name="pname" placeholder="name"/>
  </div>
  <div class="form-group">
    <label for="email id">EMAIL</label>
    <input type="email" class="form-control" name="email" placeholder="email id"/>
  </div>
  <div class="form-group">
    <label for="contact no">CONTACT NO</label>
    <input type="int" class="form-control" name="cno" placeholder="contact no"/>
  </div>
  <div class="form-group">
    <label for="roomtype">ROOM TYPE</label>
    <input type="text" class="form-control" name="rtype" placeholder="room type"/>
  </div>
  <div class="form-group">
    <label for="date">DATE OF ADMIT</label>
    <input type="date" class="form-control" name="date" placeholder="date"/>
  </div>
  <div class="form-group">
  <button class="btn form-control text-submit btn-primary"> SUBMIT </button>
</div>

</form>
</fieldset>
</div>


    </body>
</html>

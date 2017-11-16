<?php?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class ="container">
      <fieldset>
<form action="adddctr_b.php" method="post">
  <div class="form-group">
    <label for="doctorid">DOCTOR ID</label>
    <input type="alphanumeric" class="form-control" id="doctorid" placeholder="specific id"/>
  </div>
  <div class="form-group">
    <label for="doctorname">DOCTOR NAME</label>
    <input type="text" class="form-control" id="dname" placeholder="name"/>
  </div>
  <div class="form-group">
    <label for="email id">EMAIL</label>
    <input type="alphanumeric" class="form-control" id="email" placeholder="email id"/>
  </div>
  <div class="form-group">
    <label for="contact no">CONTACT NO</label>
    <input type="int" class="form-control" id="contactno" placeholder="contact no" required/>
  </div>
  <div class="form-group">
    <label for="password">PASSWORD</label>
    <input type="alphanumeric" class="form-control" id="psw" placeholder="password" required/>
  </div>
  <div class="form-group">
    <label for="specialisation">SPECIALITY</label>
    <input type="text" class="form-control" id="speciality" placeholder="field"/>
  </div>
  <div class="form-group">
  <button class="btn form-control text-submit btn-primary"> SUBMIT </button>
</div>

</form>
</fieldset>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  $username = $_POST['uname'];
  $password = $_POST['psw'];
  mysql_connect('localhost','root','');
  mysql_select_db("hospital");

$query="SELECT * FROM ad_login WHERE username='$username' and password='$password'";

$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	print '<script>window.location.assign("adminmodule.php");</script>';
}
else
{   print '<script>alert("Invalid Admin Username/Password");</script>';
	print '<script>window.location.assign("alogin.php");</script>';
}
?>
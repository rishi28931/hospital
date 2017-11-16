<?php
   session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:home.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       $dctrid = $_POST['dctrid'];
	   $dname = $_POST['dname'];
       $email = $_POST['email'];
	   $contactno = $_POST['contactno'];
	   $psw = $_POST['psw'];
	   $speciality = $_POST['speciality'];
   
       mysql_connect("localhost","root",""); 
       mysql_select_db("hospital");

       mysql_query("INSERT INTO add_dctr(doctorid,dname,email,contactno,psw,speciality) VALUES ('$dctrid','$dname','$email','$contactno','$psw','$speciality')"); 
	    header("location:adminmodule.php");
    }
    else
    {
       header("location:adminmodule.php");
	}
?>
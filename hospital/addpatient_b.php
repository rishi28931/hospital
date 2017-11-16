<?php
   session_start();
    if($_SESSION['user']){
    }
    else{ 
       header("location:home.php");
    }
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
       $pid = $_REQUEST['pid'];
	   $pname = $_REQUEST['pname'];
       $email = $_REQUEST['email'];
	   $cno = $_REQUEST['cno'];
	   $rtype = $_REQUEST['rtype'];
	   $date = $_REQUEST['date'];
   
       mysql_connect('localhost','root',''); 
       mysql_select_db("hospital");

       mysql_query("INSERT INTO add_patient(pid,pname,email,cno,rtype,date) VALUES ('$pid','$pname','$email','$cno','$rtype','$date')"); 
	    header("location:adminmodule.php");
    }
    else
    {
       header("location:adminmodule.php");
	}
?>
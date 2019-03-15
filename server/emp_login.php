<?php

include "db.php";
session_start();



/*session_start();
if(!isset($_SESSION['username'])){
    header("Location:login/login.php");
}*/

if(isset($_POST['submit']))
{
	 $email = $_POST['email'];
	
	$password = $_POST['password'];

	$email = mysqli_real_escape_string($connect,$email);
	$password = mysqli_real_escape_string($connect,$password);

	$qu = "SELECT * FROM emp_reg where mail = '{$email}'";
	$wer = mysqli_query($connect,$qu);
/*
	if($wer){
		echo " welcome ".$username;
	}else{
		echo "sorry";
	}*/

	while($Row = mysqli_fetch_array($wer)){
		$name= $Row['emp_name'];
		$dbemail  = $Row['mail'];
		$dbpasswrd = $Row['pswd']; 
		
	}

if($email == $dbemail && $password ==  $dbpasswrd) {
		$_SESSION['email'] = $email;
		
		echo "hhh";
	}else{
		echo "sryy";
	}





}







?>
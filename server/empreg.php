<?php
include('db.php');

 $car=$_POST['car_id'];
 $name=$_POST['name'];
 $pass = $_POST['password'];
 $mail=$_POST['email'];
 $phone=$_POST['phone'];


$connect = mysqli_connectect("localhost","root","");
mysqli_select_db($connectect,'fuel');
if (!$connect) {
    die("connectection failed: " . mysqli_connectect_error());
}
$sql = "INSERT INTO emp_reg(car_id,emp_name,mail,pswd,phone) VALUES('$car','$name','$mail','$pass','$phone')";

if (mysqli_query($connect, $sql)) {
      
} else {
			 echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>

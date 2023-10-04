<?php
$name=$_GET['n'];
$con=mysqli_connect("localhost","root","","boardminder");
$que="DELETE FROM user_tb where name='$name'";
$re=mysqli_query($con,$que);
header("location:user.php");
?>

<?php
$name=$_POST["sname"];
$add=$_POST["saddress"];
$course=$_POST["course"];
$phone=$_POST["sphnumber"];
include "config.php";
$sql="INSERT INTO student(course_id,saddress,sname,sphnumber) VALUES ('{$course}','{$add}','{$name}','{$phone}')";
$result=mysqli_query($conn,$sql) or die("query failed");
mysqli_close($conn);
header("location:http://localhost/DBMS%20Project/home.php");
 ?>

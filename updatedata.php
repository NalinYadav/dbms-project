<?php
    include "config.php";

    $id=$_POST["sid"];
    $name=$_POST["sname"];
    $add=$_POST["saddress"];
    $cid=$_POST["course_id"];
    $sph=$_POST["sphnumber"];

    $sql="UPDATE student SET sname='{$name}',saddress='{$add}',course_id='{$cid}',sphnumber='{$sph}' where sid='{$id}'";

    $result=mysqli_query($conn,$sql) or die("query failed");
    mysqli_close($conn);
    header("location:http://localhost/DBMS%20Project/home.php");
 ?>

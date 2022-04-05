<?php
    include "config.php";
    $id=$_GET["id"];
    $sql="DELETE FROM student WHERE sid={$id}";
    $result=mysqli_query($conn,$sql) or die("query failed");
    mysqli_close($conn);
    header("location:http://localhost/DBMS%20Project/home.php");
 ?>

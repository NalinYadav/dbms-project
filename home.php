<?php
    include "header.php";
?>

<div class="main-content">
  <h2>All Students Record</h2>
  <?php
      $conn=mysqli_connect("localhost","root","","student_system") or die("connection failed");
      $sql= "SELECT* FROM student JOIN student_class where student.course_id=student_class.cid";
      $result=mysqli_query($conn,$sql) or die("query failed");
      if(mysqli_num_rows($result)>0){
        ?>
        <table cellpadding="7px">
          <thead>
            <th>ID</th>
            <th>Student Name</th>
            <th>Address</th>
            <th>Course</th>
            <th>Mobile</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
                  while($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                        <tr>
                          <td><?php echo $row["sid"];?></td>
                          <td><?php echo $row["sname"];?></td>
                          <td><?php echo $row["saddress"];?></td>
                          <td><?php echo $row["course_name"];?></td>
                          <td><?php echo $row["sphnumber"];?></td>
                          <td>
                               <a href="edit.php?id=<?php echo $row['sid'];?>">edit</a>  <a href="delete.php?id=<?php echo $row['sid']?>;">delete</a>

                          </td>

                        </tr>
                    <?php
                  }
             ?>
          </tbody>
        </table>
        <?php
      }
      else{
        echo "<h2>NO Record Found!</h2>";
      }
      mysqli_close($conn);
   ?>

</div>

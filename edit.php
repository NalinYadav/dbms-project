<?php
    include "header.php";

 ?>

 <div class="main-content">

    <h2>Update Student Record</h2>
    <?php
        include "config.php";
        $id=$_GET["id"];
        $sql="SELECT* FROM student where sid={$id}";
        $result=mysqli_query($conn,$sql) or die("query failed");

        if(mysqli_num_rows($result)>0)
        {
          while($row=mysqli_fetch_assoc($result)){
            ?>
            <form action="updatedata.php" method="post" class="post-form">
              <div class="form-group" >
                  <label for="">Name</label>
                  <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
                  <input type="text" name="sname" value="<?php echo $row['sname'] ;?>" />
              </div>
              <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" name="saddress" value="<?php echo $row['saddress'] ;?>">
              </div>
              <div class="form-group" class="post-form">
                  <label for="">Course ID</label>

                      <?php
                            include "config.php";
                            $sql1="Select* from student_class";
                            $result1=mysqli_query($conn,$sql1) or die("query failed");
                            if(mysqli_num_rows($result1)>0){
                              echo '<select name="course_id" id="">';
                            while($row1=mysqli_fetch_assoc($result1)){
                                  if($row1["cid"]==$row["course_id"])
                                  {
                                    $select="selected";
                                  }
                                  else {
                                    $select="";
                                  }
                                echo  "<option {$select} value='{$row1['cid']}'>{$row1['course_name']}</option>";

                            }
                            echo "</select>";
                          }
                       ?>


              </div>
              <div class="form-group">
                  <label for="">Phone No.</label>
                  <input type="text" name="sphnumber" value="<?php echo $row["sphnumber"] ;?>">
              </div>
              <input type="Submit" class="Submit" value="Save" action="updatedata.php">
            </form>
         </div>
            <?php
          }
        }
        else {
          echo "no data found!";
        }
     ?>

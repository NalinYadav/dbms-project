<?php
    include "header.php";

 ?>

 <div class="main-content">

    <h2>Update Student Record</h2>
    <form action="updatedata.php" method="post" class="post-form">
      <div class="form-group" >
          <label for="">Name</label>
          <input type="text" name="sname">
      </div>
      <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="saddress">
      </div>
      <div class="form-group" class="post-form">
          <label for="">Course ID</label>
          <select class="" name="course">
              <option value="" selected disabled>Select Course</option>

              <?php
                    include "config.php";
                    $sql="Select* from student_class";
                    $result=mysqli_query($conn,$sql) or die("query failed");
                    while($row=mysqli_fetch_assoc($result)){
                      ?>
                          <option value="<?php echo $row["cid"]; ?>"><?php echo $row["course_name"] ?></option>
                      <?php
                    }
               ?>
          </select>

      </div>
      <div class="form-group">
          <label for="">Phone No.</label>
          <input type="text" name="sphnumber">
      </div>
      <input type="Submit" class="Submit" value="Save">
    </form>
 </div>

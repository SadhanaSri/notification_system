<?php
    include("login.php");
    include("config.php");
   

    $sql = "SELECT course_id FROM student_course WHERE id=".$active;
    $result = mysqli_query($db, $sql);
              
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $sql = "SELECT status FROM notification_data WHERE course_id=".$row['course_id'];
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active1 = $row['status'];
        if($active1 == 0) {
            $sql = "SELECT description FROM notification_data WHERE course_id=".$row['course_id'];
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo $row['description'];
        }
        else {
          echo "No new notifications";
        }
      }
    } 
?>
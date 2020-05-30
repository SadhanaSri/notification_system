<?php
	include("config.php");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['id'];
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
   		$sql = "SELECT name FROM users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        // echo $row['name'];
        header("Location:notification.php?user=".$row['name']."&id=".$active);

    } else {
         $error = "Your Login Name or Password is invalid";
      }
?>
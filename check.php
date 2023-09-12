<?php
include 'connection.php';

if (isset($_POST['username'])) {

  $sql = "SELECT * FROM `usertable` WHERE username = '".$_POST["username"]."'";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo '<span class = "text-danger">Username not available</span>';
  } else {
    echo '<span class = "text-success">Username available</span>';
  }
}

?>
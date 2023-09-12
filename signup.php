<?php

// Directory to the database connection
include 'connection.php';

if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $srcode = $_POST['srcode'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $sql = "INSERT INTO `usertable` (fullname, srcode, email, username, password_hash)
          VALUES('$fullname', '$srcode', '$email', '$username', '$password_hash')";

  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . mysqli_error($con);
  }
}

?>

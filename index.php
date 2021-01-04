<?php
// To connect to db we can either use... MySQLi (allows for use of db in a more prodedural manner) or PDO (PHP Data Objects)

// connecting to db (mysqli_connect takes in host, user, password, and db)
$conn = mysqli_connect("localhost", "root");

// check connection
if (!$conn) {
  echo 'Connection error ' . mysqli_connect_error();
} else {
  // print_r($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <?php echo 'Welcome to the Home Page!'?>
  <?php include('templates/footer.php'); ?>
  <?php include('sandbox.php'); ?>
  
</html>

<?php
// creating variables
  $name = 'Anh';
  $age = 27;

// creating constants
  define('PI', 3.14); // redefining 'PI' will cause an error
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>my first php file</title>
</head>
<body>

  <h1><?php echo 'hello, world';?></h1>
  <p><?php echo 'my name is ' . $name;?></p>
  <p><?php echo 'i am ' . $age . ' years old'; ?> </p>
  <p><?php echo 'the value of pi is ' . PI; ?></p>
</body>
</html>

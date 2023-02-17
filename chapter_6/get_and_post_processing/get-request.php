<?php 
  $city = isset($_GET['city']) ? $_GET['city'] : '';

  if(!$city) {
    echo "<p style=\"color: red; font-weight: bold;\">Error!</p>";
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Request</title>
</head>
<body>
  <?= "<p>Hello from $city!</p>" ?> 
</body>
</html>
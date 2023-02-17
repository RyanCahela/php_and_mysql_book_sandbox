<?php
  $username = isset($_POST['username']) ? filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS):  "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?= $username ?></p>
  <p><?= $password ?></p>
  <p><?= $_POST['submit'] ?></p>

  
</body>
</html>
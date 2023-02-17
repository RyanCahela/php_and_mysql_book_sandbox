<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
  <h1>Chapter 6 - Get and Post Processing</h1>
  <h2>Get Request</h2>
    <ul>
      <li><a href="get-request.php/?city=London">London</a></li>
      <li><a href="get-request.php/?city=Los+Angeles">Los Angeles</a></li>
      <li><a href="get-request.php/?city=New+York+City">New York City</a></li>
    </ul>
  <h2>Post Request</h2>
  <form action="post-request.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"/>
    <label for="password">Password</label>
    <input type="password" id="password" name="password"/>
    <button type="submit" name="submit">Submit</button>
  </form>

  
</body>
</html>
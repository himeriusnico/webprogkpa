<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - Cookie and Session</title>
</head>

<body>
  <?php
  setcookie("myCookie", "Ini Cookie Saya");

  echo $_COOKIE["myCookie"]
  ?>
</body>

</html>
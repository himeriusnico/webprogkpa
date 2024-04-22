<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - Latihan Logout</title>
</head>

<body>
  <?php
  setcookie("nrp", "", time() - 3600);

  header("location: latihan.php");
  ?>
</body>

</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - Latihan 2-3</title>
</head>

<body>
  <?php
  unset($_SESSION['daftar_buah']);

  session_destroy();
  ?>
  <a href="latihan2.php">Back to page one</a>
</body>

</html>
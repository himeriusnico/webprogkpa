<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - latihan 2-2</title>
</head>

<body>
  <?php
  $buah = $_POST["buah"];
  //mengambil data dari session 
  if (isset($_SESSION["daftar_buah"])) {
    $var_buah = $_SESSION["daftar_buah"];
  } else {
    $var_buah = array();
  }
  //menambahkan buah 
  $var_buah[] = $buah;
  //menampilkan buah
  echo "<ul>";
  foreach ($var_buah as $key => $value) {
    echo "<li>$value</li>";
  }
  echo "</ul>";
  //menyimpan kembali ke session  
  $_SESSION["daftar_buah"] = $var_buah;
  ?>
  <a href="latihan2.php">Back to page one</a>
  <a href="latihan2-3.php">Reset Daftar</a>
</body>

</html>
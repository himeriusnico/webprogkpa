<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - Latihan Proses</title>
</head>

<body>
  <?php
  $user = $_POST["user"];
  $pass = $_POST["pass"];

  if ($pass == "123456") {
    setcookie("nrp", $user, time() + 60);

    header("location: latihan-home.php");

    echo "Sukses";
  } else {
    echo "Error";
  }
  ?>
</body>

</html>
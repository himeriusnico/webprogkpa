<?php
//harus ada diatas sblm masuk html session butuh namanya session start
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 7 - Session</title>
</head>

<body>
  <?php
  setcookie("myCookie", "Ini Cookie Saya", time() + 30); //cookies jeleknya dia butuh sekali loading time
  //pake cookies saat ingin tersimpan di localhost
  //cookie ada time nya
  $_SESSION["mySession"] = "Ini Session Saya"; //otomatis berakhir sampe web tertutup

  echo $_SESSION["mySession"];
  echo $_COOKIE["myCookie"]
  ?>
</body>

</html>
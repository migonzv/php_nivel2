<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  function foo(&$var) {
    $var++;
  }

  $a=5;
  foo($a);
  echo $a; // $a es 6 aquí
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $personas = array(
    "pepe" => "Mexico",
    "john" => "USA",
    "maria" => "venezuela"
  );
  foreach($personas as $persona => $pais) { 
    print "$persona es de $pais<br>"; 
  }
?>
</body>
</html>
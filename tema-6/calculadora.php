<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Document</title>
</head>
<body>
<?php  include "./funcion.php";?>
  <form action="" method="POST">
    <h3>Calculadora</h3>
    <input class="text" type="text" name="num1">
    <input class="text" type="text" name="num2">
    <div>
      <input type="submit" value="+" name="operacion">
      <input type="submit" value="-" name="operacion">
      <input type="submit" value="*" name="operacion">
      <input type="submit" value="/" name="operacion">
    </div>
    <div>
      <input type="submit" value="^2" name="operacion">
      <input type="submit" value="^3" name="operacion">
      <input type="submit" value="Raiz" name="operacion">
    </div>
    <h2>Resultado: <?php echo calculo(@$_POST['num1'], @$_POST['num2'], @$_POST['operacion']); ?></h2>
  </form>
</body>
</html>
<?php
    require_once("Quadrado.php");

    if($_REQUEST){
        $ladoA = $_REQUEST["ladoA"];
        $ladoB = $_REQUEST["ladoB"];

        $area = new Quadrado();

        $area->ladoA = $ladoA;
        $area->ladoB = $ladoB;

        $resultado = $area->calculaArea();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="" action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="ladoA">Lado A</label>
            <input type="text" class="form-control" name="ladoA" id="ladoA">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-4">
            <label for="ladoB">Lado B</label>
            <input type="text" class="form-control" name="ladoB" id="ladoA">
          </div>
        </div>
        <div class="form-group col-md-12">
          <div class="col-md-2">
            <button type="submit" class="form-control btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </form>
    <?php if($_REQUEST): ?>
    <div class="col-md-12">
        <div class="col-md-12 alert alert-success">
        <p><?= "A área do quadrado é: " . $resultado ?></p></div>
    </div>
    <?php endif; ?>
</body>
</html>
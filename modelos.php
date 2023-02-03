
<!DOCTYPE html>
<html>
<head>
    <style>
        figure {
            border: 1px #cccccc solid;
            padding: 4px;
            margin: auto;
        }

        figcaption {
            background-color: navy;
            color: white;
            font-weight: bolder;
            font-style: italic;
            padding: 2px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    require "client.php";
    $marca = $_GET['marca'];
    $modelos = $client->ObtenerModelosPorMarca($marca);
    foreach($modelos as $modelo){ 
    ?>
<h1>Modelos disponibles marca: <?=$_GET['marca']?></h1>
    <figure>
        <img src="images/<?=strtolower($_GET['marca'])?>.png" alt="logo <?=strtolower($_GET['marca'])?>" width="200" />
        <figcaption><?=$modelo['modelo']?></figcaption>
    </figure>
    <?php
    }
    ?>
</body>
</html>


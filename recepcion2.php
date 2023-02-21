<?php
$Charmander=$_POST["Pokémon2"];

if ($Charmander == "Charmander"){
    session_start();
    $_SESSION['PokéOk'] = $Charmander;
    header ("location: recepcion2.php");
    session_destroy();
}
else{
    echo "Lo sentimos fallaste. Vuelve a intentarlo.";
    echo "Te doy una pista. Su tercera evolucion es Charizard";
    header ("location:recepcion.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/pikachu-icono.png">
    <link href="estilo.css" rel="stylesheet" type="text/css">
    <title>EL POKÉMON MISTERIOSO</title>
</head>
<body>
<p>Hola entrenador Pokémon</p>
<p>Volviste a acertar. Seguro que has hecho trampas!</p>
<img class="imagen" src="./img/oak-png.png">
<p>Aquí tienes a Charmander. Seguro que lo elegiste en el Rojo Fuego.</p>
<img class="imagen" src="./img/charmander-png.png">
<p>Este Pokémon nace con una llama en la punta de la cola. Si la llama se apagara, el Pokémon se debilitaría.</p>
<br>
<p><a href="index.php">Pulsa aquí para volver al índice.</a></p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
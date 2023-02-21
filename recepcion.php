<?php
$Pikachu=$_POST["Pokémon1"];
if ($Pikachu == "Pikachu"){
    session_start();
    $_SESSION['PokéOk'] = $Pikachu;
    header ("location: recepcion.php");
}
else{
    echo "Lo sentimos fallaste. Vuelve a intentarlo.";
    echo "Te dejo una pista. Es el mejor amigo de Ash.";
    header ("location:index.php");
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
<p>Hola entrenador Pokémon.</p>
<p>Eres increïble. Como lo has acertado?</p>
<img class="imagen" src="./img/oak-png.png">
<p>Aquí tienes a Pikachu!</p>
<img class="imagen" src="./img/pikachu-png.png">
<p>Pokémon ratón. Mantiene su cola en alto para vigilar. Si das un tirón a su cola, querrá morderte.</p>
<br>
<p>Te dejo otro reto entrenador. A ver si eres capaz de adivinar en qué Pokémon pienso ahora.</p>
<form action="recepcion2.php" method="POST">
<p>¿Cuál crees qué es el Pokémon?</p>
<br>
<label>Introduce el Pokémon</label>
<input type="text" name="Pokémon2" required>
<br>
<button type="submit">ENVIAR LOS DATOS A OAK</button>
</form>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
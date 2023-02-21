<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/pikachu-icono.png">
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <title>EL POKÉMON MISTERIOSO</title>
</head>
<body>
<h1>EL POKÉMON MISTERIOSO</h1>
<p>Hola entrenador Pokémon! Debes adivinar en que Pokémon pienso. No serás capaz de vencerme!</p>
<img class="imagen" src="./img/oak-png.png">
<br>
<form action="recepcion.php" method="POST">
<p>¿Cuál crees qué es el Pokémon?</p>
<br>
<label>Introduce el Pokémon</label>
<input type="text" name="Pokémon1" required>
<button type="submit">ENVIAR LOS DATOS A OAK</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
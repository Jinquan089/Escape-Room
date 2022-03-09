<?php
    session_start();
    if (!($_SESSION["pag8"]=='check')) {
        header("Location: ./pagina8.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Final del Escape Room de Red</title>

    <!-- Estilo de texto -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body class="centrarTexto bodyfinal">
<form action="../direccion/Comprovacion.php" method="post">
<div>
    <h1>¡¡¡ Enhorabuena has ganado el juego !!!</h1>
    <br>
    <input type="submit" value="Volver a jugar" name="finalpag" class="buttonpag buttonpag-1">
</div>
</form>
</body>
</html>
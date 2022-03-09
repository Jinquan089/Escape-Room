<?php
    session_start();
    if (!($_SESSION["pag1"]=='check')) {
        header("Location: ./pagina1.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 2</title>
   <!-- Estilo de texto -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   
 
</head>
<body class="centradopagina">
    <h1 class="centrarTexto">192.168.15.32/24</h1>
    <br>
    <br>
    <p class="centrarTexto" id="textoAnimado">Pon la IP de Broadcast y la ID de red de la siguiente IP.</p>
    <br>
    <br>
    <br>
    <br>
    <br>
<form action="../direccion/Comprovacion.php" method="post">
    <div class="column-1pag2">
        <div style="text-align:center;" class="column-2pag2">
            <input type="text" name="ip1" placeholder="IP broadcast" id="IPbroad">
        </div>
        <div style="text-align:center;" class="column-3pag2">
            <input type="text" name="ip2" placeholder="ID de red" id="IDred">
        </div>
    </div>
    
        <br>
        <br>
        <br>
    <div style="text-align:center;">
        <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<div style='color:red'>Te has equivocado de respuesta </div>";
        }
        ?>
        <br>
        <br>
        <input type="submit" name="pag2" value="Enviar" class="buttonpag buttonpag-1">
    </div>
</form>
</body>
</html>
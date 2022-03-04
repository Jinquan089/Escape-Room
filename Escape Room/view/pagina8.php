<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 8</title>
<!-- Estilo de texto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="centradopagina">
<?php
    session_start();
    if (!($_SESSION["pag7"]=='check')) {
        header("Location: ./pagina7.php");
    }
?>
<div style="text-align:center;">
<form action="../direccion/Comprovacion.php" method="post">
    <h1>¿Cuántos bits tiene el host?</h1>
    <p>IP: 192.168.23.12</p>
    <p>MASK: 255.255.255.240</p> <!-- 4 bits -->
    <input type="text" name="host1" id="host1"> 
    <br>
    <br>
    <select name="host2" id="host2">
        <option value="1">Privada</option> <!-- Respuesta Correcta -->
        <option value="2">Publica</option> 
    </select>
    <p>IP: 173.24.51.23</p>
    <p>MASK: 255.255.255.192</p> <!-- 6 bits -->
    <input type="text" name="host3" id="host3">
    <br>
    <br>
    <select name="host4" id="host4">
        <option value="1">Privada</option> 
        <option value="2">Publica</option> <!-- Respuesta Correcta -->
    </select>
    <br>
    <br>

    <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<div style='color:red'>Te has equivocado de respuesta </div>";
        }
    ?>
    <br>
    <input type="submit" value="Enviar" name="pag8" class="buttonpag buttonpag-1">
</div>
</form>
</body>
</html>
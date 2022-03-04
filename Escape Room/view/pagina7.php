<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 7</title>
<!-- Estilo de texto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="centradopagina" class="centrarTexto" class="body7">
<?php
    session_start();
    if (!($_SESSION["pag6"]=='check')) {
        header("Location: ./pagina6.php");
    }
?>
<div style="text-align:center;">
<td><br></td>
    <td><br></td>
    <h1>¿Qué IP le pones a un router?</h1>
    
    <td><br></td>
    <form action="../direccion/Comprovacion.php" method="post">
    <select name="rt7" id="rt7" class="select-css">
        <option value="1">192.168.40.200/26</option>
        <option value="2">192.168.255.2/26</option>
        <option value="3">192.168.255.193/26</option> <!-- Respuesta Correcta -->
        <option value="4">192.168.255.192/26</option>
    </select>
    <td><br></td>
    <td><br></td>
    <h1>¿Qué IP le pones a un servidor?</h1>
    <td><br></td>
    <select name="srv7" id="srv7" class="select-css">
        <option value="1">192.168.40.255/24</option>
        <option value="2">192.168.255.250/30</option>
        <option value="3">192.168.255.254/26</option> <!-- Respuesta Correcta -->
        <option value="4">192.168.255.192/26</option>
    </select>
    <td><br></td>
    <br>
    <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<div style='color:red'>Te has equivocado de respuesta </div>";
        }
    ?>
    <br>
    <input type="submit" value="Enviar" name="pag7" class="buttonpag buttonpag-1">
</div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 6</title>

    <!-- Estilo de texto -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="body centradopagina">
<?php
    session_start();
    if (!($_SESSION["pag5"]=='check')) {
        header("Location: ./pagina5.php");
    }
?>
<div style="text-align:center;">
    <h1>160.120.5.26/16 </h1>
    <br>
    <p>Añade la primera y la última IP asignable.</p>
    <br>
    <br>
<form action="../direccion/Comprovacion.php" method="post">
        <input type="text" name="1a" placeholder="Primera IP ..."> <!-- 160.120.0.1 -->
        <br>
        <br>
        <br>
        <br>
        <input type="text" name="2a" placeholder="Última IP ..."> <!-- 160.120.255.254 -->
        <br>
        <br>
        <br>
        <br>
        <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<div style='color:red'>Te has equivocado de respuesta </div>";
        }
        ?>
        <br>
        <br>
        <br>
        <input type="submit" name="pag6" value="Enviar" class="buttonpag buttonpag-1">
</div>
</form>
</body>
</html>
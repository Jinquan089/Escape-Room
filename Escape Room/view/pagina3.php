<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 3</title>
 <!-- Estilo de texto -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="centradopagina">
<?php
    session_start();
    if (!($_SESSION["pag2"]=='check')) {
        header("Location: ./pagina2.php");
    }
?>
<form action="../direccion/Comprovacion.php" method="post">
<div class="column-l">
    <h1 id="pagina3" class="textc">172.15.24.100</h1>
    <br>
    <br>
    <p id="textoAnimado" class="textc">¿Es pública o privada?</p>
    <br>
    <div style="text-align:center;">
    <select name="PuPri1" id="PuPri1" class="select-csspag3">
        <option value="1">Privada</option>
        <option value="2">Publica</option> <!-- Respuesta Correcta 2 -->
    </select>
    </div>
    <br>
    <br>
    <p id="textoAnimado" class="textc">¿Es assignable?</p>
    <br>
    <div style="text-align:center;">
    <select name="PuPri2" id="PuPri1" class="select-csspag3">
        <option value="1">Si</option> <!-- Respuesta Correcta 1 -->
        <option value="2">No</option>
    </select>
    </div>
    <br>
</div>
<div class="column-r">
    <h1 id="pagina3" class="textc">169.254.231.23</h1>
    <br>
    <br>
    <p id="textoAnimado" class="textc">¿Es pública o privada?</p>
    <br>
    <div style="text-align:center;">
    <select name="PuPri3" id="PuPri3" class="select-csspag3">
        <option value="1">Privada</option>
        <option value="2">Publica</option> <!-- Respuesta Correcta 2 -->
    </select>
    </div>
    <br>
    <br>
    <p id="textoAnimado" class="textc">¿Es assignable?</p>
    <br>
    <div style="text-align:center;">
    <select name="PuPri4" id="PuPri4" class="select-csspag3">
        <option value="1">Si</option> 
        <option value="2">No</option> <!-- Respuesta Correcta 2 -->
    </select>
    </div>
    <br>
</div>
<div class="column-b" style="text-align:center;">
    <br>
        <?php
            if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                echo "<div style='color:red'>Te has equivocado de respuesta </div>";
            }
        ?>
    <br>
    <input type="submit" value="Enviar" name="pag3" class="buttonpag buttonpag-1">
</div>
</form>
</body>
</html>
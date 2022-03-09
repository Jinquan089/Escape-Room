<?php
    session_start();
    if (!($_SESSION["pag4"]=='check')) {
        header("Location: ./pagina4.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 5</title>
<!-- Estilo de texto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="centradopagina">
<form action="../direccion/Comprovacion.php" method="post">
<div style="text-align:center;">
    <h1>¿Las IPs son asignables?</h1>
<table style="margin: 0 auto;">
<tr>
    <td><h1>50.162.5.256/8</h1></td>
</tr>
<tr>
    <td>
        <select name="IPa1" id="IPasig1" class="select-csspag5">
            <option value="1">Si</option>
            <option value="2">No, porque esta IP está reservada para pruebas</option>
            <option value="3">No, porque esta IP está fuera del rango</option> <!-- Respuesta Correcta -->
        </select>
    </td>
</tr>
<td><br></td>
<tr>
    <td><h1>205.40.160.28/24</h1</td>
</tr>
<tr>
    <td>
        <select name="IPa2" id="IPasig2" class="select-csspag5">
            <option value="1">Si</option> <!-- Respuesta Correcta -->
            <option value="2">No, porque esta IP está reservada para pruebas</option>
            <option value="3">No, porque esta IP está fuera del rango</option>
        </select>
    </td>
</tr>

<tr>
    <td><br></td>
</tr>
<tr><td><h1>127.0.0.1/8</h1></td></tr>
<tr>
    
    <td>
        <select name="IPa3" id="IPasig3" class="select-csspag5">
            <option value="1">No, porque esta IP es un loopback</option> <!-- Respuesta Correcta -->
            <option value="2">No, porque esta IP es una dirección multicast</option>
            <option value="3">Si</option>
        </select>
    </td>
</tr>

<td><br></td>
<tr><td><h1>172.0.255.0/24</h1></td></tr>
<tr>
    <td>
        <select name="IPa4" id="IPasig4" class="select-csspag5">
            <option value="1">No, porque esta IP es un loopback</option>
            <option value="2">No, porque esta IP es una dirección multicast</option>
            <option value="3">Si</option> <!-- Respuesta Correcta -->
        </select>
    </td>
</tr>

</table>
<br>
<?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<div style='color:red'>Te has equivocado de respuesta </div>";
        }
    ?>
<br>
    <input type="submit" value="Enviar" name="pag5" class="buttonpag buttonpag-1">
</div>
</form>
</body>
</html>
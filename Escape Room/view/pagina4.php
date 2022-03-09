<?php
    session_start();
    if (!($_SESSION["pag3"]=='check')) {
        header("Location: ./pagina3.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 4</title>
    
    <!-- Estilo de texto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body class="centradopagina" style="text-align: center;">
        <h1 class="textotamaño">¿De que clase son las IPs?</h1>
        <form action="../direccion/Comprovacion.php" method="post">
        <table style="margin: 0 auto;">
            <br>
            <tr>
                <td><h1>192.168.14.255</h1></td>
                <br>
                <td>
                    <select name="IP1" id="IP1" class="select-csspag4">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option> <!-- Respuesta Correcta 3 -->
                        <option value="4">D</option>
                        <option value="5">E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><h1>169.100.12.32</h1></td>
                <td>
                    <select name="IP2" id="IP2" class="select-csspag4">
                        <option value="1">A</option>
                        <option value="2">B</option> <!-- Respuesta Correcta 2 -->
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><h1>127.0.0.1</h1></td>
                <td>
                    <select name="IP3" id="IP3" class="select-csspag4">
                        <option value="1">A</option> <!-- Respuesta Correcta 1 -->
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><h1>239.78.43.100</h1></td>
                <td>
                    <select name="IP4" id="IP4" class="select-csspag4">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option> <!-- Respuesta Correcta 4 -->
                        <option value="5">E</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td><br></td>
            </tr>
            <tr>
                <td><h1>240.54.21.31</h1></td>
                <td>
                    <select name="IP5" id="IP5" class="select-csspag4">
                        <option value="1">A</option>
                        <option value="2">B</option>
                        <option value="3">C</option>
                        <option value="4">D</option>
                        <option value="5">E</option> <!-- Respuesta Correcta 5 -->
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
    <input type="submit" value="Enviar" name="pag4" class="buttonpag buttonpag-1">

</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Level 1</title>
     <!-- Estilo de texto -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 

</head>
<body class="centradopagina">
    <?php
    session_start();
    if (!($_SESSION["index"]=='check')) {
        header("Location: ../index.php");
    }
    ?>
        <form action="../direccion/Comprovacion.php" method="post">

            <h1 class="centrarTexto">192.168.1.20/24</h1>
            <br>
            <br>
            <p class="centrarTexto" id="textoAnimado">A continuación, deberás de pasar la siguiente IP a binario.</p>
            <br>
            <br>
            <br>
            <div style="text-align:center;">
                <select name="binario" class="select-css">
                    <option value="1">01100100 11100101 10001101 00010111</option>
                    <option value="2">11000000 10101000 00000001 00010100</option> <!-- Respuesta Correcta -->
                    <option value="3">11111111 00000000 11111111 0000000</option>
                </select>
            </div>
            <br>
            <br>
            <br>
    
        <div style="text-align:center;">
        <?php
            if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                echo "<div style='color:red'><h2>Te has equivocado de respuesta</h2></div>";
            }
        ?>
        <br>
        <br>
        <input type="submit" name="pag1" value="Enviar" class="buttonpag buttonpag-1">
        </div>
    </form>
</body>
</html>
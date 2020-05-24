<?php
if($_SESSION['estado']!='activo'){
    header('location:./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <link rel="shortcut icon" href="./img/logo.png" />
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section>
        <h1>Redacta un correo nuevo</h1>
        <form action="mail.php" method="post">
            <label for="des">Destinatario:</label>
            <input name="des" id="des" type="text">
            <label for="rem">Remitente:</label>
            <input name="rem" id="rem" type="text">
            <label for="asu">Asunto:</label>
            <input name="asu" id="asu" type="text">
            <label for="mes">Mensaje:</label>
            <input name="mes" id="mes" type="text">
            <input type="submit" value="Enviar">
        </form>
        <a href="lista_enviados.php">lista de enviados</a>
    </section>
</body>
</html>
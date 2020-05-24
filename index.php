<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style type='text/css'>
    html,body{
    background-image: url(./img/bg.jpg);
}
section{
    padding-left: 2%;
    padding-right: 2%;
    margin-left: 10%;
    margin-right: auto;
    margin-bottom: 20%;
    width: 70%;
    background-color: white;
    margin-top: 0%;
    text-align: center;
    display: inline-block;
    height:200px; 
}
</style>
<body>
    <section>
        <h1>Inicio De sesión</h1>
    <form action="validar.php" method="post">
        <input name="user" type="text">
        <input type="password" name="pass">
        <input type="submit" value="Ingresar">
        <?php
            echo $_SESSION['estado'];
        ?>
    </form>
    </section>
</body>
</html>
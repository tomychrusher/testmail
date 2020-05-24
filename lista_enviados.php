<?php
    if($_SESSION['estado']!='activo'){
        header('location:./index.php');
    }
    include 'conexion.php';
    $link=conectarse();
    if(isset($_GET['asu'])){
        $asu=$_GET['asu'];
    }else{
        $asu='vacio01';
    }
    echo $asu;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="./img/logo.png" />
</head>
<body>
    <section>
        <h1>Lista correos</h1>
        <?php
        if($asu=='vacio01'){
        $sql=mysqli_query($link,'SELECT * FROM mensajes;');
        while($row=mysqli_fetch_assoc($sql)){
        echo'<a href="./lista_enviados.php?asu='.$row["asu"].'">'.$row["asu"].'</a><br>';
        
        } 
        echo'<a href="./redactar.php">volver</a>';
        }
            if($asu=='vacio01'){
                echo '<h1>esta vacio</h1>';
            }else{
                $sql2=mysqli_query($link,'SELECT * from mensajes where asu ="'.$asu.'";');
                $row2=mysqli_fetch_assoc($sql2);
                echo'
                <section id="correo">
                <h3>Asunto:'.$row2['asu'].'</h3>
                <h3>Destinatario:'.$row2['des'].'</h3>
                <h3>Remitente:'.$row2['rem'].'</h3>
                <h3>Mensaje:'.$row2['mes'].'</h3>
                <h3>fecha:'.$row2['fecha'].'</h3>
                <a href="./lista_enviados.php">volver</a>
                </section>';
            }          
        ?>
        
    </section>
</body>
</html>
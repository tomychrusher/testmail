<?php
        include 'conexion.php';
        $link=conectarse();
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = $_POST['rem'];
        $to = $_POST['des'];
        $subject = $_POST['asu'];
        $message = $_POST['mes'];
        $headers = "From:" . $from;
        echo $to;
        $date=getdate();
        $dia=$date['mday'];
        $mes=$date['mon'];
        $año=$date['year'];   
        mail($to,$subject,$message, $headers);
        $fecha=$año.'-'.$mes.'-'.$dia;
        $sql=mysqli_query($link,'INSERT INTO mensajes VALUES ("'.$fecha.'","'.$to.'","'.$from.'","'.$subject.'","'.$mes.'");');
        header('location:./redactar.php');
    ?>
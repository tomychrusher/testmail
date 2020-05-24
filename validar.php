<?php
if(isset($_POST['user'])&&isset($_POST['pass'])){
    $usu=$_POST['user'];
    $pas=$_POST['pass'];
}else{
    $usu='';
    $pas='';
}
if($usu=='juli' && $pas=='juli321'){
    $_SESSION['estado']='activo';
    echo'<script>alert("pass")</script>';
    header('location:./redactar.php');
    
}else{
    echo'<script>alert("mallll")</script>';
    header('location:./index.php');
}
?>
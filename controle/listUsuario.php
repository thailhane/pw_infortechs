<?php
include_once 'dbconexao.php';
if($_POST['logar']){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = 'SELECT email,senha FROM cadastro_usuario';
    $consulta = mysqli_query($conexao, $sql);
    $login = false;
    foreach($consulta as $key => $valor){
        if($valor['email'] == $email && $valor['senha'] == $senha){
            $login = true;
        }
    }
    if($login == true){
        header('location:../index.php');
    }else{
        header('location:login.php');
    }
}
?>
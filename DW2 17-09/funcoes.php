<?php

include("database.php");

function checaSeEstaLogado(){
    if(isset($_SESSION["usuario"])){
        return true;
    }else{
        return false;
    }
}
 
function validaCredenciais($usuario, $senha){

    $bd = conectar();
    $resultado = $bd->prepare("SELECT * FROM membros WHERE usuario=? AND senha=?")

    $resultado->execute(array($usuario, $senha));

    $linhas = $resultado->fetchALL(PDO::FECTH_ASSOC);

    if(count($linhas)>0){
        return true;
    }
    else{
        return false; 
    }
}

function fazerLogin($usuario, $senha){

    $valida = validaCredenciais($usuario, $senha);
    if($valida == true){
        $_SESSION["usuario"] = $usuario;
        return true;
    }else{
        return false;
    }
}


?>
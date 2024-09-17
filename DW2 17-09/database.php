<?php
function conectar(){
    $bd = new PDO('mysql:
    host=localhost;
    dbname=exemplo;
    charset=utf8','root','');

    return $bd;
}


?>
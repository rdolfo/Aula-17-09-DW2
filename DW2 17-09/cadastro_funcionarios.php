<?php

$bd = new PDO('mysql:host=localhost;
               dbname=aprendizado_b;
               charset=utf8',
               'root',
               '');
               
$sql = "INSERT INTO funcionarios
        (Nome, Salario, Data_de_Nascimento,
        Data_de_Admissao, Departamento_ID)
        VALUES('Maria Eduarda', '10000', '2008-04-10',
        '2024-09-10', '1');"

        $bd -> exec($sql);

?>
<?php
session_start();
include("funcoes.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Desconhecido</title>
    </head>
    <body>
        <?php
        if(checaSeEstaLogado() == true){
            ?>
            <p><b>Bem vinde <?php echo $_SESSION["usuario"]; ?></b></p>
            <p><a href = 'dashboard.php'>Ir para seu dashboard</a></p>
            <p><a href = 'logout.php'>Logout</a></p>

            <?php
        }else{
            if(isset($_POST["usuario"]) == true){
                
                $login = fazerLogin($_POST["usuario"], $_POST["senha"]);
                if($login == true){
                    echo "Você se logou com sucesso, </br>
                        clique <a href = 'dashboard.php'>aqui</a> </br>
                        para ir para o dashboard.";
                }else{
                    echo "Usuário ou senha invalidos.";
                }
            }else{
                ?>

                <form method="post">
                    <p>Usuário: <input type="text" name="usuario"/></p>
                    <p>Senha: <input type = "password" name="senha"/></p>
                    <p><input type = "submit" value="entrar"/></p>
                </form>
                
                <p>
                    Ainda não é membro(a)? <a href="register.php">Registre-se</a> agora.
                </p>

                <?php
            }
        }
        ?>
    </body>
</html>
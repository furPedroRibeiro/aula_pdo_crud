<?php
    include("connect.php");

    if(isset($_POST)){
        $data = [
            ":nm_user"=> $_POST['name_user'],
            ":ra_user"=> $_POST['ra_user'],
            ":email_user"=> $_POST['email_user'],
        ];
        $sql = "INSERT INTO tb_user (nm_user, ra_user, email_user) VALUES (:nm_user,:ra_user,:email_user)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindparam(":nm_user", $_POST['name_user']);
        $stmt->bindparam(":ra_user", $_POST['ra_user']);
        $stmt->bindparam(":email_user", $_POST['email_user']);
        $stmt->execute();

        if($stmt){
            echo("Usuário cadastrado com sucesso!!!");
            echo("<meta http-equiv='refresh' content='5; cadastrar.php'>");
        } else{
            echo("Erro ao cadastrar usuário!!!");
        }
    }
?>
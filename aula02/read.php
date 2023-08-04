<?php
    include("connect.php");
    $stmt = $pdo->prepare("SELECT * FROM tb_user");
    $stmt->execute(); 
    $data = $stmt->fetchAll();
    foreach ($data as $row) {
        echo "Código:".$row['cd_user']."<br>";
        echo "Nome:".$row['nm_user']."<br>";
        echo "RA:".$row['ra_user']."<br>";
        echo "Email:".$row['email_user']."<br><br>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>
<body>
    <!-- <table>
        <th>Código</th>
        <th>Nome</th>
        <th>RA</th>
        <th>Email</th>
        <?php
            read_tb_user();
        ?>
    </table> -->
</body>
</html>
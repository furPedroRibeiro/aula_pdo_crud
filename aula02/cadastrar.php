<?php
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

        color: #dbc96c;

        font-family: 'Arial', 'Helvetica', 'Sans-serif';
    }
    body{
        background-color: #252525;
    }
    label{
        font-size: 22px;
    }
    form{
        width: 100vw;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        padding-block: 2rem;

        gap: 1rem;
    }
    input{
        width: 17rem;

        background-color: #252525;
        color: #dbc96c;

        font-size: 16px;

        border-radius: 20px;

        padding: 0.5rem;
        border: 1px solid #dbc96c;
        outline: none;
    }
    button{
        cursor: pointer;

        width: 17rem;
        padding-block: 0.7rem;

        font-size: 16px;
        font-weight: bold;

        border-radius: 20px;
        border: 1px solid #dbc96c;

        color: #252525;
        background-color: #dbc96c;

    }
</style>
<body>
    <form action="insert.php" method="post" name="form_cad_user">
        <h1>Cadastrar usuário</h1>
        <label for="name_user">Nome:</label>
        <input type="text" name="name_user" id="name_user">
        <label for="ra_user">RA:</label>
        <input type="text" name="ra_user" id="ra_user" maxlength="5">
        <label for="email_user">Email:</label>
        <input type="email" name="email_user" id="email_user">
        <button type="submit" name="btn_cad">Enviar</button>
        <a href="index.html" style="font-size: 32px;">Voltar</a>
    </form>
</body>
</html>
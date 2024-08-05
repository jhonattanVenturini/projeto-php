<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "<script> alert ('Preencha seu e-mail');</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script> alert ('Preencha sua senha');</script>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../ASSETS/logo.png">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap');

        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #141414;
            font-family: 'Raleway', sans-serif;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            margin-bottom: 30px;
            color: #fff;
            color: #029dbb;
        }

        .login-container form p {
            position: relative;
            margin-bottom: 30px;
        }

        .login-container form label {
            display: block;
            color: #fff;
            font-size: 14px;
            margin-bottom: 5px;
            text-align: left;
        }

        .login-container form input {
            width: 100%;
            padding: 10px;
            background: none;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            color: #fff;
            font-size: 16px;
        }

        .login-container form input:focus {
            border-bottom: 1px solid #03e9f4;
        }

        .login-container form button {
            background: #03e9f4;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: #141414;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-container form button:hover {
            background: #029dbb;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="/ASSETS/logo.png">
        <h1>Acesse sua conta</h1>
        <form action="" method="POST">
            <p>
                <label>E-mail</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
        </form>
    </div>
</body>

</html>
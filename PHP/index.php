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
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <img src="/ASSETS/logo.png" alt="Logo">
        <h1>Acesse sua conta</h1>
        <form action="login.php" method="POST">
            <p>
                <label>E-mail</label>
                <input type="text" name="email" required>
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha" required>
            </p>
            <p>
                <button type="submit">Entrar</button>
                <a href="../HTML/cadastro.html"><button type="button">Cadastrar-me</button></a>
            </p>
        </form>
    </div>
</body>

</html>
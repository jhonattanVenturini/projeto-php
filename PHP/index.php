<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email'])) {
        echo "<script>alert('Preencha seu e-mail');</script>";
    } elseif (empty($_POST['senha'])) {
        echo "<script>alert('Preencha sua senha');</script>";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $mysqli->prepare($sql_code);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $usuario = $result->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");
                exit;
            } else {
                echo "<script>alert('Senha incorreta');</script>";
            }
        } else {
            echo "<script>alert('E-mail não encontrado');</script>";
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
        <form action="../PHP/painel.php" method="POST">
            <p>
                <label>E-mail</label>
                <input type="email" name="email" required>
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
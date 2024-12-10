<?php
include("protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dasbord.css">
    <link rel="icon" type="image/x-icon" href="../ASSETS/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../JS/script.js" defer></script>
    <title>CodeBreakers</title>
</head>

<body>
    <aside class="sidebar">
        <div class="logo">CodeBreakers</div>
        <nav>
            <ul>
                <li><a href="#">Painel</a></li>
                <li><a href="#profile">Perfil</a></li>
                <li><a href="#settings">Configurações</a></li>
            </ul>
        </nav>
        <a id="sair" href="../PHP/logout.php">Sair</a>
    </aside>

    <main class="dashboard">

        <h1> Olá <span><?php echo $_SESSION['nome'] . "," ?></span> seja bem-vindo ao Painel de Controle! </h1>


        <section class="dashboard-summary">
            <div class="card">
                <h3>Usuários Ativos</h3>
                <p>123</p>
            </div>
            <div class="card">
                <h3>Projetos Concluídos</h3>
                <p>45</p>
            </div>
            <div class="card">
                <h3>Faturamento</h3>
                <p>R$ 67,890</p>
            </div>
        </section>

        <section class="dashboard-charts">
            <div class="chart-card">
                <canvas id="usersChart"></canvas>
            </div>
            <div class="chart-card">
                <canvas id="revenueChart"></canvas>
            </div>
            <div class="chart-card">
                <canvas id="projectsChart"></canvas>
            </div>
            <div class="chart-card">
                <canvas id="skillsChart"></canvas>
            </div>
        </section>

        <section class="user-profile">
            <div class="profile-card">
                <img src="../ASSETS/painel-pla.jpeg" alt="Foto do Usuário" class="profile-img">
                <h3> Jhonattan Venturini</h3>
                <p class="job-title"> Desenvolvedor Full Stack </p>
                <p class="description">Breve descrição sobre o usuário. Inclua informações relevantes sobre sua experiência e responsabilidades.</p>
                <h4>Habilidades:</h4>
                <ul class="skills">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>Php</li>
                    <li>MySql</li>
                    <li>SQL</li>
                </ul>
            </div>
        </section>
    </main>
    <script src="../JS/script.js"></script>

</body>

</html>
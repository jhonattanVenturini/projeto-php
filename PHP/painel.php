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
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Raleway', sans-serif;
            background: #f4f4f4;
            color: #333;
            display: flex;
        }

        .sidebar {
            width: 250px;
            color: #fff;
            padding: 20px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0a0a0a;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            z-index: 999;
        }

        .sidebar .logo {
            font-size: 1.8em;
            font-weight: bold;
            text-align: left;
            margin-bottom: 50px;
        }

        .sidebar nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar nav ul li {
            margin-bottom: 20px;
        }

        .sidebar nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 500;
            display: block;
        }

        .sidebar nav ul li a:hover {
            color: #03e9f4;
            background-color: #121212;
            border-radius: 8px;
            padding: 1.3rem;
        }

        .sidebar a#sair {
            text-decoration: none;
            color: red;
        }

        .dashboard {
            margin-left: 250px;
            /* Ajustado para a largura da sidebar */
            padding: 55px;
            width: calc(100% - 250px);
        }

        .dashboard header {
            margin-bottom: 20px;
            color: #121212;
        }

        .dashboard header h1 span {
            color: red;
        }

        .dashboard-summary {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            flex: 1;
            margin: 10px;
        }

        .card h3 {
            font-size: 1.5em;
            color: #333;
        }

        .card p {
            font-size: 2em;
            color: #03e9f4;
            margin: 0;
        }

        .dashboard-charts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .chart-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            flex: 1;
            margin: 10px;
            max-width: 45%;
        }

        .user-profile {
            margin-top: 20px;
        }

        .profile-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: 10px;
            max-width: 400px;
        }

        .profile-img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }

        .job-title {
            font-size: 1.2em;
            color: #666;
            margin: 10px 0;
        }

        .description {
            font-size: 1em;
            color: #777;
            margin: 10px 0;
        }

        .skills {
            list-style: none;
            padding: 0;
        }

        .skills li {
            background: #f4f4f4;
            padding: 5px 10px;
            margin: 5px 0;
            border-radius: 5px;
        }

        .skills li a:hover {
            background-color: #666;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {
            .dashboard-summary {
                flex-direction: column;
                align-items: center;
            }

            .dashboard-charts {
                flex-direction: column;
                align-items: center;
            }

            .card,
            .chart-card {
                width: 100%;
                margin: 10px 0;
            }

            .profile-card {
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .dashboard {
                margin-left: 0;
                width: 100%;
            }

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
                padding: 10px;
            }

            .sidebar nav ul {
                flex-direction: column;
            }
        }
    </style>
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
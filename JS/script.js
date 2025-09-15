document.addEventListener("DOMContentLoaded", function() {
    // Configuração dos gráficos
    const usersChartCtx = document.getElementById('usersChart').getContext('2d');
    const revenueChartCtx = document.getElementById('revenueChart').getContext('2d');
    const projectsChartCtx = document.getElementById('projectsChart').getContext('2d');
    const skillsChartCtx = document.getElementById('skillsChart').getContext('2d');

    const usersChart = new Chart(usersChartCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Usuários Ativos',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: 'rgba(3, 233, 244, 0.2)',
                borderColor: '#03e9f4',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const revenueChart = new Chart(revenueChartCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Faturamento',
                data: [12000, 15000, 10000, 20000, 15000, 13000, 18000],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: '#03e9f4',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const projectsChart = new Chart(projectsChartCtx, {
        type: 'pie',
        data: {
            labels: ['Projetos A', 'Projetos B', 'Projetos C'],
            datasets: [{
                label: 'Projetos',
                data: [12, 19, 3],
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(75, 192, 192, 1)'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    const skillsChart = new Chart(skillsChartCtx, {
        type: 'radar',
        data: {
            labels: ['HTML', 'CSS', 'JavaScript', 'PHP', 'Python', 'SQL'],
            datasets: [{
                label: 'Habilidades',
                data: [85, 90, 75, 80, 70, 65],
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                r: {
                    beginAtZero: true
                }
            }
        }
    });
});

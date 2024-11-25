
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                    Notas do Aluno
                    <span>
                        <iconify-icon icon="line-md:speedometer-loop" class="fs-7 d-flex text-muted"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                            data-bs-title="Notas das Unidades"></iconify-icon>
                    </span>
                </h5>

                <div class="select-container mb-4">
                    <select id="materiaSelect" class="form-select" onchange="atualizarGrafico()">
                        <option value="Matemática">Matemática</option>
                        <option value="Português">Português</option>
                        <option value="Física">Física</option>
                        <option value="Química">Química</option>
                        <option value="Biologia">Biologia</option>
                        <option value="História">História</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Inglês">Inglês</option>
                        <option value="Educação Física">Educação Física</option>
                        <option value="Filosofia">Filosofia</option>
                        <option value="Sociologia">Sociologia</option>
                        <option value="Arte">Arte</option>
                    </select>
                </div>

                <div class="chart-container mt-4">
                    <canvas id="notasChart2"></canvas>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function atualizarGrafico() {
        const materia = document.getElementById('materiaSelect').value;

        const dadosNotas = {
            "Matemática": [7, 8, 6, 9],
            "Português": [6, 7, 8, 9],
            "Física": [5, 6, 7, 8],
            "Química": [8, 7, 8, 9],
            "Biologia": [7, 6, 8, 9],
            "História": [6, 6, 7, 8],
            "Geografia": [8, 9, 7, 6],
            "Inglês": [9, 8, 7, 7],
            "Educação Física": [8, 8, 9, 9],
            "Filosofia": [7, 6, 7, 8],
            "Sociologia": [6, 7, 7, 8],
            "Arte": [8, 9, 9, 9]
        };

        const notas = dadosNotas[materia];

        const ctx = document.getElementById('notasChart2').getContext('2d');
        if (window.barChart) window.barChart.destroy();

        window.barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Unidade 1', 'Unidade 2', 'Unidade 3', 'Unidade 4'],
                datasets: [{
                    label: `Notas de ${materia}`,
                    data: notas,
                    backgroundColor: ['#050259', '#A1A4F3', '#3DDA73', '#643DF2'],
                    borderColor: ['#050259', '#A1A4F3', '#3DDA73', '#643DF2'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Nota: ' + tooltipItem.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Inicializar o gráfico com a primeira matéria
    atualizarGrafico();
</script>
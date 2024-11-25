<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                Notas do Aluno
                <span>
                    <iconify-icon icon="line-md:speedometer-loop" class="fs-7 d-flex text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Notas das Unidades"></iconify-icon>
                </span>
            </h5>
            <canvas id="myChart" style="width:100%;"></canvas>
        </div>
    </div>
</div>

<script>
    const xValues = ["Unidade 1", "Unidade 2", "Unidade 3", "Unidade 4"];
    const yValues = [7.9, 8.4, 7.5, 8.8];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "Notas",
                data: yValues,
                borderColor: "rgb(61, 218, 115)",
                backgroundColor: "rgb(187 188 242 / 35%)",
                borderWidth: 2,
                pointBackgroundColor: "rgb(5, 5, 89)",
                pointBorderColor: "rgba(255, 255, 255, 1)",
                pointBorderWidth: 2,
                pointRadius: 8,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: "top"
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return `Nota: ${context.raw}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: "Notas"
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Unidades"
                    }
                }
            }
        }
    });
</script>
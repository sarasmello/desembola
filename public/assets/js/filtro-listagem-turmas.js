function filterTable() {
    // Pega os valores dos filtros
    var serieFilter = document.getElementById("filterSerie").value.toLowerCase();
    var turmaFilter = document.getElementById("filterTurma").value.toLowerCase();
    var turnoFilter = document.getElementById("filterTurno").value.toLowerCase();

    // Pega todas as linhas da tabela (exceto o cabeçalho)
    var rows = document.querySelectorAll(".table-responsive table tbody tr");

    rows.forEach(function(row) {
        var serie = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
        var turma = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        var turno = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

        // Verifica se a linha atende aos filtros
        var matchesSerie = serieFilter === "" || serie.includes(serieFilter);
        var matchesTurma = turmaFilter === "" || turma.includes(turmaFilter);
        var matchesTurno = turnoFilter === "" || turno.includes(turnoFilter);

        // Mostra ou esconde a linha com base na correspondência
        if (matchesSerie && matchesTurma && matchesTurno) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
}

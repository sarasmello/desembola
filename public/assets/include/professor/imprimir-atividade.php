<div id="loading" class="loading-container" style="display:none;">
    <div class="loading-message">
        <div class="spinner"></div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center" id="tituloblocoprint">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="line-md:cloud-alt-print-loop" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Imprimir Atividade
            </legend>

            <div class="row align-items-end">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="professor" class="cadastrotitulo">Turmas</label>
                        <select class="form-control custom-placeholder" id="professor">
                            <option value="">Selecione uma Turma</option>
                            <option value="">Selecione uma Turma</option>
                            <option value="1º Ano - A">1º Ano - A</option>
                            <option value="1º Ano - A">1º Ano - B</option>
                            <option value="1º Ano - A">1º Ano - C</option>
                            <option value="1º Ano - A">1º Ano - D</option>
                            <option value="1º Ano - A">1º Ano - E</option>
                            <option value="1º Ano - A">1º Ano - F</option>
                            <option value="1º Ano - A">2º Ano - A</option>
                            <option value="1º Ano - A">2º Ano - B</option>
                            <option value="1º Ano - A">2º Ano - C</option>
                            <option value="1º Ano - A">2º Ano - D</option>
                            <option value="1º Ano - A">2º Ano - E</option>
                            <option value="1º Ano - A">2º Ano - F</option>
                            <option value="1º Ano - A">3º Ano - A</option>
                            <option value="1º Ano - A">3º Ano - B</option>
                            <option value="1º Ano - A">3º Ano - C</option>
                            <option value="1º Ano - A">3º Ano - D</option>
                            <option value="1º Ano - A">3º Ano - E</option>
                            <option value="1º Ano - A">3º Ano - F</option>
                            <option value="1º Ano - A">4º Ano - A</option>
                            <option value="1º Ano - A">4º Ano - B</option>
                            <option value="1º Ano - A">4º Ano - C</option>
                            <option value="1º Ano - A">4º Ano - D</option>
                            <option value="1º Ano - A">4º Ano - E</option>
                            <option value="1º Ano - A">4º Ano - F</option>
                            <option value="1º Ano - A">5º Ano - A</option>
                            <option value="1º Ano - A">5º Ano - B</option>
                            <option value="1º Ano - A">5º Ano - C</option>
                            <option value="1º Ano - A">5º Ano - D</option>
                            <option value="1º Ano - A">5º Ano - E</option>
                            <option value="1º Ano - A">5º Ano - F</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="atividade" class="cadastrotitulo">Tipo de Atividade</label>
                        <select class="form-control custom-placeholder" id="atividade">
                            <option value="">Selecione o Tipo de Atividade</option>
                            <option value="atividade">Atividade</option>
                            <option value="prova">Prova</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nivel" class="cadastrotitulo">Selecione o nível:</label>
                            <div id="nivel" class="star-rating d-flex">
                                <iconify-icon icon="ic:twotone-star" class="star fs-7 text-muted" data-value="1"></iconify-icon>
                                <iconify-icon icon="ic:twotone-star" class="star fs-7 text-muted" data-value="2"></iconify-icon>
                                <iconify-icon icon="ic:twotone-star" class="star fs-7 text-muted" data-value="3"></iconify-icon>
                                <iconify-icon icon="ic:twotone-star" class="star fs-7 text-muted" data-value="4"></iconify-icon>
                                <iconify-icon icon="ic:twotone-star" class="star fs-7 text-muted" data-value="5"></iconify-icon>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 text-end mt-3 mt-md-0">
                    <button type="submit" class="btn btn-login" id="generate-activity">Gerar Atividade</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class="card" style="display: none;" id="atividadegerada">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="ic:baseline-task" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Atividade gerada
            </legend>
        </fieldset>

        <div id="generated-activity-questions">
        </div>
    </div>

    <div style="text-align: right; margin-bottom: 15px;">
        <button id="print-activity" class="btn btn-primary">Imprimir</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const generateButton = document.getElementById('generate-activity');
        const loadingDiv = document.getElementById('loading');
        const activityCard = document.getElementById('atividadegerada');
        const stars = document.querySelectorAll('.star');
        let selectedLevel = null;

        stars.forEach((star) => {
            star.addEventListener('click', () => {
                const value = parseInt(star.getAttribute('data-value'));
                selectedLevel = value;

                stars.forEach((s) => s.classList.replace('icone-registro', 'text-muted'));
                for (let i = 0; i < value; i++) {
                    stars[i].classList.replace('text-muted', 'icone-registro');
                }
            });
        });

        generateButton.addEventListener('click', async function(event) {
            event.preventDefault();

            if (!selectedLevel) {
                alert('Por favor, selecione um nível.');
                return;
            }

            loadingDiv.style.display = 'flex';

            setTimeout(async () => {
                try {
                    const response = await fetch('questoes.json');
                    const questions = await response.json();

                    const filteredQuestions = questions.filter(q => q.nivel === selectedLevel);

                    const selectedQuestions = selectRandomQuestions(filteredQuestions, 10);

                    displayGeneratedActivity(selectedQuestions);

                    loadingDiv.style.display = 'none';
                    activityCard.style.display = 'block';
                } catch (error) {
                    console.error('Erro ao gerar atividade:', error);
                    alert('Ocorreu um erro ao gerar a atividade.');
                    loadingDiv.style.display = 'none';
                }
            }, 5000);
        });
    });

    function selectRandomQuestions(questions, count) {
        const shuffled = questions.sort(() => 0.5 - Math.random());
        return shuffled.slice(0, count);
    }

    function displayGeneratedActivity(questions) {
        const activityDiv = document.querySelector('#generated-activity-questions');

        activityDiv.innerHTML = '';

        questions.forEach((q, index) => {
            const questionHTML = `
            <div class="question" style="margin-top: 20px;">
                <p><strong>${index + 1}. ${q.titulo}</strong></p>
                <ul style="list-style: none; padding: 0;">
                    ${q.alternativas.map((alt, i) => `<li><strong>${['A)', 'B)', 'C)', 'D)'][i]}</strong> ${alt}</li>`).join('')}
                </ul>
            </div>
        `;
            activityDiv.innerHTML += questionHTML;
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('print-activity').addEventListener('click', function() {
            const atividadeGerada = document.getElementById('atividadegerada').innerHTML;

            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write('<html><head><title>Imprimir Atividade</title>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(atividadeGerada);
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            printWindow.print();
        });
    });

    function displayGeneratedActivity(questions) {
        const activityDiv = document.querySelector('#atividadegerada .card-body fieldset');

        document.getElementById('atividadegerada').style.display = 'block';

        activityDiv.innerHTML = `

        <!-- Cabeçalho da prova -->
        <div class="print-header" style="margin-bottom: 20px; font-family: Arial, sans-serif;">
           <h2 style="text-align: center; margin: 0;">
            <!-- Substituindo "DESEMBOLA" por uma imagem -->
            <img src="../../assets/images/logos/logomovel.svg" alt="Logomovel" style="max-width: 100px; height: auto;">
        </h2>
            <p style="text-align: center; margin: 5px 0;">Avaliação - ${document.getElementById('atividade').value || 'Atividade'}</p>
            
            <!-- Informações do aluno e professor -->
            <table style="width: 100%; margin-top: 20px; border-collapse: collapse; font-size: 14px;">
                <tr>
                    <td style="padding: 8px; border: 1px solid #000;">Nome do Aluno:</td>
                    <td style="padding: 8px; border: 1px solid #000;">Turma: ${document.getElementById('professor').value || ''}</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border: 1px solid #000;">Data: </td>
                    <td style="padding: 8px; border: 1px solid #000;">Professor: </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding: 8px; border: 1px solid #000;">Matéria: </td>
                </tr>
            </table>
        </div>
        
        
    `;

        const alternativeLabels = ['A)', 'B)', 'C)', 'D)'];

        questions.forEach((q, index) => {
            const questionHTML = `
            <div class="question" style="margin-top: 20px;">
                <p><strong>${index + 1}. ${q.titulo}</strong></p>
                <ul style="list-style: none; padding: 0;">
                    ${q.alternativas.map((alt, i) => `<li><strong>${alternativeLabels[i]}</strong> ${alt}</li>`).join('')}
                </ul>
            </div>
        `;
            activityDiv.innerHTML += questionHTML;
        });
        // Adicionando a imagem no final das questões
        activityDiv.innerHTML += `
        <div style="text-align: center; margin-top: 20px;">
            <img src="../../assets/images/gabarito.jpg" alt="Imagem Final" style="max-width: 100%; height: auto;">
        </div>
    `;
    }
</script>
<!-- Mensagem de sucesso -->
<div id="mensagemSucesso" class="mensagem-sucesso" style="display: none;">
    Questão adicionada ao banco de questões com sucesso.
</div>
<div class="card">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="eos-icons:ai" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                Gerar Questão com IA
            </legend>

            <div class="row align-items-end">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="assunto" class="cadastrotitulo">Assunto</label>
                        <select class="form-control custom-placeholder" id="assunto">
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
                <div class="col-md-2 mt-3 mt-md-0">
                    <button type="submit" class="btn btn-login" onclick="gerarQuestao()">Formular</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<div class="card" id="cardQuestao" style="display: none;">
    <div class="card-body">
        <fieldset>
            <legend class="titulobloco d-flex align-items-center">
                <span class="me-2 d-flex align-items-center">
                    <iconify-icon icon="wpf:ask-question" class="fs-7 text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Traffic Overview"></iconify-icon>
                </span>
                <span id="tituloQuestao"></span>
            </legend>

            <div class="row align-items-end">
                <div class="col-md-12 mt-md-8" id="alternativaA"></div>
                <div class="col-md-12 mt-md-8" id="alternativaB"></div>
                <div class="col-md-12 mt-md-8" id="alternativaC"></div>
                <div class="col-md-12 mt-md-8" id="alternativaD"></div>

                <div class="col-md-12 text-end mt-lg-8">
                    <button type="submit" class="btn btn-login-cancelar me-2 mt-md-8" onclick="recusarQuestao()">Recusar Questão</button>
                    <button type="submit" class="btn btn-login mt-md-8" onclick="aceitarQuestao(event)">Aceitar</button>
                </div>
            </div>
        </fieldset>
    </div>
</div>

<script>
    async function carregarQuestoes() {
        try {
            const response = await fetch('questoes.json');
            if (!response.ok) {
                throw new Error('Erro ao carregar o arquivo JSON');
            }
            return await response.json();
        } catch (error) {
            console.error('Falha ao carregar o arquivo JSON:', error);
            return [];
        }
    }

    async function carregarAssuntos() {
        const questões = await carregarQuestoes();
        const assuntos = [...new Set(questões.map(q => q.assunto))];

        const selectAssunto = document.getElementById("assunto");
        assuntos.forEach(assunto => {
            const option = document.createElement("option");
            option.value = assunto;
            option.textContent = assunto;
            selectAssunto.appendChild(option);
        });
    }

    async function gerarQuestao() {
        const assuntoSelecionado = document.getElementById("assunto").value;
        const nivelSelecionado = getNivelSelecionado();

        if (!assuntoSelecionado || nivelSelecionado === null) {
            alert('Selecione um assunto e um nível!');
            return;
        }

        const questões = await carregarQuestoes();

        const questõesFiltradas = questões.filter(q => q.assunto === assuntoSelecionado && q.nivel === nivelSelecionado);

        if (questõesFiltradas.length > 0) {
            const questaoAleatoria = questõesFiltradas[Math.floor(Math.random() * questõesFiltradas.length)];

            document.getElementById("cardQuestao").style.display = "block";

            document.getElementById("tituloQuestao").textContent = questaoAleatoria.titulo;

            document.getElementById("alternativaA").textContent = `A) ${questaoAleatoria.alternativas[0]}`;
            document.getElementById("alternativaB").textContent = `B) ${questaoAleatoria.alternativas[1]}`;
            document.getElementById("alternativaC").textContent = `C) ${questaoAleatoria.alternativas[2]}`;
            document.getElementById("alternativaD").textContent = `D) ${questaoAleatoria.alternativas[3]}`;

            const alternativas = document.querySelectorAll('#alternativaA, #alternativaB, #alternativaC, #alternativaD');
            alternativas.forEach((alternativa) => {
                alternativa.classList.remove('correct-answer');
            });

            alternativas.forEach((alternativa, index) => {
                if (alternativa.textContent.slice(3) === questaoAleatoria.alternativa_correta) {
                    alternativa.classList.add('correct-answer');
                }
            });
        } else {
            alert('Nenhuma questão encontrada para o assunto e nível selecionados.');
        }
    }

    function getNivelSelecionado() {
        const stars = document.querySelectorAll('.star');
        let nivelSelecionado = null;

        stars.forEach((star) => {
            if (star.classList.contains('icone-registro')) {
                nivelSelecionado = parseInt(star.getAttribute('data-value'));
            }
        });

        return nivelSelecionado;
    }

    function recusarQuestao() {
        document.getElementById("cardQuestao").style.display = "none";
    }

    // Função corrigida de aceitar a questão
    function aceitarQuestao(event) {
        // Previne o comportamento padrão (por exemplo, o envio do formulário)
        event.preventDefault();

        // Exibe a mensagem de sucesso
        const mensagem = document.getElementById("mensagemSucesso");
        mensagem.style.display = "block";

        // Esconde o cartão de questão
        document.getElementById("cardQuestao").style.display = "none";

        // Após 2 segundos, esconde a mensagem e atualiza a página
        setTimeout(() => {
            mensagem.style.display = "none";
            location.reload(); // Atualiza a página
        }, 2000);
    }

    const stars = document.querySelectorAll('.star');

    stars.forEach((star) => {
        star.addEventListener('click', () => {
            const value = star.getAttribute('data-value');

            stars.forEach((s) => s.classList.replace('icone-registro', 'text-muted'));

            for (let i = 0; i < value; i++) {
                stars[i].classList.replace('text-muted', 'icone-registro');
            }
        });
    });

    carregarAssuntos();
</script>
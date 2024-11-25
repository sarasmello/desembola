<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2 class="d-flex align-items-center gap-2 mb-4">
                <span>
                    <iconify-icon icon="line-md:speedometer-loop" class="fs-7 d-flex text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Notas das Unidades"></iconify-icon>
                </span>
                Questionário de Estilos de Aprendizagem - VARK
            </h2>
            <form id="quizForm">

                <div>
                    <p><strong>Questão 01:</strong> Quando você está aprendendo algo novo, como você prefere receber a informação?</p>
                    <input type="radio" name="q1" value="A"> (A) Vejo diagramas, gráficos ou mapas.<br>
                    <input type="radio" name="q1" value="B"> (B) Ouço explicações detalhadas.<br>
                    <input type="radio" name="q1" value="C"> (C) Leio manuais, livros ou artigos.<br>
                    <input type="radio" name="q1" value="D"> (D) Faço atividades práticas ou experimentos.<br>
                </div><br>

                <div>
                    <p><strong>Questão 02:</strong> Quando você está estudando para uma prova, o que geralmente funciona melhor para você?</p>
                    <input type="radio" name="q2" value="A"> (A) Uso cores, gráficos e anotações visuais.<br>
                    <input type="radio" name="q2" value="B"> (B) Gravo a mim mesmo lendo as notas e ouço novamente.<br>
                    <input type="radio" name="q2" value="C"> (C) Escrevo e releio minhas anotações.<br>
                    <input type="radio" name="q2" value="D"> (D) Refaço exercícios ou experiências práticas.<br>
                </div><br>

                <div>
                    <p><strong>Questão 03:</strong> Em uma sala de aula, o que mais te ajuda a entender o conteúdo?</p>
                    <input type="radio" name="q3" value="A"> (A) Ver apresentações, diagramas e vídeos.<br>
                    <input type="radio" name="q3" value="B"> (B) Participar de discussões e ouvir a explicação do professor.<br>
                    <input type="radio" name="q3" value="C"> (C) Ler o livro-texto e tomar notas detalhadas.<br>
                    <input type="radio" name="q3" value="D"> (D) Participar de atividades práticas ou laboratoriais.<br>
                </div><br>

                <div>
                    <p><strong>Questão 04:</strong> Quando você está tentando lembrar de algo, o que você faz?</p>
                    <input type="radio" name="q4" value="A"> (A) Visualizo imagens ou gráficos na minha mente.<br>
                    <input type="radio" name="q4" value="B"> (B) Repito a informação em voz alta ou mentalmente.<br>
                    <input type="radio" name="q4" value="C"> (C) Leio ou escrevo a informação várias vezes.<br>
                    <input type="radio" name="q4" value="D"> (D) Relembro a experiência de ter feito algo relacionado.<br>
                </div><br>

                <div>
                    <p><strong>Questão 05:</strong> Qual das seguintes atividades você prefere em um dia de folga?</p>
                    <input type="radio" name="q5" value="A"> (A) Ir a um museu ou galeria de arte.<br>
                    <input type="radio" name="q5" value="B"> (B) Ir a um concerto ou evento musical.<br>
                    <input type="radio" name="q5" value="C"> (C) Ler um livro ou artigo interessante.<br>
                    <input type="radio" name="q5" value="D"> (D) Fazer uma caminhada ou praticar esportes.<br>
                </div><br>

                <div>
                    <p><strong>Questão 06:</strong> Quando você está aprendendo com um grupo, o que te ajuda mais?</p>
                    <input type="radio" name="q6" value="A"> (A) Ver diagramas ou esquemas do grupo.<br>
                    <input type="radio" name="q6" value="B"> (B) Ouvir as discussões do grupo.<br>
                    <input type="radio" name="q6" value="C"> (C) Ler os materiais de leitura do grupo.<br>
                    <input type="radio" name="q6" value="D"> (D) Participar de atividades práticas em grupo.<br>
                </div><br>

                <button class="btn btn-login" type="button" onclick="calcularNivel()">Finalizar Avaliação</button>
            </form>

            <div id="resultado"></div>
        </div>
    </div>
</div>

<style>
    #resultado {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #f8f9fa;
        border: 2px solid #050259;
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #050259;
        z-index: 1000;
    }
</style>

<script>
    function calcularNivel() {
        const form = document.getElementById('quizForm');
        const respostas = {
            visual: 0,
            auditory: 0,
            reading: 0,
            kinesthetic: 0
        };

        const formData = new FormData(form);

        formData.forEach((value, key) => {
            if (value === 'A') {
                respostas.visual++;
            } else if (value === 'B') {
                respostas.auditory++;
            } else if (value === 'C') {
                respostas.reading++;
            } else if (value === 'D') {
                respostas.kinesthetic++;
            }
        });

        let predominante = 'Visual';
        let max = respostas.visual;
        let imagem = '../../../assets/images/imagem_visual.gif';

        if (respostas.auditory > max) {
            predominante = 'Aural (Auditivo)';
            max = respostas.auditory;
            imagem = '../../../assets/images/imagem_auditivo.gif';
        }

        if (respostas.reading > max) {
            predominante = 'Read/Write (Leitura/Escrita)';
            max = respostas.reading;
            imagem = '../../../assets/images/imagem_leitura.gif';
        }

        if (respostas.kinesthetic > max) {
            predominante = 'Kinesthetic (Cinestésico)';
            max = respostas.kinesthetic;
            imagem = '../../../assets/images/imagem_Cinestesico.gif';
        }

        const resultadoDiv = document.getElementById('resultado');
        resultadoDiv.innerHTML = `
        <p>Seu estilo de aprendizagem predominante é:</p>
        <img src="${imagem}" alt="${predominante}">
        <h2> ${predominante} </h2>
    `;
        resultadoDiv.style.display = "block";

        document.body.style.overflow = "hidden";

        const inputs = form.querySelectorAll('input');
        inputs.forEach(input => {
            input.disabled = true;
        });

        const botao = form.querySelector('button');
        botao.disabled = true;
    }
</script>
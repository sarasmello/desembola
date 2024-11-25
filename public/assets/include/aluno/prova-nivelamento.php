<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2 class="d-flex align-items-center gap-2 mb-4">
                <span>
                    <iconify-icon icon="line-md:speedometer-loop" class="fs-7 d-flex text-muted icone-registro"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
                        data-bs-title="Notas das Unidades"></iconify-icon>
                </span>
                Questionário de Nível de Conhecimento
            </h2>
            <form id="quizForm">
                <!-- Matemática -->
                <div><br>
                    <h4 class="titulobloco">Matemática</h4><br>
                    <p><strong>Questão 01:</strong> Resolva: 5 + 3 x 2 = ?</p>
                    <input type="radio" name="q1" value="A"> (A) 11<br>
                    <input type="radio" name="q1" value="B"> (B) 16<br>
                    <input type="radio" name="q1" value="C"> (C) 10<br>
                    <input type="radio" name="q1" value="D"> (D) 13<br>
                </div>
                <div><br>
                    <p><strong>Questão 02:</strong> Qual é a fração equivalente a 50%?</p>
                    <input type="radio" name="q2" value="A"> (A) 1/4<br>
                    <input type="radio" name="q2" value="B"> (B) 2/4<br>
                    <input type="radio" name="q2" value="C"> (C) 1/2<br>
                    <input type="radio" name="q2" value="D"> (D) 3/4<br>
                </div><br>

                <!-- Língua Portuguesa -->
                <div><br>
                    <h4 class="titulobloco">Língua Portuguesa</h4><br>
                    <p><strong>Questão 03:</strong> Qual é o sinônimo mais adequado para a palavra "feliz" no contexto: "Ele estava feliz com o resultado do trabalho."</p>
                    <input type="radio" name="q3" value="A"> (A) Triste<br>
                    <input type="radio" name="q3" value="B"> (B) Satisfeito<br>
                    <input type="radio" name="q3" value="C"> (C) Nervoso<br>
                    <input type="radio" name="q3" value="D"> (D) Confuso<br>
                </div><br>

                <div>
                    <p><strong>Questão 04:</strong> Qual é o sujeito da frase: "O cachorro correu pelo parque."?</p>
                    <input type="radio" name="q4" value="A"> (A) O cachorro<br>
                    <input type="radio" name="q4" value="B"> (B) Correu<br>
                    <input type="radio" name="q4" value="C"> (C) Pelo parque<br>
                    <input type="radio" name="q4" value="D"> (D) O parque<br>
                </div><br>

                <!-- Ciências -->
                <div><br>
                    <h4 class="titulobloco">Ciências</h4><br>
                    <p><strong>Questão 05:</strong> Qual é a principal função do coração no corpo humano?</p>
                    <input type="radio" name="q5" value="A"> (A) Filtrar sangue<br>
                    <input type="radio" name="q5" value="B"> (B) Bombear sangue<br>
                    <input type="radio" name="q5" value="C"> (C) Produzir hormônios<br>
                    <input type="radio" name="q5" value="D"> (D) Armazenar oxigênio<br>
                </div><br>

                <div>
                    <p><strong>Questão 06:</strong> O que acontece quando a água ferve?</p>
                    <input type="radio" name="q6" value="A"> (A) Ela congela<br>
                    <input type="radio" name="q6" value="B"> (B) Ela evapora<br>
                    <input type="radio" name="q6" value="C"> (C) Ela solidifica<br>
                    <input type="radio" name="q6" value="D"> (D) Ela condensa<br>
                </div><br>

                <!-- História e Geografia -->
                <div><br>
                    <h4 class="titulobloco">História e Geografia</h4><br>
                    <p><strong>Questão 07:</strong> Quem foi o primeiro presidente do Brasil?</p>
                    <input type="radio" name="q7" value="A"> (A) Juscelino Kubitschek<br>
                    <input type="radio" name="q7" value="B"> (B) Getúlio Vargas<br>
                    <input type="radio" name="q7" value="C"> (C) Deodoro da Fonseca<br>
                    <input type="radio" name="q7" value="D"> (D) João Goulart<br>
                </div><br>

                <div>
                    <p><strong>Questão 08:</strong> Qual é a capital do Brasil?</p>
                    <input type="radio" name="q8" value="A"> (A) São Paulo<br>
                    <input type="radio" name="q8" value="B"> (B) Rio de Janeiro<br>
                    <input type="radio" name="q8" value="C"> (C) Brasília<br>
                    <input type="radio" name="q8" value="D"> (D) Salvador<br>
                </div><br>

                <!-- Botão para calcular o nível -->
                <button class="btn btn-login" type="button" onclick="calcularNivel()">Finalizar Avaliação</button>
            </form>

            <div id="resultado"></div>
        </div>
    </div>
</div>

<!-- CSS para centralizar o retângulo -->
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

<!-- Script para calcular o nível -->
<script>
    function calcularNivel() {
        const form = document.getElementById('quizForm');
        const perguntas = form.querySelectorAll('input[type="radio"]');
        const respostasCorretas = {
            q1: "A", // 5 + 3 x 2 = 11
            q2: "C", // Fração equivalente a 50% é 1/2
            q3: "B", // Explicação sobre um evento
            q4: "A", // O cachorro
            q5: "B", // Bombear sangue
            q6: "B", // Ela evapora
            q7: "C", // Deodoro da Fonseca
            q8: "C", // Brasília
        };

        // Verificar se todas as questões foram respondidas
        const totalPerguntas = Object.keys(respostasCorretas).length;
        let respostasDados = 0;

        Object.keys(respostasCorretas).forEach(pergunta => {
            const respostaSelecionada = form.querySelector(`input[name="${pergunta}"]:checked`);
            if (respostaSelecionada) {
                respostasDados++;
            }
        });

        if (respostasDados < totalPerguntas) {
            alert("Por favor, responda todas as questões antes de continuar.");
            return; // Interrompe a execução se nem todas as questões foram respondidas
        }

        // Calcular pontuação
        let pontuacao = 0;
        for (let pergunta in respostasCorretas) {
            const respostaSelecionada = form.querySelector(`input[name="${pergunta}"]:checked`);
            if (respostaSelecionada && respostaSelecionada.value === respostasCorretas[pergunta]) {
                pontuacao++;
            }
        }

        // Exibir o nível do aluno baseado na pontuação
        let nivel = "";
        if (pontuacao <= 4) {
            nivel = "Gamer";
        } else if (pontuacao <= 6) {
            nivel = "Pro Player";
        } else if (pontuacao <= 8) {
            nivel = "Lendário";
        } else {
            nivel = "Mestre Supremo";
        }

        // Exibir o resultado no centro da tela
        const resultadoDiv = document.getElementById('resultado');
        resultadoDiv.innerText = `Seu nível é: ${nivel}`;
        resultadoDiv.style.display = "block";

        // Bloquear o scroll
        document.body.style.overflow = "hidden";

        // Desabilitar inputs
        perguntas.forEach(input => {
            input.disabled = true;
        });

        // Desabilitar botão
        const botao = form.querySelector('button');
        botao.disabled = true;
    }
</script>
const radioSim = document.querySelector('input[name="neurodivergente"][value="sim"]');
        const radioNao = document.querySelector('input[name="neurodivergente"][value="nao"]');
        const descricaoContainer = document.getElementById('descricaoNeurodivergenteContainer');
        const turmaDiv = document.getElementById("turma"); // Seleciona a div turma

        // Função para atualizar a visibilidade do campo de descrição
        function atualizarDescricaoVisibility() {
          if (radioSim.checked) {
            descricaoContainer.style.display = 'block';
          } else {
            descricaoContainer.style.display = 'none';
          }
        }

        radioSim.addEventListener('change', atualizarDescricaoVisibility);
        radioNao.addEventListener('change', atualizarDescricaoVisibility);

        // Função para mostrar/ocultar campos e controlar a visibilidade da div "turma"
        function toggleFields() {
          const tipoColaborador = document.getElementById('tipoColaborador').value;
          const colaboradorFields = document.getElementById('colaboradorFields');
          const professorFields = document.getElementById('professorFields');
          const turmaDiv = document.getElementById('turma');

          if (tipoColaborador === 'colaborador') {
            colaboradorFields.style.display = 'block';
            professorFields.style.display = 'none';
            turmaDiv.classList.add('hide'); // Oculta a div "turma" quando "Colaborador" é selecionado
          } else if (tipoColaborador === 'professor') {
            colaboradorFields.style.display = 'none';
            professorFields.style.display = 'block';
            turmaDiv.classList.remove('hide'); // Exibe a div "turma" quando "Professor" é selecionado
          } else {
            colaboradorFields.style.display = 'none';
            professorFields.style.display = 'none';
            turmaDiv.classList.add('hide'); // Oculta a div "turma" se nenhuma opção for selecionada
          }
        }

        // Chamar a função na carga inicial da página
        document.addEventListener('DOMContentLoaded', toggleFields);
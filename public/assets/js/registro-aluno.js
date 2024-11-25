const radioSim = document.querySelector('input[name="neurodivergente"][value="sim"]');
        const radioNao = document.querySelector('input[name="neurodivergente"][value="nao"]');
        const descricaoContainer = document.getElementById('descricaoNeurodivergenteContainer');

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
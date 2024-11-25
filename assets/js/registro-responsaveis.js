// Variável 'count' declarada no escopo global
let count = 1;

function addSelect() {
  count++;
  const container = document.getElementById('dependentes-container');

  // Cria uma nova div com os selects e os botões
  const newGroup = document.createElement('div');
  newGroup.className = "input-group mb-2";
  newGroup.id = `dependentes-group-${count}`;

  newGroup.innerHTML = `
<div class="container">
<div class="row g-2">
  <div class="col-7">
    <select class="form-control custom-placeholder">
      <option>Aluno</option>
      <option>Caio Brito</option>
      <option>Felipe Oliveira</option>
    </select>
  </div>

  <div class="col-3">
    <select class="form-control custom-placeholder">
      <option>Parentesco</option>
      <option>Pai</option>
      <option>Mãe</option>
      <option>Avô/Avó</option>
      <option>Tio/Tia</option>
    </select>
  </div>

  <div class="col-2 d-flex justify-content-start">
   <!-- Botão de adicionar -->
      <button class="btn-add ms-2" onclick="addSelect()">
        <iconify-icon icon="mingcute:add-fill" class="fs-7"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
            data-bs-title="Adicionar"></iconify-icon>
      </button>

    <!-- Botão de excluir -->
      <button class="btn-excluir ms-2" onclick="removeSelect(${count})">
        <iconify-icon icon="bxs:trash" class="fs-7"
            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success"
            data-bs-title="Remover"></iconify-icon>
      </button>
    
   
  </div>
</div>
</div>
`;



  container.appendChild(newGroup);
}

function removeSelect(id) {
  const selectGroup = document.getElementById(`dependentes-group-${id}`);
  if (selectGroup) {
    selectGroup.remove();
  }
}
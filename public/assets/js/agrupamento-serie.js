document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.btn-prof-aluno').forEach(button => {
      if (button.textContent.trim() === 'Professor') {
        button.classList.add('btn-prof-aluno-ativado');
      }
    });
  });

  function toggleContent(button) {
    var parent = button.closest('.card-body');
    var professorContent = parent.querySelector('.conteudo-professor');
    var alunoContent = parent.querySelector('.conteudo-aluno');
    var buttons = parent.querySelectorAll('.btn-prof-aluno');

    if (button.textContent.trim() === 'Professor') {
      buttons.forEach(btn => {
        if (btn.textContent.trim() === 'Professor') {
          btn.classList.add('btn-prof-aluno-ativado');
        } else {
          btn.classList.remove('btn-prof-aluno-ativado');
        }
      });

      professorContent.style.display = 'block';
      alunoContent.style.display = 'none';
    } else {
      buttons.forEach(btn => {
        if (btn.textContent.trim() === 'Aluno') {
          btn.classList.add('btn-prof-aluno-ativado');
        } else {
          btn.classList.remove('btn-prof-aluno-ativado');
        }
      });

      alunoContent.style.display = 'block';
      professorContent.style.display = 'none';
    }
  }

  const alunos = [{
      nome: 'Adriano Costa Oliveira',
      idade: 12
    },
    {
      nome: 'Alice Rocha Martins',
      idade: 11
    },
    {
      nome: 'Beatriz Lima Souza',
      idade: 10
    },
    {
      nome: 'Bruno Costa Pereira',
      idade: 11
    },
    {
      nome: 'Camila Alves Souza',
      idade: 12
    },
    {
      nome: 'Carlos Henrique Silva',
      idade: 10
    },
    {
      nome: 'Daniela Pereira Lima',
      idade: 11
    },
    {
      nome: 'Diego Santos Rocha',
      idade: 12
    },
    {
      nome: 'Eduardo Silva Almeida',
      idade: 11
    },
    {
      nome: 'Elaine Costa Ferreira',
      idade: 10
    },
    {
      nome: 'Fernanda Oliveira Santos',
      idade: 12
    },
    {
      nome: 'Gabriela Lima Tavares',
      idade: 11
    },
    {
      nome: 'Guilherme Souza Silva',
      idade: 12
    },
    {
      nome: 'Henrique Alves Pereira',
      idade: 10
    },
    {
      nome: 'Igor Mendes Rocha',
      idade: 11
    },
    {
      nome: 'Isabela Almeida Campos',
      idade: 12
    },
    {
      nome: 'João Pedro Martins',
      idade: 10
    },
    {
      nome: 'Juliana Costa Oliveira',
      idade: 11
    },
    {
      nome: 'Larissa Tavares Lima',
      idade: 12
    },
    {
      nome: 'Leonardo Ribeiro Souza',
      idade: 10
    },
    {
      nome: 'Luana Rodrigues Silva',
      idade: 11
    },
    {
      nome: 'Lucas Almeida Costa',
      idade: 12
    },
    {
      nome: 'Marcos Henrique Lopes',
      idade: 11
    },
    {
      nome: 'Mariana Dias Ferreira',
      idade: 10
    },
    {
      nome: 'Mateus Santos Rocha',
      idade: 12
    },
    {
      nome: 'Natália Pereira Lima',
      idade: 11
    },
    {
      nome: 'Nicole Souza Ribeiro',
      idade: 10
    },
    {
      nome: 'Pedro Augusto Oliveira',
      idade: 12
    },
    {
      nome: 'Rafael Mendes Lima',
      idade: 11
    },
    {
      nome: 'Roberta Costa Martins',
      idade: 12
    },
    {
      nome: 'Sofia Alves Santos',
      idade: 10
    },
    {
      nome: 'Thiago Rodrigues Silva',
      idade: 11
    },
    {
      nome: 'Victor Almeida Souza',
      idade: 12
    },
    {
      nome: 'Vinícius Costa Oliveira',
      idade: 11
    },
    {
      nome: 'Yasmin Tavares Santos',
      idade: 10
    }
  ];

  const itemsPerPage = 12;
  let currentPage = 1;

  function renderTable(page) {
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const paginatedAlunos = alunos.slice(startIndex, endIndex);

    const tableBody = document.getElementById('aluno-table-body');
    tableBody.innerHTML = '';

    paginatedAlunos.forEach(aluno => {
      const row = `<tr>
            <th scope="row" class="ps-0 fw-medium">
                <span class="table-link1 text-truncate d-block">${aluno.nome}</span>
            </th>
            <td class="text-center fw-medium text-verde">${aluno.idade}</td>
        </tr>`;
      tableBody.insertAdjacentHTML('beforeend', row);
    });

    renderPaginationControls();
  }

  function renderPaginationControls() {
    const totalPages = Math.ceil(alunos.length / itemsPerPage);
    const paginationControls = document.getElementById('pagination-controls');
    paginationControls.innerHTML = '';

    for (let i = 1; i <= totalPages; i++) {
      const button = document.createElement('button');
      button.textContent = i;
      button.classList.add('pagination-button');
      if (i === currentPage) button.classList.add('active');

      button.addEventListener('click', () => {
        currentPage = i;
        renderTable(currentPage);
      });

      paginationControls.appendChild(button);
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    renderTable(currentPage);
  });

  const professores = [{
      nome: 'Amanda Ferreira Souza',
      materia: 'Inglês'
    },
    {
      nome: 'Ana Paula Rocha Lima',
      materia: 'Educação Física'
    },
    {
      nome: 'André Gustavo Pereira',
      materia: 'Filosofia'
    },
    {
      nome: 'Beatriz Lopes Rocha',
      materia: 'Física'
    },
    {
      nome: 'Bruno Mendes Silva',
      materia: 'Geografia'
    },
    {
      nome: 'Camila Ribeiro Fonseca',
      materia: 'História'
    },
    {
      nome: 'Carolina Pinto Ramos',
      materia: 'Informática'
    },
    {
      nome: 'Eduardo Barbosa Pinto',
      materia: 'Inglês'
    },
    {
      nome: 'Felipe Oliveira Nunes',
      materia: 'Matemática'
    },
    {
      nome: 'Flávia Machado Costa',
      materia: 'Português'
    },
    {
      nome: 'Gabriel Torres Pires',
      materia: 'Química'
    },
    {
      nome: 'Gustavo Souza Vieira',
      materia: 'Redação'
    }
  ];

  // Selecionar o contêiner onde os professores serão inseridos
  const conteudoProfessor = document.getElementById('conteudo-professor');

  // Iterar sobre o array de professores e adicionar os elementos HTML
  professores.forEach(professor => {
    const professorItem = document.createElement('h5');
    professorItem.classList.add('titulobloco2', 'd-flex', 'justify-content-between', 'align-items-center', 'lista-prof-nomes');
    professorItem.innerHTML = `
            <span>${professor.nome}</span>
            <span class="badge bg-light text-dark ms-auto materias-prof">${professor.materia}</span>
        `;
    conteudoProfessor.appendChild(professorItem);
  });
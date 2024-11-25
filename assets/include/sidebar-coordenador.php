<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="limenu">
            <a class="menu-accordion" href="dashboard-coordenador.php" aria-expanded="false">
                <span style="display: flex; align-items: center;">
                    <span class="hide-menu">
                        <span>
                            <iconify-icon icon="lets-icons:home-duotone" class="fs-6"></iconify-icon>
                        </span>
                    </span>Dashboard
                </span>
            </a>
        </li>
        <li class="limenu">
            <a class="menu-accordion" href="javascript:void(0)" aria-expanded="false" onclick="toggleAccordion(event)">
                <span style=" display: flex; align-items: center;">
                    <span class="hide-menu">
                        <span>
                            <iconify-icon icon="solar:user-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                    </span>Gestão de Usuários
                </span>
                <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
            </a>
            <ul class="collapse" style="display: none; list-style-type: none;">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="registro-aluno.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="ph:student-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Aluno</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./registro-colaborador.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="icon-park-twotone:classroom" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Colaborador</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./registro-responsaveis.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="icon-park-twotone:family" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Responsáveis</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./registro-turmas.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="iconoir:group" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Turmas</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="limenu">
            <a class="menu-accordion" href="javascript:void(0)" aria-expanded="false" onclick="toggleAccordion(event)">
                <span style="display: flex; align-items: center;">
                    <span class="hide-menu">
                        <span>
                            <iconify-icon icon="ph:books-duotone" class="fs-6"></iconify-icon>
                        </span>
                    </span>GESTÃO DE CONTEÚDO
                </span>
                <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
            </a>
            <ul class="collapse" style="display: none; list-style-type: none;">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/arquivos-atividades.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="ph:archive-tray-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Arquivos de atividade</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/materiais-educativos.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="ph:books-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Materiais Educativos</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="limenu">
            <a class="menu-accordion" href="javascript:void(0)" aria-expanded="false" onclick="toggleAccordion(event)">
                <span style="display: flex; align-items: center;">
                    <span class="hide-menu">
                        <span>
                            <iconify-icon icon="stash:people-group-duotone" class="fs-6"></iconify-icon>
                        </span>
                    </span>GESTÃO DE ALUNOS
                </span>
                <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
            </a>
            <ul class="collapse" style="display: none; list-style-type: none;">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/gestao-progresso.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="lets-icons:time-progress-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Progresso</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="limenu">
            <a class="menu-accordion" href="javascript:void(0)" aria-expanded="false" onclick="toggleAccordion(event)">
                <span style="display: flex; align-items: center;">
                    <span class="hide-menu">
                        <span>
                            <iconify-icon icon="mingcute:group-3-line" class="fs-6"></iconify-icon>
                        </span>
                    </span>GESTÃO DE TURMAS
                </span>
                <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
            </a>
            <ul class="collapse" style="display: none; list-style-type: none;">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/gestao-turnos.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="grommet-icons:group" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Turmas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./feedbacks.php" aria-expanded="false">
                        <span>
                            <iconify-icon icon="solar:chat-round-like-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Feedbacks/Avisos</span>
                    </a>
                </li>
            </ul>
        </li>
        
    </ul>
</nav>

<script src="../assets/js/efeito-sidebar.js"></script>
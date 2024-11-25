<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex justify-content-center align-items-center"> <!-- Usando justify-content-center -->
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="../assets/images/logos/logodash.svg" alt="" width="218" height="70" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Conteúdo Sidebar -->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="limenu">
                    <a class="menu-accordion" href="../dashboard-professor.php" aria-expanded="false">
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
                            <a class="sidebar-link" href="../professor/arquivos-atividades.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="ph:archive-tray-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Arquivos de atividade</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../professor/materiais-educativos.php" aria-expanded="false">
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
                            <a class="sidebar-link" href="../professor/gestao-progresso.php" aria-expanded="false">
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
                            <a class="sidebar-link" href="../professor/gestao-turnos.php" aria-expanded="false">
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
                <li class="limenu">
                    <a class="menu-accordion" href="javascript:void(0)" aria-expanded="false" onclick="toggleAccordion(event)">
                        <span style="display: flex; align-items: center;">
                            <span class="hide-menu">
                                <span>
                                    <iconify-icon icon="ic:twotone-task" class="fs-6"></iconify-icon>
                                </span>
                            </span>ATIVIDADES
                        </span>
                        <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
                    </a>
                    <ul class="collapse" style="display: none; list-style-type: none;">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../professor/gerar-questoes.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="pepicons-print:arrows-spin-circle" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Gerar Questões</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../professor/visualizar-atividades.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="tabler:eye-search" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Visualizar Atividades</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../professor/imprimir-atividades.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:printer-line-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Imprimir Atividades</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../professor/escanear-atividades.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="carbon:scan-alt" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Escanear Atividades</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>
        </nav>
    </div>
    <!-- End Sidebar scroll-->
</aside>
<script src="../../assets/js/efeito-sidebar.js"></script>
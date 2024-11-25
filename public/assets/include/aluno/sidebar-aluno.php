<aside class="left-sidebar">
    <div>
        <div class="brand-logo d-flex justify-content-center align-items-center"> <!-- Usando justify-content-center -->
            <a href="./index.html" class="text-nowrap logo-img">
                <img src="../assets/images/logos/logodash.svg" alt="" width="218" height="70" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="limenu">
                    <a class="menu-accordion" href="../dashboard-aluno.php" aria-expanded="false">
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
                                    <iconify-icon icon="icon-park-twotone:brain" class="fs-6"></iconify-icon>
                                </span>
                            </span>NIVELAMENTO
                        </span>
                        <iconify-icon icon="iconamoon:arrow-down-2" class="accordion-icon" style="font-size: 1.2em; margin-left: 10px;"></iconify-icon>
                    </a>
                    <ul class="collapse" style="display: none; list-style-type: none;">
                  
                    <li class="sidebar-item">
                            <a class="sidebar-link" href="../aluno/prova-nivelamento.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="fluent:tasks-app-20-filled" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Prova de Nivelamento</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../aluno/estilo-aprendizagem.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="mingcute:classify-fill" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Estilo de Aprendizagem</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <a class="menu-accordion" style="margin-top: 20px!important;" href="../aluno/materiais-educativos.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="ph:books-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span style="margin-right: 100%;">Materiais Educativos</span>
                            </a>
                
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
                            <a class="sidebar-link" href="../aluno/gestao-progresso.php" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="lets-icons:time-progress-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Progresso</span>
                            </a>
                        </li>

                    </ul>
                </li>
                
                
                
            </ul>
        </nav>
    </div>
</aside>
<script src="../../assets/js/efeito-sidebar.js"></script>
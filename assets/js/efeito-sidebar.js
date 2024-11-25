let lastOpenedAccordion = null;

    function toggleAccordion(event) {
        const accordion = event.currentTarget;
        const content = accordion.nextElementSibling;
        const isOpen = accordion.getAttribute("aria-expanded") === "true";

        // Se houver um menu aberto e não for o atual
        if (lastOpenedAccordion && lastOpenedAccordion !== accordion) {
            const lastContent = lastOpenedAccordion.nextElementSibling;
            lastOpenedAccordion.setAttribute("aria-expanded", "false");
            lastContent.classList.remove('show');
            setTimeout(() => {
                lastContent.style.display = "none";
            }, 300);
        }

        // Alternar o estado do accordion atual
        accordion.setAttribute("aria-expanded", !isOpen);

        if (isOpen) {
            content.classList.remove('show');
            setTimeout(() => {
                content.style.display = "none";
            }, 300);
        } else {
            content.style.display = "block";
            setTimeout(() => {
                content.classList.add('show');
            }, 10);
        }

        // Atualizar o último menu aberto
        lastOpenedAccordion = isOpen ? null : accordion;
    }

    document.addEventListener("DOMContentLoaded", () => {
        const accordions = document.querySelectorAll(".menu-accordion");
        accordions.forEach(accordion => {
            const content = accordion.nextElementSibling;
            // Abrir todos os menus
            accordion.setAttribute("aria-expanded", "true");
            content.style.display = "block";

            // Adiciona a classe show para ativar a animação
            setTimeout(() => {
                content.classList.add('show');
            }, 10);

            // Fechar após um tempo
            setTimeout(() => {
                accordion.setAttribute("aria-expanded", "false");
                content.classList.remove('show');
                setTimeout(() => {
                    content.style.display = "none";
                }, 300);
            }, 2000);
        });
    });
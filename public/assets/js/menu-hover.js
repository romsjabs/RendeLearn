const menuToggle = document.querySelector('.menu-toggle');
    const headerButtons = document.querySelector('.header-buttons');

    menuToggle.addEventListener('click', () => {
        headerButtons.classList.toggle('open');
    });

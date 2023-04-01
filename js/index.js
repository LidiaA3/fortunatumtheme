const toggleButton = document.querySelector('#nav-toggle');

const menu = document.querySelector('#menu-menu-principal');

const menuShowButton = document.querySelector('#menu-show');
const menuHiddenButton = document.querySelector('#menu-hidden');

toggleButton.addEventListener('click', () => {
    menu.classList.toggle('menu-mobile-active');

    if(menu.classList.contains('menu-mobile-active')) {
        menuShowButton.classList.remove('nav-toggle__active');
        menuShowButton.classList.add('nav-toggle__disactive');
        menuHiddenButton.classList.add('nav-toggle__active');
        menuHiddenButton.classList.remove('nav-toggle__disactive');
    } else {
        menuShowButton.classList.add('nav-toggle__active');
        menuShowButton.classList.remove('nav-toggle__disactive');
        menuHiddenButton.classList.remove('nav-toggle__active');
        menuHiddenButton.classList.add('nav-toggle__disactive');
    }

})
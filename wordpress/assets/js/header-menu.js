const navHeader = document.querySelector('#nav');
const btnOpen = document.querySelector('.btn-open');
const btnClosed = document.querySelector('.btn-closed');

btnOpen.addEventListener('click', toggleClass);
btnClosed.addEventListener('click', toggleClass);

function toggleClass() {
    navHeader.classList.toggle('none');
    btnOpen.classList.toggle('none');
}

const menu = document.querySelector('.menu');
menu.addEventListener('mouseover', hoverNav);
menu.addEventListener('mouseout', close);


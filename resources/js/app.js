

const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menu-btn');
const closeMenuBtn = document.getElementById('close-menu-button');
const outsideMenu = document.getElementById('outside-menu');

menuBtn.addEventListener('click', function() {
    menu.className = '';
    outsideMenu.className = '';
});

closeMenuBtn.addEventListener('click', function() {
    menu.className = 'hide';
    outsideMenu.className = 'hide';
});

outsideMenu.addEventListener('click', function() {
    menu.className = 'hide';
    outsideMenu.className = 'hide';
});

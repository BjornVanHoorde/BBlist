

const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menu-btn');
const closeMenuBtn = document.getElementById('close-menu-button');
const outsideMenu = document.getElementById('outside-menu');
const addToList = document.getElementById('add-to-list');
const cancelChoice = document.getElementById('cancel-choice');
const listChoices = document.getElementById('list-choices');

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

addToList.addEventListener('click', function() {
    listChoices.className = '';
});

cancelChoice.addEventListener('click', function() {
    listChoices.className = 'hide';
});



const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menu-btn');
const closeMenuBtn = document.getElementById('close-menu-button');
const outsideMenu = document.getElementById('outside-menu');
const choiceBtn = document.getElementById('choice-btn');
const cancelChoice = document.getElementById('cancel-choice');
const choiceBox = document.getElementById('choice-box');

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

choiceBtn.addEventListener('click', function() {
    choiceBox.className = '';
});

cancelChoice.addEventListener('click', function() {
    choiceBox.className = 'hide';
});

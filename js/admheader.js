// Add toggle functionality to menu button
const toggleButton = document.querySelector('.menu-toggle');
const menu = document.querySelector('.navmenu');

toggleButton.addEventListener('click', () => {
    toggleButton.classList.toggle('active');
    menu.classList.toggle('active');
});

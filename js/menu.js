const menuToggle = document.getElementById('menu-toggle');
const listMenu = document.getElementById('list-menu');

menuToggle.addEventListener('click',function(){
    listMenu.classList.toggle('active');
});

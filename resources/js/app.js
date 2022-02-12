require('./bootstrap');

//sidebar control start
let showSidebar = document.getElementById('showSidebar');
let hideSidebar = document.getElementById('hideSidebar');
let sidebarCol = document.getElementById('sidebarCol');

showSidebar.addEventListener('click',function (){
    sidebarCol.classList.toggle('show-sidebar');
});

hideSidebar.addEventListener('click',function (){
    sidebarCol.classList.toggle('show-sidebar');
});
//sidebar control end

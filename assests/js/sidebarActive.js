// ================ Active Link Sidebar ==================
const activePage = window.location.pathname;
const sidebarLinks = document.querySelectorAll('.menu_item a').forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
})
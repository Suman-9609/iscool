const openBtn = document.querySelector(".openBtn")
    , closeBtn = document.querySelector(".close_btn")
    , navList = document.querySelector(".nav_list");
openBtn.addEventListener("click", function () {
    navList.classList.add("show")
}),
    closeBtn.addEventListener("click", function () {
        navList.classList.remove("show")
});


// ================== Scroll Reveal Animation =============== 
const sr = ScrollReveal({
    distance: '60px',
    duration: 2800,
})

sr.reveal(`.aboutus_container,.heading,.footer,.notice_content`,{
    origin: 'top',
    interval: 100,
})

sr.reveal(`.carousel,.card_update`,{
    origin: 'left',
})

sr.reveal(`.card_service`,{
    origin: 'right',
})


//  =============== Show Scroll Up ===================
function scrollup(){
    const scrollUp = document.getElementById('scroll-up');
    // console.log(scrollUp);
    // when the scroll is heigher than 200 viewport height
    if(this.scrollY >= 200) scrollUp.classList.add('show_scroll'); else scrollUp.classList.remove('show_scroll');
}
window.addEventListener('scroll', scrollup);


//  =============== Active Navbar Link ===================
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.wrapper .nav_list li a');
const menuLength = menuItem.length;
// console.log(menuLength);
for(let i = 0; i < menuLength; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].classList.add("active");
    }
}




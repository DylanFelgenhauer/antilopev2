const sidenav = document.getElementById("mySidenav");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");



/* Set the width of the side navigation to 250px */
function openNav() {
    sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    sidenav.classList.remove("active");
}
const sect2 = document.querySelector('.reveal1')
const sect3 = document.querySelector('.reveal2')
const sect4 = document.querySelector('.reveal3')
const sect5 = document.querySelector('.reveal4')
const sect6 = document.querySelector('.reveal5')
const modules = document.querySelector('.reveal6')
const about = document.querySelector('.reveal7')
window.addEventListener("scroll", ()=>{
        const {scrollTop,clientHeight} =document.documentElement;
        const topElementToTopViewport =sect2.getBoundingClientRect().top;
        const topElementToTopViewport2 =sect3.getBoundingClientRect().top;
        const topElementToTopViewport3 =sect4.getBoundingClientRect().top;
        const topElementToTopViewport4 =sect5.getBoundingClientRect().top;
        const topElementToTopViewport5 =sect6.getBoundingClientRect().top;


    if (scrollTop > ((scrollTop+topElementToTopViewport)).toFixed()-clientHeight*0.5){
        sect2.classList.add("reveal-visible");
    }
    if (scrollTop > ((scrollTop+topElementToTopViewport2)).toFixed()-clientHeight*0.5){
        sect3.classList.add("reveal-visible");
    }
    if (scrollTop > ((scrollTop+topElementToTopViewport3)).toFixed()-clientHeight*0.5){
        sect4.classList.add("reveal-visible");
    }
    if (scrollTop > ((scrollTop+topElementToTopViewport4)).toFixed()-clientHeight*0.5){
        sect5.classList.add("reveal-visible");
    }
    if (scrollTop > ((scrollTop+topElementToTopViewport5)).toFixed()-clientHeight*0.5){
        sect6.classList.add("reveal-visible");
    }



})
window.addEventListener("load",()=>{
    modules.classList.add('reveal-visible');

})
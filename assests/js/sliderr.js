const slideContainer = document.querySelector('.carousel');
const slide = document.querySelector('.slider');
const allBanner = slide.children;
const prevBtn = document.querySelector('.left');
const nextBtn = document.querySelector('.right');
// console.log(slide);
const interval = 3000;

let banner = document.querySelectorAll('.banner');
var index = 1;
let interValId;

const firstNode = banner[0].cloneNode(true);
const lastNode = banner[banner.length-1].cloneNode(true);

firstNode.id = `first-clone`;
lastNode.id = `last-clone;`

slide.append(firstNode);
slide.prepend(lastNode);

const bannereWidth = banner[index].clientWidth;

slide.style.transform =`translateX(${- bannereWidth * index}px)`;

const runSlider =() =>{
   interValId = setInterval(() => {
       if(index>allBanner.length) return 1;
       index++;
       slide.style.transform =`translateX(${- bannereWidth * index}px)`;
       slide.style.transition = `1s`;
    }, interval);
}

const getBanner = () => document.querySelectorAll('.banner');


slide.addEventListener('transitionend', () =>{
    banner = getBanner();
    if(index>allBanner.length) return;
    if(banner[index].id === firstNode.id){
        slide.style.transition = `none`;
        index=1;
        slide.style.transform =`translateX(${- bannereWidth * index}px)`;
    }
    if(banner[index].id === lastNode.id){
        slide.style.transition = `none`;
        index = banner.length-2;
        slide.style.transform =`translateX(${- bannereWidth * index}px)`;
    }
})


const moveToNextSlide = () => {
    banner = getBanner();
    if(index >= banner.length -1) return;
      index++;
       slide.style.transform =`translateX(${- bannereWidth * index}px)`;
       slide.style.transition = `1s`;
}

const moveToPrevSlide = () => {
    if(index <= 0 ) return;
        index--;
       slide.style.transform =`translateX(${- bannereWidth * index}px)`;
       slide.style.transition = `1s`;
}




slideContainer.addEventListener('mouseenter', () =>{
    clearInterval(interValId);
    prevBtn.style.display = `block`;
    nextBtn.style.display = `block`;
});

slideContainer.addEventListener('mouseleave', () =>{
    prevBtn.style.display = `none`;
    nextBtn.style.display = `none`;
});

slideContainer.addEventListener('mouseleave', runSlider);

nextBtn.addEventListener('click', moveToNextSlide);

prevBtn.addEventListener('click', moveToPrevSlide);

runSlider();



//======================== for card slider ===========================
const cardSlider = document.querySelector('.card_slider');
const cardImage = document.querySelectorAll('.card_slider img')
const btnIcon = document.getElementById('btnIcon');
const btnIconPause = document.querySelector('.fa-pause');
const btnIconPlay = document.querySelector('.fa-play');

// console.log(cardImage);
var cardIndex = 0;




btnIconPause.addEventListener('click', function () {
   clearInterval(intervalIndex2);
   btnIconPlay.style.display = `block`;
   btnIconPause.style.display = `none`;
});

btnIconPlay.addEventListener('click', function(){
    runCardSlider();
    btnIconPlay.style.display = `none`;
    btnIconPause.style.display = `block`;
})


function runCardSlider(){
    intervalIndex2 = setInterval( function(){
        cardIndex = (cardIndex < cardImage.length-1)?cardIndex + 1: 0;
        cardSlider.style.transform = `translateX(` + [cardIndex] * -12.5 + `%)`;
    },4000);
}

runCardSlider();



// ================ linkage partner ===================

// const linkageContainer = document.querySelector('.linkage_container');
const container = document.querySelector('.linkage');
const allLinkItem = container.children;
const containerWidth = container.offsetWidth;

const firstClone = allLinkItem[0].cloneNode(true);
// console.log(firstClone);
firstClone.id = 'first-id';
container.append(firstClone);

const margin = 30;
var items;
var totalLinkItemWidth = 0;
var linkItemIndex = 0;
var itemsWidth=0;

responsive = [
    {breakPoint: {width:0, item:1}},
    {breakPoint: {width:600, item:2}},
    {breakPoint: {width:1200, item:3}}
]

function load(){
    for(let i = 0; i < responsive.length; i++){
        if(window.innerWidth > responsive[i].breakPoint.width){
            items = responsive[i].breakPoint.item;
        }
    }
    // console.log(items);
    setWidth();
}

function setWidth(){
    for(let i=0; i<allLinkItem.length; i++){
        allLinkItem[i].style.width = (containerWidth/items)-margin+"px";
        allLinkItem[i].style.margin = (margin/2)+"px";
        totalLinkItemWidth += containerWidth/items; 
        // console.log(allLinkItem[i].style.width);
    }
    container.style.width = totalLinkItemWidth+"px";
     // item width
     itemsWidth = containerWidth / items;
    autoLinkItem();


}

function autoLinkItem(){
   var linkIntervalIndex = setInterval(() => {
        if(linkItemIndex>allLinkItem.length) return linkItemIndex = 0;
        linkItemIndex++;
        container.style.transform = `translateX(${-itemsWidth*[linkItemIndex]}px)`;
        container.style.transition = "0.7s";
    }, 2000);

    container.addEventListener('mouseenter', () =>{
        clearInterval(linkIntervalIndex);
    })
}
container.addEventListener('mouseleave', autoLinkItem);


container.addEventListener('transitionend', () =>{
    if(allLinkItem[linkItemIndex].id === firstClone.id){
        container.style.transition = "none";
        linkItemIndex = 0;
        container.style.transform = `translateX(${-itemsWidth*[linkItemIndex]}px)`;
    }
});



window.onload = load();

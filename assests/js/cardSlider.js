const cardSlider = document.querySelector('.card_slider');
const cardImage = document.querySelectorAll('.card_slider img');
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
        cardSlider.style.transform = `translateX(` + [cardIndex] * -25 + `%)`;
    },2000);
}

runCardSlider();





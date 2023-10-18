const openModal = document.getElementById('modal_open');
const closeModal = document.querySelector('.close_modal');
const modal = document.getElementById('modal_contact');


openModal.addEventListener('click', function(){
    modal.style.display ='block';
});

closeModal.addEventListener('click', function(){
    modal.style.display = 'none';
});
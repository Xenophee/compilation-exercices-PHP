
const btn = document.querySelectorAll('.showCode');
const modalImg = document.querySelector('.modal-img');
const modal = document.querySelector('dialog');



btn.forEach((element, key) => {
    element.addEventListener('click', () => {
        modal.showModal();

        modalImg.src = '../public/assets/img/form/' + (key +1) + '.png';
    });
});


modal.addEventListener('click', () => {
    modal.close();
});
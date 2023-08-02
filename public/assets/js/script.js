
const btn = document.querySelectorAll('.showCode');
const modalImg = document.querySelectorAll('.modal-img');
const modal = document.querySelector('dialog');


btn.forEach((element, key) => {
    element.addEventListener('click', () => {
        modal.showModal();

        modalImg.forEach((element, key) => {
            if (key === 0) {
                element.src = `../public/assets/img/form/html/${key + 1}.png`;
            } else {
                element.src = `../public/assets/img/form/php/${key + 1}.png`;
            }
        });
    });
});


modal.addEventListener('click', () => {
    modal.close();
});
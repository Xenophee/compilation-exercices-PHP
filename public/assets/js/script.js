
const btn = document.querySelectorAll('.showCode');
const modalHtml = document.querySelector('.html-img');
const modalPhp = document.querySelector('.php-img');
const modal = document.querySelector('dialog');


btn.forEach((element, key) => {
    element.addEventListener('click', () => {
        modal.showModal();

        modalHtml.src = `../public/assets/img/form/html/${key + 1}.png`;
        modalPhp.src = `../public/assets/img/form/php/${key + 1}.png`;
    });
});


modal.addEventListener('click', () => {
    modal.close();
});
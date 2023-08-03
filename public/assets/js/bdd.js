const exo = document.querySelectorAll('.exo');


// Affiche le code et le referme en cliquant sur la modal

exo.forEach(element => {
    let btn = element.querySelector('.showCode');
    let modal = element.querySelector('dialog');

    btn.addEventListener('click', (event) => {
        modal.showModal();
    });

    if (modal != null) {
        modal.addEventListener('click', () => {
            modal.close();
        });
    };
});


showResult.addEventListener('click', () => {
    let resultContainer = document.querySelector('.result-container');
    resultContainer.classList.toggle('d-none');
});


// ======================================================================================
// --------------------------------------------------------------------------------------
const btn = document.querySelectorAll('.showSpecialCode');
const modalImg = document.querySelector('.modal-img');
const modal = document.querySelector('dialog');



btn.forEach((element, key) => {
    element.addEventListener('click', () => {
        modal.showModal();

        modalImg.src = `../public/assets/img/bdd/${key + 1}.png`;
    });
});


modal.addEventListener('click', () => {
    modal.close();
});
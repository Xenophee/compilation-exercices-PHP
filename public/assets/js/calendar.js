// Création des variables 'selecteurs'
let month = document.getElementById('month');
let year = document.getElementById('year');
let formDate = document.getElementById('formDate');

// Fonction permettant d'envoyer le form
const submitForm = () => {
    formDate.submit();
}

// création des ecouteurs
month.addEventListener('change', submitForm);
year.addEventListener('change', submitForm);




// ======================================================================================
// --------------------------------------------------------------------------------------
const btn = document.querySelectorAll('.showCode');
const modalImg = document.querySelector('.modal-img');
const modal = document.querySelector('dialog');



btn.forEach((element, key) => {
    element.addEventListener('click', () => {
        modal.showModal();

        modalImg.src = `../public/assets/img/calendar/${key + 1}.png`;
    });
});


modal.addEventListener('click', () => {
    modal.close();
});
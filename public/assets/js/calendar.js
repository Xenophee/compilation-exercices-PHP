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

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
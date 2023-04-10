document.querySelectorAll('.mostrar-mais').forEach(button => {
    button.addEventListener('click', event => {
        const treino = event.target.closest('.treino');
        const extraInfo = treino.querySelector('.info-extra');
        extraInfo.classList.toggle('show');
    });
});

document.querySelectorAll('h2').forEach(day => {
    day.addEventListener('click', event => {
        const seta = event.target;
        const treinos = event.target.nextElementSibling;
        treinos.classList.toggle('show');
        seta.classList.toggle('open');
    });
});

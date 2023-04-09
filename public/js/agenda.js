document.querySelectorAll('.show-more-button').forEach(button => {
    button.addEventListener('click', event => {
        const workout = event.target.closest('.workout');
        const extraInfo = workout.querySelector('.extra-info');
        extraInfo.classList.toggle('show');
    });
});

document.querySelectorAll('h2').forEach(day => {
    day.addEventListener('click', event => {
        const arrow = event.target;
        const workouts = event.target.nextElementSibling;
        workouts.classList.toggle('show');
        arrow.classList.toggle('open');
    });
});

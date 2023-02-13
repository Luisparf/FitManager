const filterCategory = document.querySelector('#filter-category');
const workouts = document.querySelectorAll('.workout');

filterCategory.addEventListener('change', function(event) {
  const selectedCategory = event.target.value;

  workouts.forEach(function(workout) {
    if (selectedCategory === '' || workout.dataset.category === selectedCategory) {
      workout.style.display = 'block';
    } else {
      workout.style.display = 'none';
    }
  });
});

  const showMoreButtons = document.querySelectorAll('.show-more-button');
  for (let i = 0; i < showMoreButtons.length; i++) {
    showMoreButtons[i].addEventListener('click', function() {
      const extraInfo = this.parentNode.querySelector('.extra-info');
      extraInfo.classList.toggle('show');
    });
}

let favoriteWorkouts = [];
  
  // Adiciona um manipulador de eventos clique ao botão "Adicionar aos favoritos"
  const buttons = document.querySelectorAll(".favorite-button");
  buttons.forEach(button => {
    button.addEventListener("click", event => {
      const workout = event.target.parentElement;
      if(favoriteWorkouts.includes(workout)){
        favoriteWorkouts.pop(workout);
      }else{
        favoriteWorkouts.push(workout);
      }      
    });
  });

  function filterWorkouts() {
  const category = document.getElementById("filter-category").value;
  const workouts = document.querySelectorAll(".workout");

  workouts.forEach(workout => {
    if (category === "" || workout.dataset.category === category || favoriteWorkouts.includes(workout)) {
      workout.style.display = "block";
    } else {
      workout.style.display = "none";
    }
  });
}
document.getElementById("filter-category").addEventListener("change", filterWorkouts);
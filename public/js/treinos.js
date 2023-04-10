const filterCategory = document.querySelector('#filtro-categoria');
const treinos = document.querySelectorAll('.treino');

filterCategory.addEventListener('change', function(event) {
  const selectedCategory = event.target.value;

  treinos.forEach(function(treino) {
    if (selectedCategory === '' || treino.dataset.category === selectedCategory) {
      treino.style.display = 'block';
    } else {
      treino.style.display = 'none';
    }
  });
});

  const showMoreButtons = document.querySelectorAll('.mostrar-mais');
  for (let i = 0; i < showMoreButtons.length; i++) {
    showMoreButtons[i].addEventListener('click', function() {
      const extraInfo = this.parentNode.querySelector('.info-extra');
      extraInfo.classList.toggle('show');
    });
}

let favoritetreinos = [];
  
  // Adiciona um manipulador de eventos clique ao botão "Adicionar aos favoritos"
  const buttons = document.querySelectorAll(".botao-favoritos");
  buttons.forEach(button => {
    button.addEventListener("click", event => {
      const treino = event.target.parentElement;
      if(favoritetreinos.includes(treino)){
        favoritetreinos.pop(treino);
      }else{
        favoritetreinos.push(treino);
      }      
    });
  });

  function filtertreinos() {
  const category = document.getElementById("filtro-categoria").value;
  const treinos = document.querySelectorAll(".treino");

  treinos.forEach(treino => {
    if (category === "" || treino.dataset.categoryId === category || favoritetreinos.includes(treino)) {
      treino.style.display = "block";
    } else {
      treino.style.display = "none";
    }
  });
}
document.getElementById("filtro-categoria").addEventListener("change", filtertreinos);
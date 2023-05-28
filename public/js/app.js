// // Récupérer tous les éléments avec la classe 'hidden'
// const elements = document.querySelectorAll('.hidden');

// // Fonction pour faire apparaître les éléments progressivement
// function showElements() {
//   elements.forEach(function(element, index) {
//     // Ajouter une classe pour faire apparaître l'élément
//     element.classList.add('visible');
//   });
// }

// // Appeler la fonction showElements lorsque la page est chargée
// window.addEventListener('load', showElements);

const plusButton = document.getElementById('plus');
const counter = document.getElementById('counter');

let count= 0;

plusButton.addEventListener('click', function(){
    count++;
    counter.textContent = count;
})
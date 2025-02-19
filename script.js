
// Flip Function
document.getElementById('flipButton').addEventListener('click', function() {
    const flipContainer = document.querySelector('.flip-container');
    flipContainer.classList.toggle('flip'); // Toggle the 'flip' class
  });
// Go back -- Function
document.getElementById('goBack').addEventListener('click', function() {
    const backContainer = document.querySelector('.back-container');
    backContainer.classList.toggle('back'); // Toggle the 'back' class
  });


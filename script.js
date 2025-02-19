document.getElementById("flipButton").addEventListener("click", function () {
  const flipContainer = document.querySelector(".flip-container");
  flipContainer.classList.toggle("flip"); // Trigger the flip animation

  // Optionally, wait for the flip animation to finish
  setTimeout(() => {
    window.location.href = "hero.html"; // Or "home.php"
  }, 1000); // Adjust the timeout based on your CSS animation duration
});


//Homepage animation 
// Optional: Add any click or additional hover functionality here
// For example, navigate to another page when clicking a box:
document.getElementById('about').addEventListener('click', function() {
  window.location.href = 'about.html'; // Create and link to your "About Me" page
});
document.getElementById('contacts').addEventListener('click', function() {
  window.location.href = 'contacts.html'; // Create and link to your "Contacts" page
});
document.getElementById('projects').addEventListener('click', function() {
  window.location.href = 'projects.html'; // Create and link to your "Projects" page
});
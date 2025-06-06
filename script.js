//animation function Fade -in

document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");

  function checkScroll() {
    const triggerBottom = window.innerHeight * 0.85;

    cards.forEach((card) => {
      const cardTop = card.getBoundingClientRect().top;
      if (cardTop < triggerBottom) {
        card.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", checkScroll);
  checkScroll(); // Run on page load in case some cards are already in view
});

//view Cv image on about me -card 
document.getElementById("cvButton").addEventListener("click", function(event) {
  event.preventDefault(); // Prevent the default link action
  
  var imageDiv = document.getElementById("cvImage");
  if (imageDiv.style.display === "none") {
    imageDiv.style.display = "block"; // Show the image
  } else {
    imageDiv.style.display = "none"; // Hide the image
  }
});

//Form submission

document.getElementById("contact-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent default form submission

  // Show success message after form submission
  document.getElementById("contact-form").style.display = "none";
  document.getElementById("success-message").style.display = "block";
});

function resetForm() {
  document.getElementById("contact-form").style.display = "block";
  document.getElementById("success-message").style.display = "none";
  document.getElementById("contact-form").reset();
}
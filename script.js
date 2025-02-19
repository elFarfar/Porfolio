document.getElementById("flipButton").addEventListener("click", function () {
  const flipContainer = document.querySelector(".flip-container");
  flipContainer.classList.toggle("flip"); // Trigger the flip animation

  // Optionally, wait for the flip animation to finish
  setTimeout(() => {
    window.location.href = "hero.php"; // Or "home.php"
  }, 5000); // Adjust the timeout based on your CSS animation duration
});


//Homepage animation 
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".diagonal-section");

  sections.forEach((section, index) => {
    section.style.top = `${10 + index * 30}%`; // Adjust positioning
    section.style.left = "-50%"; // Position them outside of view initially

    // Animate them into view
    setTimeout(() => {
      section.style.left = "0";
    }, index * 500);

    // Hover effect to blur other sections
    section.addEventListener("mouseenter", () => {
      sections.forEach((other) => {
        if (other !== section) {
          other.style.filter = "blur(5px)";
        }
      });
    });

    section.addEventListener("mouseleave", () => {
      sections.forEach((other) => {
        other.style.filter = "none";
      });
    });
  });
});
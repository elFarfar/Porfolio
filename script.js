document.addEventListener("DOMContentLoaded", function () {
  const timelineItems = document.querySelectorAll(".timeline-item");

  function checkVisibility() {
    const windowHeight = window.innerHeight;

    timelineItems.forEach((item) => {
      const position = item.getBoundingClientRect().top;
      // Check if the item is in the viewport
      if (position < windowHeight * 0.8 && position >= 0) {
        item.classList.add("visible");
      }
    });
  }

  checkVisibility();
  window.addEventListener("scroll", checkVisibility);
});

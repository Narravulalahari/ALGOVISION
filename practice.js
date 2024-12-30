document.addEventListener("DOMContentLoaded", function() {
    const accordionItems = document.querySelectorAll(".accordion-item");
  
    accordionItems.forEach(item => {
      const btn = item.querySelector(".accordion-btn");
      btn.addEventListener("click", function() {
        item.classList.toggle("active");
      });
    });
  });

  
  function updateProgress(progress) {
    var progressBar = document.getElementById('progressBar');
    var progressValue = Math.min(400, 455); // Ensure progress doesn't exceed 455
    var progressPercentage = (progressValue / 455) * 100; // Calculate percentage
    progressBar.style.width = progressPercentage + '%';
    progressBar.setAttribute('aria-valuenow', progressValue);
  }
  
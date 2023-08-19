document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector(".button-loading");
    const loader = document.querySelector(".loader");
  
    button.addEventListener("click", function() {
      button.style.display = "none"; 
      loader.style.display = "block"; 
  
      setTimeout(function() {
        window.location.href = "aaa/pertama.html"; 
      }, 3000); 
  
      setTimeout(function() {
        loader.style.display = "none";
      }, 3000); 
    });
  });
  
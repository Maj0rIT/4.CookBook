document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("recipe-form");
  
    form.addEventListener("submit", function(event) {
      const nameRecipe = form.querySelector("#name_recipe");
      const description = form.querySelector("#content");
      const time = form.querySelector("#time");
      const difficulty = form.querySelector("#difficulty");
  
      if (nameRecipe.value.trim() === "") {
        alert("Proszę wprowadzić nazwę przepisu.");
        event.preventDefault();
      }
  
      if (description.value.trim() === "") {
        alert("Proszę wprowadzić opis przepisu.");
        event.preventDefault();
      }
  
      if (time.value.trim() === "") {
        alert("Proszę wprowadzić czas przygotowania.");
        event.preventDefault();
      }
  
      if (difficulty.value === "") {
        alert("Proszę wybrać poziom trudności.");
        event.preventDefault();
      }
    });
  });
  
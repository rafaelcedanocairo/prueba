const peso = document.getElementById('peso');

peso.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
     event.preventDefault();
     alert(peso.value)
    }
  });
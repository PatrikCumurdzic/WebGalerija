let button = document.getElementById("upload");
let div = document.getElementById("img-upload");

button.addEventListener("click", function(){
  div.classList.toggle("upload-slika");
})
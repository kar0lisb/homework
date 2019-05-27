var modal = document.getElementById("myModal");
// lango priskyrimas
var btn = document.getElementById("myBtn");
// span kuris uždaro langą
var span = document.getElementsByClassName("close")[0];
// po div paspaudimo atidaryti langą 
btn.onclick = function() {
  modal.style.display = "block";
}
// Uždaryti langą kai paspaudžiamas x
span.onclick = function() {
  modal.style.display = "none";
}
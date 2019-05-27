var modal1 = document.getElementById("myModal1");
// lango priskyrimas
var btn1 = document.getElementById("myBtn1");
// span kuris uždaro langą
var span1 = document.getElementsByClassName("close1")[0];
// po div paspaudimo atidaryti langą 
btn1.onclick = function() {
  modal1.style.display = "block";
}
// Uždaryti langą kai paspaudžiamas x
span1.onclick = function() {
  modal1.style.display = "none";
}

function myFunction() {
  var input = document.getElementById("input");
  var output = document.getElementById("output");
  output.innerHTML = input.value;
  output.style.display = "block";
}
function myFunction1() {
  var output1 = document.getElementById("output1");
  output1.innerHTML = "Нажата первая кнопка";
  output1.style.display = "block";
}

function myFunction2() {
  var output2 = document.getElementById("output2");
  output2.innerHTML = "Нажата вторая кнопка";
  output2.style.display = "block";
}
var block = document.querySelector(".myBlock");

block.addEventListener("mouseover", function() {
  this.style.transition = "all 0.5s ease";
  this.style.backgroundColor = "#f44361";
});

block.addEventListener("mouseout", function() {
  this.style.transition = "all 0.5s ease";
  this.style.backgroundColor = "#fff";
});
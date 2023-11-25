function myFunction() {
    var output = document.getElementById("output");
    output.innerHTML = "Hello, World!";
    output.style.display = "block";
  }
  
  document.addEventListener('click', function(event) {
    if (event.target.id === 'output') {
      myFunction();
    }
  });
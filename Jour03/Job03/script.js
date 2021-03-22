
var btn = document.querySelector('#button');
var nbr = document.getElementById("compteur").textContent;



function addOne(){
  nbr++;
  document.getElementById("compteur").innerHTML = nbr;
}


btn.addEventListener("click",addOne);

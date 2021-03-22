let boolean = false;

function showHide(){
  let text = document.getElementById("article");

  if (boolean == false) {
    text.style.display = "none";
    boolean = true;
  }
  else {
    text.style.display = "block";
    boolean = false;
  }

}

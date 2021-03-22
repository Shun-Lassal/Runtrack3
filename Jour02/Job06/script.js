
var keys='';
document.onkeypress = function(e) {
  get = window.event?event:e;
  key = get.keyCode?get.keyCode:get.charCode;
  key = String.fromCharCode(key);
  keys+=key;
  console.log(keys);
  document.getElementById("text").innerHTML += key;
  if (keys == "konami") {
    document.getElementById("body").style.backgroundColor="#007cba";
    document.getElementById("header").style.backgroundColor="white";
    document.getElementById("text").style.color="white";
  }
}

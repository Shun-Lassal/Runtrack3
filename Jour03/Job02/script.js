function shuffle(arr) {
  for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
  return arr;
}

let win = "Vous avez gagné!";

let arc1 = "<img id='img1' src='images/arc1.png'>";
let arc2 = "<img id='img2' src='images/arc2.png'>";
let arc3 = "<img id='img3' src='images/arc3.png'>";
let arc4 = "<img id='img4' src='images/arc4.png'>";
let arc5 = "<img id='img5' src='images/arc5.png'>";
let arc6 = "<img id='img6' src='images/arc6.png'>";

let ordre = [arc1,arc2,arc3,arc4,arc5,arc6];
let array2 = [];


$("#button").click(function(){
  array1 = shuffle(ordre);
  $("#melangees").remove();
  $("#melangees").append("<div id='melangees'>"+array1+"</div>");
})


$("#img1").click(function (){
  $('#rangees').append();
})
$("#img2").click(function (){
  $('#rangees').append();
})
$("#img3").click(function (){
  $('#rangees').append();
})
$("#img4").click(function (){
  $('#rangees').append();
})
$("#img5").click(function (){
  $('#rangees').append();
})
$("#img6").click(function (){
  $('#rangees').append();
})

function checkArray(n){

}

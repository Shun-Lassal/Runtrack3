
let text = "le $ est un bon élément monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la classe pour cacher cet élément.";

$("#button").click(function (){
  $('body').append('<p>' + text + '</p>');
})

$("#button2").click(function(){
  $('html').remove();

})
